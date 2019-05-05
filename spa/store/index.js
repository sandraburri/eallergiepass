/* eslint-disable no-console */

export const state = () => ({
    nuxtReady: false,
    persistedStateReady: false
})

export const mutations = {
    nuxtReady(state, nuxtReady) {
        console.debug('nuxtReady', nuxtReady)
        state.nuxtReady = nuxtReady
    },
    persistedStateReady(state, persistedStateReady) {
        console.debug('persistedStateReady', persistedStateReady)
        state.persistedStateReady = persistedStateReady;
    }
}
