***See migration guides in the docs***

---

### 1.3.1

**HTML5, .Net Core, .Net MVC, Laravel, Rails**

  *  Changed: all dependencies that rely on GitHub repository were removed from package.json and copied directly to the "libs" directory

### 1.3.0

  *  Upgraded: bootstrap to 4.3.*
  *  Upgraded: node-sass to 4.11.*
  *  Upgraded: ionicons to 4.5.*
  *  Upgraded: @fortawesome/fontawesome-free to 5.8.*. See https://github.com/FortAwesome/Font-Awesome/blob/master/UPGRADING.md
  *  Fixed: form feedbacks
  *  Added: feedbacks support for switchers
  *  Added: .overflow-visible, .cursor-move, .font-weight-thin, .font-sans-serif, .font-serif, .font-monospace, .bg-none and .cell-fit helper classes
  *  Added: Multi language support for ThemeSettings plugin
  *  Added: Bootstrap 4 custom range inputs
  *  Added: Bootstrap 4 toasts
  *  Added: Bootstrap 4 spinners
  *  Added: Timeline element to the Social UI Kit
  *  Added: Sketch files
  *  Modified: Control layout sidenav hover state using Javascript instead of pure CSS. This change gives more control over the sidenav state and fixes "freezed" sidenav on tablets
  *  Refactored: Core Appwork CSS
  *  Note: Added support for Nodejs v10.15 LTS

**HTML5, .Net Core, .Net MVC, Laravel, Rails**

  *  Replaced: bootstrap-tour with Shepherd.js. See https://shipshapecode.github.io/shepherd/
  *  Upgraded: bootstrap-table to 1.14.*. Note: Some extensions were removed
  *  Upgraded: bootbox to 5.0.*
  *  Upgraded: chart.js to 2.8.*
  *  Upgraded: jquery-validation to 1.19.*
  *  Upgraded: moment to 2.24.*
  *  Upgraded: nouislider to 13.1.*
  *  Upgraded: sortablejs to 1.8.*
  *  Upgraded: swiper to 4.5.*
  *  Upgraded: sweetalert2 to 8.7.*
  *  Upgraded: bootstrap-slider to 10.6.*
  *  Upgraded: flot to 3.0.*. See https://github.com/flot/flot/blob/master/CHANGELOG.md
  *  Upgraded: fullcalendar to 4.0.*. The plugin API changed - see https://fullcalendar.io/docs and demo examples
  *  Upgraded: development dependencies
  *  Added: flatpickr plugin
  *  Note: `bootstrap-sweetalert` package has been deprecated since no development activity in the plugin repository. Use original SweetAlert2 plugin instead.

**Vue.js, Laravel + Vue.js**

  *  **Breaking**: "baseUrl" global property is renamed to "publicUrl" because of name collisions
  *  Upgraded: bootstrap-vue to 2.0.0-rc.16
  *  Upgraded: vue to 2.6.*
  *  Upgraded: nouislider to 13.1.*
  *  Upgraded: vue-clipboard2 to 0.3.*
  *  Upgraded: moment to 2.24.*
  *  Upgraded: chart.js to 2.8.*
  *  Upgraded: vue-echarts to 4.0.*
  *  Upgraded: vue-flatpickr-component to 8.1.*
  *  Upgraded: vue-gallery to 2.0.*. Breaking: the component doesn't support IE10 anymore, see usage examples
  *  Upgraded: vue-input-tag to 2.0.*. See https://github.com/matiastucci/vue-input-tag
  *  Upgraded: vue-number-input-spinner to 2.1.*
  *  Upgraded: vue-password-strength-meter to 1.4.*
  *  Upgraded: vuedraggable to 2.20.*. See https://github.com/SortableJS/Vue.Draggable/blob/master/documentation/migrate.md. Breaking: component import changed from "vuedraggable" to "vuedraggable/src/vuedraggable"
  *  Upgraded: vue-slider-component to 3.0.*. See https://nightcatsama.github.io/vue-slider-component/#/api/props
  *  Upgraded: vue-simple-calendar to 4.2.*
  *  Upgraded: vue-simplemde to 0.5.*
  *  Upgraded: vue-meta to 1.6.*
  *  Upgraded: development dependencies
  *  Added: echarts package

**Angular**

  *  Replaced: ng-autosize with ngx-textarea-autosize due low activity in plugin's repository. See https://github.com/evseevdev/ngx-textarea-autosize
  *  Replaced: @toverux/ngx-sweetalert2 package with new @sweetalert2/ngx-sweetalert2
  *  Upgraded: @angular to 7.2.*
  *  Upgraded: @angular/cdk to 7.3.*
  *  Upgraded: @angular/cli to 7.3.*
  *  Upgraded: @ng-bootstrap/ng-bootstrap to 4.1.*
  *  Upgraded: ng-select to 2.16.*
  *  Upgraded: ngx-charts to 10.1.*
  *  Upgraded: ngx-datatable to 14.0.*
  *  Upgraded: angular-2-dropdown-multiselect to 1.9.*
  *  Upgraded: angular-sortablejs to 2.7.*
  *  Upgraded: sortablejs to 1.8.*
  *  Upgraded: nouislider to 13.1.*
  *  Upgraded: ngx-trend to 3.4.*
  *  Upgraded: ng-block-ui to 2.1.*
  *  Upgraded: ngx-chips to 2.0.0-beta.0
  *  Upgraded: ngx-contextmenu to 5.1.*
  *  Upgraded: ng2-charts to 2.2.*. Breaking change: Replace "ng2-charts/ng2-charts" imports with "ng2-charts"
  *  Upgraded: ng-chartist to 4.1.*
  *  Upgraded: ng2-dragula to 2.1.*. API changed, see https://github.com/valor-software/ng2-dragula
  *  Upgraded: ngx-clipboard to 12.0.*
  *  Upgraded: ngx-tour-core to 4.0.*
  *  Upgraded: ngx-tour-ng-bootstrap to 4.0.*
  *  Upgraded: ngx-perfect-scrollbar to 7.2.*
  *  Upgraded: ngx-color-picker to 7.4.*
  *  Upgraded: ng2-smart-table to 1.4.*
  *  Upgraded: ngx-toastr to 10.0.*. See https://github.com/scttcper/ngx-toastr/releases/tag/v10.0.0
  *  Upgraded: ngx-swiper-wrapper to 7.2.*
  *  Upgraded: ngx-dropzone-wrapper to 7.2.*
  *  Upgraded: ngx-markdown-editor to 1.2.*
  *  Upgraded: angular-calendar to 0.27.*
  *  Upgraded: highlight.js to 9.15.*
  *  Upgraded: marked to 0.6.*
  *  Upgraded: core-js to 2.6.*
  *  Upgraded: moment to 2.24.*
  *  Upgraded: rxjs to 6.4.*
  *  Upgraded: rxjs-compat to 6.4.*
  *  Upgraded: sweetalert2 to 8.7.*
  *  Upgraded: development dependencies

**Vue.js**

  *  Removed: deprecated VueCLI 2 projects

**Laravel, Laravel + Vue.js**

  *  Upgraded: laravel to 5.8.*. See https://laravel.com/docs/5.8/upgrade

**Laravel + Vue.js**

  *  Fixed: Hot Module Replacement bug in laravel-mix

**Rails**

  *  Upgraded: rails to 5.2.3. See https://github.com/rails/rails/releases/tag/v5.2.2 and https://github.com/rails/rails/releases/tag/v5.2.3

**.Net Core**

  *  Upgraded: .Net Core version to 2.2.*. See https://docs.microsoft.com/en-us/aspnet/core/migration/21-to-22
  *  Added: "build:vendor:copy" task that copying custom vendor assets from node_modules. See Gulpfile.js
  *  Added: support for unobtrusive validation out-of-the-box.
  *  Modified: Split build task on development and production mode to decrease compile time while developing.

**.Net MVC**

  *  Upgraded: NuGet packages

### 1.2.2

**Vue, Laravel + Vue.js**

  *  Upgraded: vue to 2.6.*
  *  Fixed: Inconsistency between vue and vue-template-compiler versions

### 1.2.1

**Angular**

  *  Fixed: ngx-markdown-editor examples

**Laravel, Laravel + Vue.js**

  *  Fixed: Complete upgrade to laravel 5.7.*. See https://laravel.com/docs/5.7/upgrade#upgrade-5.7.0

### 1.2.0

  *  Upgraded: ionicons to 4.4.*
  *  Upgraded: replace deprecated @fortawesome/fontawesome-free-webfonts package with @fortawesome/fontawesome-free
  *  Fixed: breadcrumb dividers in RTL mode
  *  Fixed: modal-dialog border color
  *  Fixed: form state feedback support for .form-control-file
  *  Fixed: switchers in RTL mode
  *  Fixed: custom radio indicator bg
  *  Added: indeterminate checkboxes

**HTML5, .Net Core, .Net MVC, Laravel, Rails**

  *  Upgraded: animate.css to 3.7.*
  *  Upgraded: bootstrap-slider to 10.2.*
  *  Upgraded: dropzone to 5.5.*
  *  Upgraded: sweetalert2 to 7.28.*
  *  Upgraded: text-mask-addons to 3.8.*
  *  Upgraded: jquery-validation to 1.18.*
  *  Upgraded: jquery-minicolors to 2.3.*
  *  Upgraded: nouislider to 12.0.*
  *  Upgraded: pwstrength-bootstrap to 3.0.*
  *  Upgraded: swiper to 4.4.*
  *  Upgraded: tableexport.jquery.plugin to 1.10.*
  *  Upgraded: development dependencies
  *  Updated: toastr icons
  *  Removed: unnecessary jquery.flot.tooltip package

**Vue.js, Laravel + Vue.js**

  *  Upgraded: text-mask-addons to 3.8.*
  *  Upgraded: vue-c3 to 1.2.*
  *  Upgraded: vue-chartjs to 3.4.*
  *  Upgraded: vue-clipboard2 to 0.2.*
  *  Upgraded: vue-color to 2.7.*
  *  Upgraded: vue-cropper to 0.4.*
  *  Upgraded: vue-password-strength-meter to 1.3.*
  *  Upgraded: vue2-google-maps to 0.10.*
  *  Upgraded: vuejs-datepicker to 1.5.*
  *  Upgraded: nouislider to 12.0.*
  *  Upgraded: vue-echarts to 3.1.*
  *  Upgraded: vue-flatpickr-component to 8.0.*
  *  Upgraded: vue-simple-calendar to 4.1.*. See https://github.com/richardtallent/vue-simple-calendar/blob/master/CHANGELOG.md#breaking-changes
  *  Upgraded: vue2-dropzone to 3.5.*
  *  Upgraded: development dependencies
  *  Added: c3 package (vue-c3 dependency)
  *  Updated: vue-toasted styling

**Angular**

  *  Replaced: ng-select with @ng-select/ng-select due low activity in plugin's repository. See https://github.com/ng-select/ng-select
  *  Upgraded: angular to 7.0.*
  *  Upgraded: rxjs to 6.3.*
  *  Upgraded: rxjs-compat to 6.3.*
  *  Upgraded: angular to 6.1.*
  *  Upgraded: angular-cli to 6.1.*
  *  Upgraded: @angular/cdk to 7.0.*
  *  Upgraded: ng-bootstrap to 3.3.*
  *  Upgraded: ngx-charts to 9.0.*
  *  Upgraded: ngx-datatable to 13.1.*
  *  Upgraded: angular-confirmation-popover to 4.2.*
  *  Upgraded: angular-sortablejs to 2.6.*
  *  Upgraded: sweetalert2 to 7.28.*
  *  Upgraded: text-mask-addons to 3.8.*
  *  Upgraded: ngx-color-picker to 6.7.*
  *  Upgraded: ngx-swiper-wrapper to 6.4.*
  *  Upgraded: ngx-perfect-scrollbar to 6.3.*
  *  Upgraded: ngx-dropzone-wrapper to 6.2.*
  *  Upgraded: ngx-toastr to 9.1.*
  *  Upgraded: ng2-smart-table to 1.3.*
  *  Upgraded: marked to 0.5.0
  *  Upgraded: angular-calendar to 0.26.*. See https://github.com/mattlewis92/angular-calendar/blob/master/CHANGELOG.md#breaking-changes
  *  Upgraded: nouislider to 12.0.*
  *  Upgraded: development dependencies
  *  Added: ng2-completer package (ng2-smart-table dependency)
  *  Added: "destroy" event emitter to sidenav component
  *  Updated: ngx-datatable styling
  *  Updated: ngx-toastr icons
  *  Updated: Quill component
  *  Updated: Move IE11 MouseEvent fix to polyfills.ts

**Vue.js**

  * Vue projects upgraded to VueCLI 3. **VueCLI 2 generated projects are deprecated and will be removed on the next release**


**.Net Core**

  *  Added: "default" task in Gulpfile.js
  *  Upgraded: .Net Core dependency to 2.1.5
  *  Updated: gulp build hooks (Gulpfile.js and *.csproj changed)

**.Net MVC**

  *  Fixed: issues related to deploying to IIS
  *  Added: CssRewriteUrlTransformWrapper to fix asset paths when the project is deployed on non-root url (IIS)
  *  Upgraded: NuGet dependencies
  *  Changed: Disable minification for vendor javascripts

**Laravel**

  *  Upgraded: laravel to 5.7.*

**Laravel + Vue.js**

  *  Upgraded: laravel to 5.7.*
  *  Updated: Add polyfills to entry-point.js
  *  Updated: Laravel Mix config
  *  Updated: package.json config

**Known issues**

  *  **Laravel + Vue.js** and deprecated **Vue.js CLI2** projects don't support `vue-cropper` and `vue-c3` packages

### 1.1.0

  *  Upgraded: bootstrap to 4.1.*
  *  Updated: utilities
  *  Updated: icons
  *  Added: fixed footers
  *  Added: footer position switcher in ThemeSettings panel
  *  Added: footer background switcher in ThemeSettings panel
  *  Added: `.app-brand` component
  *  Added: laravel-vue-starter project
  *  Added: aspnet-core-demo project
  *  Added: aspnet-mvc-demo project
  *  Added: laravel-demo project
  *  Added: rails-demo project
  *  Fixed: `.layout-sidenav-horizontal` z-index
  *  Fixed: namespace in aspnet-core-starter
  *  Fixed: `.container-p-y` and `.container-m--y` utilities for non-RTL styles

**HTML5, .Net Core, .Net MVC, Laravel, Rails**

  *  Upgraded: bootstrap-datepicker to 1.8.*
  *  Upgraded: bootstrap-daterangepicker to 3.0.*
  *  Upgraded: moment to 2.22.*
  *  Upgraded: swiper to 4.3.*
  *  Upgraded: blueimp-gallery to 2.33.*
  *  Upgraded: nouislider to 11.1.*
  *  Upgraded: sweetalert2 to 7.22.*
  *  Upgraded: ladda to 2.0.*
  *  Upgraded: vanilla-text-mask to 5.1.*
  *  Upgraded: bootstrap-select to 1.13.*
  *  Upgraded: c3 to 0.6.*
  *  Upgraded: perfect-scrollbar to 1.4.*
  *  Updated: bootstrap-datepicker styling
  *  Updated: bootstrap-daterangepicker styling
  *  Added: fullcalendar plugin

**Angular**

  *  Upgraded: angular to 6.0.*
  *  Upgraded: angular-cli to 6.0.*
  *  Upgraded: ng-bootstrap to 2.1.*
  *  Upgraded: cdk to 6.2.*
  *  Upgraded: ngx-chips to 1.9.*
  *  Upgraded: ngx-charts to 8.0.*
  *  Upgraded: ngx-datatable to 13.0.*
  *  Upgraded: angular2-text-mask to 9.0.*
  *  Upgraded: ng-block-ui to 1.0.*
  *  Upgraded: ngx-clipboard to 11.1.*
  *  Upgraded: ngx-color-picker to 6.3.*
  *  Upgraded: ngx-contextmenu to 5.0.*
  *  Upgraded: ngx-dropzone-wrapper to 6.1.*
  *  Upgraded: ngx-perfect-scrollbar to 6.2.*
  *  Upgraded: ngx-swiper-wrapper to 6.2.*
  *  Upgraded: ngx-tour-ng-bootstrap to 3.0.*
  *  Upgraded: sweetalert2 to 7.22.*
  *  Upgraded: ngx-trend to 3.3.*
  *  Upgraded: ngx-toastr to 8.8.*
  *  Upgraded: angular2-ladda to 2.0.*
  *  Upgraded: nouislider to 11.1.*
  *  Upgraded: moment to 2.22.*
  *  Upgraded: ngx-sweetalert2 to 4.0.*
  *  Upgraded: rxjs to 6.2.*
  *  Upgraded: angular-2-dropdown-multiselect to 1.8.*
  *  Upgraded: marked to 0.4.*
  *  Updated: starter project
  *  Updated: docs
  *  Added: scroll to top of the page on route change
  *  Added: ThemeSettings service
  *  Added: angular-calendar component
  *  Fixed: linting errors

**Vue.js, Laravel + Vue.js**

  *  Upgraded: bootstrap-vue to 2.0.0-rc.11
  *  Upgraded: vue-meta to 1.5.*
  *  Upgraded: vuejs-datepicker to 1.3.*
  *  Upgraded: vue-chartjs to 3.3.*
  *  Upgraded: vue-clipboard2 to 0.1.*
  *  Upgraded: vue-jstree to 2.1.*
  *  Upgraded: vue-masonry to 0.11.*
  *  Upgraded: vue-multiselect to 2.1.*
  *  Upgraded: vue-password-strength-meter to 1.2.*
  *  Upgraded: vue-text-mask to 6.1.*
  *  Upgraded: vue-slider-component to 2.7.*
  *  Upgraded: vue2-dropzone to 3.2.*
  *  Upgraded: vue-tables-2 to 1.4.*
  *  Upgraded: vue2-google-maps to 0.9.*
  *  Upgraded: ladda to 2.0.*
  *  Upgraded: nouislider to 11.1.*
  *  Upgraded: moment to 2.22.*
  *  Upgraded: perfect-scrollbar to 1.4.*
  *  Upgraded: vue-gallery to 1.4.*
  *  Updated: vue-masonry import
  *  Added: scroll to top of the page on route change
  *  Added: ThemeSettings helpers
  *  Added: vue-simple-calendar component

### 1.0.0

  *  Initial release
