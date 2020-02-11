import store from './vuex/store'

const typesNotifications = {
    newUser: 'App\\Notifications\\NotifyNewUser',
}
if(Laravel.user){
    Echo.private(`App.Models.User.${Laravel.user}`)
        .notification(notification => {
            if(Laravel.user == notification.notifiable_id){
                if(notification.type == typesNotifications.newUser){
                    store.commit('ADD_NOTIFICATION', notification)
                    toastNotification('Um novo usuário se cadastrou no sistema!', '/notificacoes/' + notification.id)
                }
            }
        })
}
