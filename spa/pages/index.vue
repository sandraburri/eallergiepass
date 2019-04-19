<template>
    <section class="container-fluid">

        <ul class="list-group">
            <li
                v-for="user in users"
                v-bind:key="user.id"
                class="list-group-item list-group-item-action"
            >
                <nuxt-link :to="'/view/' + user.unique_id">
                    {{user.ahv_number}}
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

        this.users = users || [];

        if (!this.users.length) {
            this.$router.push('/add/scan');
        }
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

