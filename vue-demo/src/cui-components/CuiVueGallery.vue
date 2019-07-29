<template>
  <div class="ui-block">
    <h3 class="ui-block-heading">vue-gallery</h3>
    <a target="_blank" href="https://github.com/RobinCK/vue-gallery" class="ui-block-description">https://github.com/RobinCK/vue-gallery</a>

    <div class="alert alert-warning mt-5">
      <strong>vue-gallery</strong> doesn't support Internet Explorer 10 and below, use b-modal fallback.
    </div>

    <div class="alert alert-warning rtl-only mt-5">
      <strong>vue-gallery</strong> does not support touch events and slide animation in RTL mode.
    </div>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example">
      <gallery v-if="!isIE10Mode" ref="gallery" :images="imageLinks" :index="index" @close="index = null" :options="options"></gallery>

      <!-- IE10 fallback -->
      <b-modal v-if="isIE10Mode" :visible="galleryFallback" @hidden="index=null" size="xl" hide-footer hide-header content-class="bg-transparent" body-class="p-0">
        <button class="close position-absolute text-white opacity-100 px-3" style="font-size:40px;right:0" @click="index=null">&times;</button>
        <img v-if="index!==null" :src="imageLinks[index]" class="mw-100 rounded">
      </b-modal>

      <div class="row">
        <div class="col-md-3" v-for="(image, i) in images" :key="i">
          <a @click="index = i" :title="image.title" class="img-thumbnail" href="javascript:void(0)">
            <img :src="publicUrl + image.url" class="img-fluid" :alt="image.altText">
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<style src="@/vendor/libs/vue-gallery/vue-gallery.scss" lang="scss"></style>

<script>
export default {
  components: {
    gallery: () => import('vue-gallery').then(m => m.default).catch(() => {})
  },
  data: () => ({
    index: null,
    images: [
      {
        url: 'img/bg/1.jpg',
        title: 'Image 1',
        altText: 'Image 1'
      },
      {
        url: 'img/bg/2.jpg',
        title: 'Image 2',
        altText: 'Image 2'
      },
      {
        url: 'img/bg/3.jpg',
        title: 'Image 3',
        altText: 'Image 3'
      },
      {
        url: 'img/bg/4.jpg',
        title: 'Image 4',
        altText: 'Image 4'
      }
    ],
    options: {
      // =======================================================================
      // RTL-only fix: Disable touch events and fix positioning
      //
      onopen: function () {
        if (document.documentElement.getAttribute('dir') !== 'rtl' &&
               document.body.getAttribute('dir') !== 'rtl') return

        const prototype = Object.getPrototypeOf(this)
        const galleryTranslateX = prototype.translateX

        prototype.translateX = function (index, x, speed) {
          x = this.touchStart && this.touchStart.x ? x : -1 * x
          galleryTranslateX.call(this, index, x, 0, speed)
        }

        prototype.positionSlide = function (index) {
          const slide = this.slides[index]
          slide.style.width = this.slideWidth + 'px'
          if (this.support.transform) {
            slide.style.right = index * -this.slideWidth + 'px'
            this.move(
              index,
              this.index > index
                ? -this.slideWidth
                : this.index < index ? this.slideWidth : 0,
              0
            )
          }
        }

        prototype.ontouchstart = function () {}
        prototype.ontouchmove = function () {}
        prototype.ontouchend = function () {}
        prototype.ontouchcancel = function () {}
      }
      // END ===================================================================
    }
  }),
  computed: {
    imageLinks () {
      return this.images.map(img => this.publicUrl + img.url)
    },

    galleryFallback () {
      return this.index !== null
    }
  }
}
</script>
