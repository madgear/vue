<script src="assets/vue/vue.global.js"></script>

<div id="app"><h1>{{m}}</h1></div>

<script>
  const {createApp} = Vue

  createApp({
    data() {
      return {
        m: 'madgear'
      }
    }
  }).mount('#app')
</script>
