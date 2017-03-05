import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/' },
    // { path: '/register', component: Register },
    // { path: '/login', component: Login }
  ]
})

var vm = new Vue({
  router,
  el: '#app',
  render: h => h(App)
})
