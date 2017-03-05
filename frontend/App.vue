<template lang="html">
  <section class="app-test">
      <ul>
         {{ posts }}
         <li>test</li>
      </ul>
  </section>
</template>

<script>
export default {
    data: function() {
        return {
            posts: [{
                'name': 'Bob',
                'age': 23
            }]
        }
    }
}
</script>

<style lang="sass" scoped>
    ul
        border: 1px solid red
        li
            border: 2px solid green
</style>
