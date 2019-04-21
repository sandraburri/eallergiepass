<template>
    <section class="container-fluid">

        <h1>Profil hinzufügen</h1>

        <div class="loading" v-if="loading">
            Lade Daten ...
        </div>

        <div class="card alert-danger p-2" v-if="error">
            <h5 class="card-title">Fehler</h5>
            Die Daten konnten nicht geladen werden. Bitte versuchen Sie es nochmals.
            <small class="mt-2">
                <b>Technische Meldung:</b> {{error}}
            </small>
        </div>

        <div class="mt-4" v-if="error">
            <nuxt-link to="/add/scan" class="btn btn-primary" v-if="error">
                Nochmals versuchen
            </nuxt-link>
        </div>

    </section>
</template>

<script>
export default {

    data() {
        return {
            loading: true,
            error: ''
        }
    },

    async mounted() {
        let userId = this.$route.params.id;

        this.$axios.onError(e => {
            console.error(`[${e.response && e.response.status}] ${e.response && e.response.request.path}`);
            console.error(e.response && e.response.data);
            this.error = e.response.data.message;
        })

        try {
            let url = `${process.env.NUXT_ENV_API_URL}/api/users/${userId}`;
            let { data } = await this.$axios.$get(url);

            let users = localStorage['users'] || '';
            if (users) {
                users = JSON.parse(users);
            }

            users = users || {};
            users[userId] = data;
            localStorage['users'] = JSON.stringify(users);

            this.$router.push('/');
        } catch(e) {
            console.log(e);
        } finally {
            this.loading = false;
        }
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
