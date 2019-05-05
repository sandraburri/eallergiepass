/* eslint-disable no-console */

export const state = () => ({
    items: []
})

export const getters = {
    get(state) {
        const result = state.items
        console.debug('emergencyContacts.get()', JSON.stringify(result))
        return result
    }
}

export const actions = {}

export const mutations = {
    set(state, item) {
        const items = []
        items.push(item)
        state.items = items
    }
}
