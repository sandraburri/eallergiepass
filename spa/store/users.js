/* eslint-disable no-console */

export const state = () => ({
    items: {}
})

export const getters = {
    get(state) {
        const result = state.items
        console.debug('users.get()', JSON.stringify(result))
        return result
    }
}

export const actions = {}

export const mutations = {
    add(state, item) {
        console.debug('users.add', item)
        const items = state.items || {}
        items[item.userId] = item
        state.items = items
    },
    remove(state, userId) {
        console.debug('users.remove', userId)
        const items = state.items || {}
        delete items[userId]
        state.items = items
    },
    set(state, items) {
        state.items = items
    }
}
