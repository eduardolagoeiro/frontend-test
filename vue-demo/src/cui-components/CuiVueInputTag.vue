<template>
  <div class="ui-block">
    <h3 class="ui-block-heading">vue-input-tag</h3>
    <a target="_blank" href="https://github.com/matiastucci/vue-input-tag" class="ui-block-description">https://github.com/matiastucci/vue-input-tag</a>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
      <input-tag v-model="tags" placeholder="Add a tag" :read-only="readonly" />

      <b-btn variant="default"  @click="readonly = !readonly">Toggle read-only</b-btn>

      <!-- Variations -->

      <input-tag class="input-tag-primary" v-model="tags" />
      <input-tag class="input-tag-secondary" v-model="tags" />
      <input-tag class="input-tag-success" v-model="tags" />
      <input-tag class="input-tag-warning" v-model="tags" />
      <input-tag class="input-tag-info" v-model="tags" />
      <input-tag class="input-tag-danger" v-model="tags" />
      <input-tag class="input-tag-dark" v-model="tags" />

      <!-- Validation states -->

      <input-tag class="is-valid" v-model="tags" />
      <input-tag class="is-invalid" v-model="tags" />

    </div>
  </div>
</template>

<style src="@/vendor/libs/vue-input-tag/vue-input-tag.scss" lang="scss"></style>

<script>
import InputTag from 'vue-input-tag'

export default {
  components: {
    InputTag
  },
  data: () => ({
    readonly: false,
    tags: ['Orange', 'Apple', 'Pineapple']
  })
}
</script>
