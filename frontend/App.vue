<template lang="html">
  <section class="app-test">
     {{ message }}
     <hr>
     <router-link to="/application" class="button button--rounded">Application</router-link>
     <hr>
     <router-view></router-view>
  </section>
</template>

<script>
export default {
    data: function() {
        return {
            message: 'vue test'
        }
    }
}
</script>

<style lang="css" scoped>
.app-test {
    border: 2px solid red;
    background: #eee;
    padding: 3em;
}
</style>
