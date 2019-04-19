<template>
    <section class="container-fluid">

        <div>
             <h3>Notfallinformationen von</h3>
            <ul class="list-group">
                <li
                    v-for="(user, key) in users"
                    v-bind:key="key"
                    class="list-group-item list-group-item-action"
                >
                    <nuxt-link :to="'/view/' + key">
                        {{user.affected.first_name}}         
                        {{user.affected.last_name}}
                        <span class="float-left">
                            <i class="material-icons">person</i>
                        </span>
                    </nuxt-link>
                </li>

                <li>
                    <nuxt-link to="/add/scan" class="btn btn-outline">
                        <i class="fa fa-plus"></i> 
                        Weiteres Profil hinzufügen
                    </nuxt-link>
                </li>
            </ul>
        </div>

        <div>
            <h3>Notfallkontakt</h3>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="/emergency/contact">
                        Erika Müller
                        <span class="float-left">
                            <i class="material-icons">person</i>
                        </span>
                    </nuxt-link>
                </li>
            </ul>
        </div>

        <div class="mt-2">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="/emergency/help">
                        Notfallanleitung
                        <span class="float-left">
                            <i class="material-icons"> error </i>
                        </span>
                    </nuxt-link>
                </li>
            </ul>
        </div>

        <div>
            <h3>Informationen</h3>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="">
                        aha! Allergiezentrum Schweiz
                        <span class="float-right">
                             <i class="material-icons"> call_made </i>
                        </span>
                    </nuxt-link>
                </li>
            </ul>
        </div>

        <div>
            <h3>Ratgeber</h3>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <nuxt-link to=""> 
                        Allergien 
                        <span class="float-left">
                            <i class="material-icons"> library_books </i>
                        </span>
                        <span class="float-right">
                            <i class="material-icons"> keyboard_arrow_right </i>
                        </span> 
                    </nuxt-link>         
                </li>

                <li class="list-group-item list-group-item-action">
                    <nuxt-link to=""> 
                        Asthma 
                        <span class="float-left">
                            <i class="material-icons"> library_books </i>
                        </span>
                        <span class="float-right">
                            <i class="material-icons"> keyboard_arrow_right </i>
                        </span> 
                    </nuxt-link>         
                </li>

                <li class="list-group-item list-group-item-action">
                    <nuxt-link to=""> 
                        Ekzem / Hautreaktionen
                        <span class="float-left">
                            <i class="material-icons"> library_books </i>
                        </span>
                        <span class="float-right">
                            <i class="material-icons"> keyboard_arrow_right </i>
                        </span> 
                    </nuxt-link>         
                </li>

                <li class="list-group-item list-group-item-action">
                    <nuxt-link to=""> 
                        Intoleranzen
                        <span class="float-left">
                            <i class="material-icons"> library_books </i>
                        </span>
                        <span class="float-right">
                            <i class="material-icons"> keyboard_arrow_right </i>
                        </span> 
                    </nuxt-link>         
                </li>
                
                <li class="list-group-item list-group-item-action">
                    <nuxt-link to=""> 
                        Wissenswertes
                        <span class="float-left">
                            <i class="material-icons"> library_books </i>
                        </span>
                        <span class="float-right">
                            <i class="material-icons"> keyboard_arrow_right </i>
                        </span> 
                    </nuxt-link>         
                </li>

            </ul>
        </div>
           
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

    .list-group-item list-group-item-action active {
        background-color: greenyellow;
    }

</style>

