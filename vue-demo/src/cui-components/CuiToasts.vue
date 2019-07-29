<template>
  <div class="ui-block">
    <h3 class="ui-block-heading">Bootstrap 4 toasts</h3>

    <h4 class="ui-block-heading">Default</h4>

    <div class="cui-example">

      <div class="bs4-toast toast show" :class="toast.variant" v-for="toast in bs4Toasts" :key="toast.title">
        <div class="toast-header">
          <img :src="publicUrl + toast.avatar" class="d-block ui-w-20 rounded mr-2" alt="">
          <div class="font-weight-bold mr-auto">{{ toast.title }}</div>
          <div class="d-block small">{{ toast.time }}</div>
          <button type="button" class="close d-block mb-1 ml-2" @click="closeBs4Toast(toast)">&times;</button>
        </div>
        <div class="toast-body">
          {{ toast.message }}
        </div>
      </div>

    </div>

    <h4 class="ui-block-heading">Translucent</h4>

    <div class="cui-example">
      <div class="ui-bg-cover ui-bg-overlay-container p-4" :style="`background-image: url('${publicUrl}img/bg/1.jpg');`">
        <div class="ui-bg-overlay bg-dark opacity-50"></div>

        <div class="bs4-toast toast show" :class="toast.variant" v-for="toast in translucentBs4Toasts" :key="toast.title">
          <div class="toast-header">
            <img :src="publicUrl + toast.avatar" class="d-block ui-w-20 rounded mr-2" alt="">
            <div class="font-weight-bold mr-auto">{{ toast.title }}</div>
            <div class="d-block small">{{ toast.time }}</div>
            <button type="button" class="close d-block mb-1 ml-2" @click="closeTranslucentBs4Toast(toast)">&times;</button>
          </div>
          <div class="toast-body">
            {{ toast.message }}
          </div>
        </div>

      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
    bs4Toasts: [{
      variant: null,
      avatar: 'img/avatars/1.png',
      title: 'Default',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-primary',
      avatar: 'img/avatars/1.png',
      title: 'Primary',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-secondary',
      avatar: 'img/avatars/1.png',
      title: 'Secondary',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-success',
      avatar: 'img/avatars/1.png',
      title: 'Success',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-warning',
      avatar: 'img/avatars/1.png',
      title: 'Warning',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-info',
      avatar: 'img/avatars/1.png',
      title: 'Info',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-danger',
      avatar: 'img/avatars/1.png',
      title: 'Danger',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-dark',
      avatar: 'img/avatars/1.png',
      title: 'Dark',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }],

    translucentBs4Toasts: [{
      variant: null,
      avatar: 'img/avatars/1.png',
      title: 'Default',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-primary',
      avatar: 'img/avatars/1.png',
      title: 'Primary',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-secondary',
      avatar: 'img/avatars/1.png',
      title: 'Secondary',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-success',
      avatar: 'img/avatars/1.png',
      title: 'Success',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-warning',
      avatar: 'img/avatars/1.png',
      title: 'Warning',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-info',
      avatar: 'img/avatars/1.png',
      title: 'Info',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-danger',
      avatar: 'img/avatars/1.png',
      title: 'Danger',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }, {
      variant: 'bg-dark',
      avatar: 'img/avatars/1.png',
      title: 'Dark',
      time: '11 mins ago',
      message: 'Hello, world! This is a toast message.'
    }]
  }),
  methods: {
    closeBs4Toast (toast) {
      const index = this.bs4Toasts.indexOf(toast)
      this.bs4Toasts.splice(index, 1)
    },

    closeTranslucentBs4Toast (toast) {
      const index = this.translucentBs4Toasts.indexOf(toast)
      this.translucentBs4Toasts.splice(index, 1)
    }
  }
}
</script>
