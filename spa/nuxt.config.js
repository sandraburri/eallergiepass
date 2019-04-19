/* eslint-disable nuxt/no-cjs-in-config */

import pkg from './package'
require('dotenv').config()
const path = require('path')

export default {
    mode: 'spa',

    /*
     ** Headers of the page
     */
    head: {
        title: pkg.name,
        meta: [
            { charset: 'utf-8' },
            {
                name: 'viewport',
                content: 'width=device-width, initial-scale=1'
            },
            {
                hid: 'description',
                name: 'description',
                content: pkg.description
            }
        ],
        link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }]
    },

    loading: { color: '#fff' },

    css: ['~/assets/scss/app.scss'],

    plugins: ['~/plugins/globals'],

    modules: [
        // Doc: https://axios.nuxtjs.org/usage
        '@nuxtjs/axios',
        // Doc: https://bootstrap-vue.js.org/docs/
        'bootstrap-vue/nuxt',
        '@nuxtjs/pwa',
        '@nuxtjs/proxy',
        '@nuxtjs/dotenv'
    ],

    axios: {
        // See https://github.com/nuxt-community/axios-module#options
    },

    router: {
        base: '/spa/'
    },

    configureWebpack: {
        resolve: {
            alias: {
                'bootstrap-components': path.resolve(
                    __dirname,
                    'node_modules/bootstrap-vue/es/components'
                )
            }
        }
    },

    build: {
        extend(config, ctx) {
            // Run ESLint on save
            // if (ctx.isDev && ctx.isClient) {
            //     config.module.rules.push({
            //         enforce: 'pre',
            //         test: /\.(js|vue)$/,
            //         loader: 'eslint-loader',
            //         exclude: /(node_modules)/
            //     })
            // }
        }
    },

    proxy: {
        '/api': {
            target: 'https://eallergiepass.test',
            pathRewrite: {
                '^/api': '/'
            }
        }
    },

    workbox: {
        config: {
            debug: true
        }
    },

    manifest: {
        name: 'eAllergiepass',
        lang: 'de'
    }
}
