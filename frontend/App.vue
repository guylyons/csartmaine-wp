<template lang="html">
  <section class="app-test">
     {{ message }}
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
