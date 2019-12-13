<template>
    <div>
        <li>
            <a :href="'/notificacoes/' + id" class="white-text hover-black">Novo usuário: {{ name }}</a>
        </li>
    </div>
</template>
<script>
    export default {
        props: ['notification'],

        computed: {
            id(){
                return this.notification.id
            },
            name(){
                return this.notification.data.user.name
            }
        }
    }
</script>