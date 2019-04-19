/* eslint-disable import/first */
import Vue from 'vue'

// -- boostrap
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// -- navbar --
import Header from '~/components/Header'
Vue.component('app-header', Header)

// -- logo --
import Footer from '~/components/Footer'
Vue.component('app-footer', Footer)
