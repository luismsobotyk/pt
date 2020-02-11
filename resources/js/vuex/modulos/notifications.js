export default {
    state: {
        items: []
    },

    mutations: {
        LOAD_NOTIFICATIONS(state, notifications) {
            state.items = notifications
        },
        ADD_NOTIFICATION(state, notification) {
            state.items.push(notification)
        }
    },

    actions: {
        loadNotifications(context) {
            axios.get('/notifications')
                .then(response => {
                    if (typeof response.data === 'object' && 'notifications' in response.data) {
                        context.commit('LOAD_NOTIFICATIONS', response.data.notifications)
                    }
                })
        },
    }
}
