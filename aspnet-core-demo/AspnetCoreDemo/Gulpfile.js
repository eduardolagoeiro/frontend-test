/// <binding ProjectOpened='watch' />
const path = require('path')
const fs = require('fs')
const { src, dest, watch, parallel, series } = require('gulp')
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const sourcemaps = require('gulp-sourcemaps')
const cleanCSS = require('gulp-clean-css')
const rename = require('gulp-rename')
const uglify = require('gulp-uglify')
const babel = require('gulp-babel')
const plumber = require('gulp-plumber')
const notify = require('gulp-notify')
const gulpIf = require('gulp-if')

global.isProduction = false

// -------------------------------------------------------------------------------
// Utilities

function normalize (p) {
  return p.replace(/\\/g, '/')
}

function root (...paths) {
  const result = [].concat(paths).map(p => {
    return p.startsWith('!') ?
      normalize(`!${path.join(__dirname, p.slice(1))}`) :
      normalize(path.join(__dirname, p))
  })

  return result.length === 1 ? result[0] : result
}

// -------------------------------------------------------------------------------
// Build SASS

function buildSass (...paths) {
  return src(root(...paths), {
    base: root('wwwroot')
  })
  .pipe(plumber({
    errorHandler: function (err) {
      notify.onError({
        title: "Gulp error in " + err.plugin,
        message: err.toString()
      })(err)
    }
  }))

  .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'nested'
    }).on('error', sass.logError))
  .pipe(sourcemaps.write())

  .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(autoprefixer({
      browsers: [
        '>= 1%',
        'last 2 versions',
        'not dead',
        'Chrome >= 45',
        'Firefox >= 38',
        'Edge >= 12',
        'Explorer >= 10',
        'iOS >= 9',
        'Safari >= 9',
        'Android >= 4.4',
        'Opera >= 30'
      ]
    }))
  .pipe(sourcemaps.write())

  .pipe(dest(root('wwwroot')))

  .pipe(gulpIf(global.isProduction, cleanCSS()))
  .pipe(gulpIf(global.isProduction, rename({
    extname: '.min.css'
  })))
  .pipe(gulpIf(global.isProduction, dest(root('wwwroot'))))
}

// -------------------------------------------------------------------------------
// Tasks

const buildJsTask = function () {
  return src(root(
    'wwwroot/**/*.js',
    '!wwwroot/**/*.es5.js',
    '!wwwroot/**/*.min.js',
    '!wwwroot/vendor/**/*.js'
  ), {
    base: root('wwwroot')
  })
  .pipe(plumber({
    errorHandler: function (err) {
      notify.onError({
        title: "Gulp error in " + err.plugin,
        message: err.toString()
      })(err)
    }
  }))

  .pipe(sourcemaps.init())
    .pipe(babel({
      presets: [
        ['@babel/preset-env', {
          targets: {
            browsers: [
              '>= 1%',
              'last 2 versions',
              'not dead',
              'Chrome >= 45',
              'Firefox >= 38',
              'Edge >= 12',
              'Explorer >= 10',
              'iOS >= 9',
              'Safari >= 9',
              'Android >= 4.4',
              'Opera >= 30'
            ]
          }
        }]
      ]
    }))
    .pipe(rename({
      extname: '.es5.js'
    }))
  .pipe(sourcemaps.write())

  .pipe(dest(root('wwwroot')))

  .pipe(gulpIf(global.isProduction, uglify()))
  .pipe(gulpIf(global.isProduction, rename({
    extname: '.min.js'
  })))
  .pipe(gulpIf(global.isProduction, dest(root('wwwroot'))))
}

const buildSassTask = function () {
  return buildSass(
    'wwwroot/**/*.scss',
    '!wwwroot/**/_*.scss',
    '!wwwroot/vendor/**/*.scss'
  )
}

const buildVendorSassTask = function () {
  return buildSass(
    'wwwroot/vendor/css/**/*.scss',
    '!wwwroot/vendor/css/**/_*.scss'
  )
}

const buildVendorLibsTask = function () {
  return buildSass(
    'wwwroot/vendor/libs/**/*.scss',
    '!wwwroot/vendor/libs/**/_*.scss'
  )
}

// -------------------------------------------------------------------------------
// Watch

const watchTask = function () {
  watch(root(
    'wwwroot/**/*.scss',
    '!wwwroot/vendor/**/*.scss',
    'wwwroot/vendor/css/_custom-variables/*.scss',
    'wwwroot/vendor/css/_appwork/_variables*.scss'
  ), buildSassTask)
  watch(root('wwwroot/vendor/css/**/*.scss'), buildVendorSassTask)
  watch(root(
    'wwwroot/vendor/libs/**/*.scss',
    'wwwroot/vendor/css/_custom-variables/*.scss',
    'wwwroot/vendor/css/_appwork/_variables*.scss'
  ), buildVendorLibsTask)
  watch(root(
    'wwwroot/**/*.js',
    '!wwwroot/**/*.es5.js',
    '!wwwroot/**/*.min.js',
    '!wwwroot/vendor/**/*.js'
  ), buildJsTask)
}

// -------------------------------------------------------------------------------
// Custom vendors
//
// You can copy custom assets from the node_modules directory to wwwroot directory
// by adding a vendor file path into the "CUSTOM_VENDORS" object:
//
// const CUSTOM_VENDORS = {
//   ...
//   'Path to source file': 'Path to dest file'
// }
//

const CUSTOM_VENDORS = {
  'node_modules/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js': 'wwwroot/vendor/libs/validate/validate.unobtrusive.js'
}

buildVendorCopyTask = parallel(
  Object.keys(CUSTOM_VENDORS).reduce(function (tasks, vendorSrc) {
    if (!fs.existsSync(root(vendorSrc))) {
      console.warn(`Vendor source not found: "${root(vendorSrc)}"`)
      return
    }
  
    const vendorDest = path.dirname(CUSTOM_VENDORS[vendorSrc])
    const vendorName = path.basename(CUSTOM_VENDORS[vendorSrc])
    const functionName = `buildVendorCopy${vendorName.replace(/^./g, m => m.toUpperCase()).replace(/\.(.)/g, (m, $1) => $1.toUpperCase())}Task`
    const taskFunction = function () {
      return src(root(vendorSrc))
        .pipe(rename(vendorName))
        .pipe(dest(root(vendorDest)))
    }
  
    Object.defineProperty(taskFunction, 'name', {
      value: functionName
    })
  
    return tasks.concat(taskFunction)  
  }, [])
)

// -------------------------------------------------------------------------------
// Build

const buildTask = parallel(
  buildSassTask,
  buildJsTask,
  buildVendorSassTask,
  buildVendorLibsTask,
  buildVendorCopyTask
)

const productionBuildTask = series(
  function setProductionMode (cb) {
    global.isProduction = true
    console.warn('>>> Running Gulp in production mode.')
    cb()
  },
  buildTask
)

// -------------------------------------------------------------------------------
// Exports

module.exports = {
  default: buildTask,
  'build:all': buildTask,
  'build:all:prod': productionBuildTask,
  'build:js': buildJsTask,
  'build:sass': buildSassTask,
  'build:vendor:sass': buildVendorSassTask,
  'build:vendor:libs': buildVendorLibsTask,
  'build:vendor:copy': buildVendorCopyTask,
  watch: watchTask
}
