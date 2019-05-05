/* eslint-disable no-console */
import createPersistedState from 'vuex-persistedstate'

export default ({ store }) => {
    console.debug('register onNuxtReady for vuex-persistedstate')

    window.onNuxtReady(() => {
        console.debug('onNuxtReady for vuex-persistedstate', store)
        store.commit('nuxtReady', true)

        const options = {}
        createPersistedState(options)(store)

        store.commit('persistedStateReady', true)
    })
}
