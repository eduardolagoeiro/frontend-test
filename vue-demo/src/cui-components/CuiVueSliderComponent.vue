<template>
  <div class="ui-block">
    <h3 class="ui-block-heading">vue-slider-component</h3>
    <a target="_blank" href="https://github.com/NightCatSama/vue-slider-component" class="ui-block-description">https://github.com/NightCatSama/vue-slider-component</a>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing-lg">
      <vue-slider v-model="vueSliderSingleValue" :height="2" :dotSize="12" tooltip="focus" :direction="isRTL ? 'rtl' : 'ltr'" :disabled="vueSliderDisabled" />

      <div class="mt-4">
        <pre class="mb-4">{{ vueSliderSingleValue }}</pre>
        <b-btn variant="default" @click="vueSliderDisabled = !vueSliderDisabled">Disabled</b-btn>
      </div>

      <vue-slider
        v-model="vueSliderSingleValue"
        :height="2"
        :dotSize="12"
        :interval="10"
        :marks="(v) => ({ label: `$${v}` })"
        :stepStyle="{width:'6px',height:'6px'}"
        tooltip="always"
        tooltipFormatter="${value}"
        :direction="isRTL ? 'rtl' : 'ltr'"
        :disabled="vueSliderDisabled" />

      <!-- Range -->

      <vue-slider
        v-model="vueSliderRangeValue"
        :data="vueSliderRangeData"
        :height="2"
        :dotSize="12"
        tooltip="always"
        :direction="isRTL ? 'rtl' : 'ltr'"
        :disabled="vueSliderDisabled" />

      <pre style="margin-top: 2rem !important">{{ vueSliderRangeValue }}</pre>

      <!-- Vertical -->

      <div>
        <vue-slider class="d-inline-block mr-5"
          v-model="vueSliderSingleValue"
          :direction="'ttb'"
          :width="2"
          :height="200"
          :dotSize="12"
          tooltip="always"
          :tooltipPlacement="!isRTL ? 'right' : 'left'"
          :disabled="vueSliderDisabled" />

        <vue-slider class="d-inline-block"
          v-model="vueSliderSingleValue"
          :direction="'btt'"
          :width="2"
          :height="200"
          :dotSize="12"
          tooltip="always"
          :tooltipPlacement="!isRTL ? 'right' : 'left'"
          :disabled="vueSliderDisabled" />
      </div>

      <!-- Custom styling -->

      <vue-slider
        v-model="vueSliderRangeValue"
        :data="vueSliderRangeData"
        :height="2"
        :dotSize="12"
        :dotStyle="{ backgroundColor: '#f05b72', boxShadow: 'none' }"
        :tooltipStyle="{ backgroundColor: '#f05b72', borderColor: '#f05b72' }"
        :processStyle="{ backgroundImage: `linear-gradient(to ${!isRTL ? 'right' : 'left'}, #f05b72, #3498db)` }"
        tooltip="always"
        :direction="isRTL ? 'rtl' : 'ltr'"
        :disabled="vueSliderDisabled" />

      <!-- Variants -->

      <vue-slider class="vue-slider-primary" v-model="vueSliderRangeValue" :data="vueSliderRangeData" :height="2" :dotSize="12" tooltip="always" :direction="isRTL ? 'rtl' : 'ltr'" :disabled="vueSliderDisabled" />
      <vue-slider class="vue-slider-secondary" v-model="vueSliderRangeValue" :data="vueSliderRangeData" :height="2" :dotSize="12" tooltip="always" :direction="isRTL ? 'rtl' : 'ltr'" :disabled="vueSliderDisabled" />
      <vue-slider class="vue-slider-success" v-model="vueSliderRangeValue" :data="vueSliderRangeData" :height="2" :dotSize="12" tooltip="always" :direction="isRTL ? 'rtl' : 'ltr'" :disabled="vueSliderDisabled" />
      <vue-slider class="vue-slider-warning" v-model="vueSliderRangeValue" :data="vueSliderRangeData" :height="2" :dotSize="12" tooltip="always" :direction="isRTL ? 'rtl' : 'ltr'" :disabled="vueSliderDisabled" />
      <vue-slider class="vue-slider-info" v-model="vueSliderRangeValue" :data="vueSliderRangeData" :height="2" :dotSize="12" tooltip="always" :direction="isRTL ? 'rtl' : 'ltr'" :disabled="vueSliderDisabled" />
      <vue-slider class="vue-slider-danger" v-model="vueSliderRangeValue" :data="vueSliderRangeData" :height="2" :dotSize="12" tooltip="always" :direction="isRTL ? 'rtl' : 'ltr'" :disabled="vueSliderDisabled" />
      <vue-slider class="vue-slider-dark" v-model="vueSliderRangeValue" :data="vueSliderRangeData" :height="2" :dotSize="12" tooltip="always" :direction="isRTL ? 'rtl' : 'ltr'" :disabled="vueSliderDisabled" />
    </div>
  </div>
</template>

<style src="@/vendor/libs/vue-slider-component/vue-slider-component.scss" lang="scss"></style>

<script>
import vueSlider from 'vue-slider-component'

export default {
  components: {
    vueSlider
  },
  data: () => ({
    vueSliderDisabled: false,
    vueSliderSingleValue: 75,
    vueSliderRangeValue: ['10-03', '10-11'],
    vueSliderRangeData: [
      '10-01', '10-02', '10-03', '10-04', '10-05', '10-06', '10-07', '10-08',
      '10-09', '10-10', '10-11', '10-12', '10-13', '10-14', '10-15', '10-16',
      '10-17', '10-18', '10-19', '10-20'
    ]
  })
}
</script>
