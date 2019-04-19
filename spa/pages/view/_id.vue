<template>
    <section class="container-fluid">
        {{user}}
    </section>
</template>

<script>
export default {

    data() {
        return {
            loading: true,
            user: null
        }
    },

    async mounted() {
        let userId = this.$route.params.id;
        let { data } = await this.$axios.$get(`${process.env.NUXT_ENV_API_URL}/api/users/${userId}`);

        let users = localStorage['users'] || '';
        if (users) {
            users = JSON.parse(users);
        }

        users = users || [];
        if (!users.length) {
            this.$router.push('/');
            return;
        }

        this.user = users[0];
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
