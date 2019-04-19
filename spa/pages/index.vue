<template>
    <section class="container-fluid">

        <ul class="list-group">
            <li
                v-for="(user, key) in users"
                v-bind:key="key"
                class="list-group-item list-group-item-action"
            >
                <nuxt-link :to="'/view/' + key">
                    {{key}}
                    <span class="float-right">
                        <i class="material-icons">person</i>
                    </span>
                </nuxt-link>
            </li>
        </ul>

        <nuxt-link to="/add/scan" class="btn btn-outline">
            <i class="fa fa-plus"></i>
            Weitere Profile hinzufügen
        </nuxt-link>

    </section>
</template>

<script>

export default {

    data() {
        return {
            users: []
        }
    },

    async mounted() {
        this.title = "eAllergiepass";

        let users = localStorage['users'] || '';
        if (users) {
            users = JSON.parse(users);
        }

        users = users || {};

        if (!Object.keys(users).length) {
            this.$router.push('/add/scan');
        }

        this.users = users;
    },

    methods: {
    }
}

</script>

<style>
    .container-fluid {
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

</style>

