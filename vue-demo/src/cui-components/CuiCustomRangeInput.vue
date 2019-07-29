<template>
  <div class="ui-block">
    <h3 class="ui-block-heading">Custom range input</h3>

    <h4 class="ui-block-heading">Example</h4>

    <div class="cui-example">
      <b-form-input type="range" v-model="bs4SliderValue" />
      <p>Value: <strong>{{ bs4SliderValue }}</strong></p>
    </div>

    <h4 class="ui-block-heading">Disabled</h4>

    <div class="cui-example">
      <b-form-input type="range" v-model="bs4SliderValue" :disabled="true" />
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
    bs4SliderValue: 35
  })
}
</script>
