<template>
<div id="app">
  Hello {{ message }} !
  <button @click="update">change</button>
</div>
</template>

<script>
new vue({
  el: '#app',
  data: {
    message: 'World'
  },
  methods: {
    update() {
      this.message = 'Vue.js'
    }
  }
})
</script>
