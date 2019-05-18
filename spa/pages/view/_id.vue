<!--
This is the allergy passport, if the affected person clicks on his profile,
he receives his allergy passport, with all relevant information certified by a specialist.
-->

<template>
    <section class="container-fluid" v-if="user">

        <h1>{{user.affected.first_name}} {{user.affected.last_name}}</h1>

        <div class="form-address item">
            {{user.affected.street}}
            {{user.affected.street_number}} <br />
            {{user.affected.zip}}
            {{user.affected.city}} <br />
            {{user.affected.phone_number}} <br />
            {{user.affected.ahv_number}} <br />
            {{user.affected.birth_date}} <br />
        </div>

        <h2> Medizinische Informationen </h2>

        <div
            v-for="(items, key, i) in user.affectedItems"
            v-bind:key="i"
            :class="key"
        >

            <div
                v-for="(item, j) in items"
                v-bind:key="i+'-'+ j"
                class="item"
            >

                <div class="form-group">
                    <p class="label">{{item.type}}</p>
                    <p class="value">{{item.name}}</p>
                </div>

                <div class="form-group" v-if="item.symptoms">
                    <p class="label">Symptome</p>
                    <p>{{item.symptoms}}</p>
                </div>

                <div class="form-group" v-if="item.verification">
                    <p class="label">Nachgewiesen am</p>
                    <p>{{item.verification}}</p>
                </div>

                <div class="form-group" v-if="item.suspicion">
                    <p class="label">Verdacht auf</p>
                    <p> Ja </p>
                </div>

                <div class="form-group" v-if="item.emergency_medication">
                    <p class="label">Notfallmedikamente</p>
                    <p class="emergency">{{item.emergency_medication}}</p>
                </div>

            </div>

        </div>

       <h2> Ausgestellt von </h2>
       <div class="form-address">
            {{user.careProvider.name}} <br />
            {{user.careProvider.title}}
            {{user.careProvider.first_name}}
            {{user.careProvider.last_name}} <br />
            {{user.careProvider.discipline}} <br />
            {{user.careProvider.street}}
            {{user.careProvider.street_number}} <br />
            {{user.careProvider.zip}}
            {{user.careProvider.city}} <br />
            {{user.careProvider.phone_number}} <br />
         </div>
        <br />

        <button v-on:click="onDelete" class="btn btn-primary">
            <fa :icon="['fas', 'trash']" />
            Entfernen
        </button>

    </section>

</template>

<script>
export default {

    computed: {
        users() {
            return this.$store.state.users.items || {};
        }
    },

    data() {
        return {
            loading: true,
            user: null
        }
    },

    async mounted() {
        let userId = this.$route.params.id;

        if (!Object.keys(this.users).length) {
            this.$router.push('/');
        }

        this.user = this.users[userId];
    },

    methods: {

        onDelete: function (event) {
            let userId = this.$route.params.id;
            this.$store.commit('users/remove', userId);
            this.$router.push('/');
        }
    }
}

</script>

<style>

    .item {
        margin: 0 10px 30px 0;
    }

    p {
        margin: 0;
        padding: 0;
    }

    p.label {
        color: #999;
        font-size: 85%;
    }

    div.form-group {
        margin: 0 0 5px 0;
        padding: 0;
    }

    p.emergency {
        color: red
    }

</style>
