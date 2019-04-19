<template>
    <section class="container-fluid">

        <div class="text-justify mb-4">
            Scannen Sie den QR-Code auf Ihrem Allergiepass
            mit der Smartphone Kamera.
        </div>

        <ul class="list-group">
            <li class="list-group-item list-group-item-action"><nuxt-link to="/profile/f02255d0-5e91-11e9-8650-c5d045daf6c0">Sandra Burri</nuxt-link></li>
            <li class="list-group-item list-group-item-action"><nuxt-link to="/profile/f0227150-5e91-11e9-b48a-fb57e2e4ed32">Rebecca Scheidegger</nuxt-link></li>
        </ul>
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
        this.title = "Test";
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

