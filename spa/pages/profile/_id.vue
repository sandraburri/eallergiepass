<template>
    <section class="container">
        {{title}}
    </section>
</template>

<script>
export default {

    data() {
        return {
            loading: true,
            title: 'loading...'
        }
    },

    async mounted() {
        let { data } = await this.$axios.$get(`${process.env.NUXT_ENV_API_URL}/api/users/${this.$route.params.id}`);
        this.title = data.ahv_number;
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
