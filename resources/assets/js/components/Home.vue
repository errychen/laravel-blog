<template>
  <div>
    <h1>{{ msg }}</h1>
    <p>dddddddddddd</p>
    <router-link to="/example">Click To Example</router-link>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        msg: 'This is home page~!'
      }
    }
  }
</script>