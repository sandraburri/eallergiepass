<template>
    <section class="container-fluid">
        {{user.ahv_number}}
    </section>
</template>

<script>
export default {

    data() {
        return {
            loading: true,
            user: {}
        }
    },

    async mounted() {
        let userId = this.$route.params.id;

        let users = localStorage['users'] || '';
        if (users) {
            users = JSON.parse(users);
        }

        users = users || {};
         if (!Object.keys(users).length) {
            this.$router.push('/');
        }
        
        this.user = users[userId];
    },

    methods: {
    }
}

</script>

<style>
.container {
    margin: 0 auto;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
</style>
