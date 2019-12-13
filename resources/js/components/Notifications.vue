<template>
    <div>
        <a class="dropdown-trigger" data-target="notifications" href="#notifications">Notificações ({{
            notifications.length }})<i
                    class="material-icons left">notifications</i></a>
        <ul id='notifications' class='dropdown-content blue-grey darken-4'>
            <notification
                    v-for="notification in notifications"
                    :key="notification.id"
                    :notification="notification">
            </notification>
            <li class="divider" tabindex="-1"></li>
            <li><a href="/notificacoes" class="center white-text hover-black">Ver Tudo<i
                    class="material-icons left">notifications</i></a></li>
        </ul>
    </div>
</template>

<script>
    export default {
        created() {
            this.$store.dispatch('loadNotifications')
        },

        computed: {
            notifications() {
                return this.$store.state.notifications.items
            }
        },
    }
</script>