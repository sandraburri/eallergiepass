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
                        <span class="icon-left">
                            <fa :icon="['fas', 'user']" />
                        </span>
                    </nuxt-link>
                </li>

                <li>
                    <nuxt-link to="/add/scan" class="btn btn-outline">
                        <fa :icon="['fas', 'plus']" />
                        Weiteres Profil hinzufügen
                    </nuxt-link>
                </li>
            </ul>
        </div>

        <div>
            <h3>Notfallkontakt</h3>
            <ul class="list-group">

                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="">
                        {{emergency_contact.first_name}}
                        {{emergency_contact.last_name}}
                        <span class="icon-left">
                            <fa :icon="['fas', 'user']" />
                        </span>
                        <span class="icon-right">
                            <fa :icon="['fas', 'phone']" />
                        </span>
                     </nuxt-link>
                </li>

                <li>
                    <nuxt-link to="/emergency/contact" class="btn btn-outline">
                        Notfallkontakt bearbeiten
                    </nuxt-link>
                </li>

            </ul>
        </div>

        <div class="mt-2">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="/emergency/help">
                        Notfallanleitung
                        <span class="icon-left">
                            <fa :icon="['fas', 'exclamation-circle']" />
                        </span>
                    </nuxt-link>
                </li>
            </ul>
        </div>

        <div>
            <h3>Informationen</h3>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <a href="https://www.aha.ch" target="_blank">
                        aha! Allergiezentrum Schweiz
                        <span class="icon-right">
                             <fa :icon="['fas', 'external-link-alt']" />
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h3>Ratgeber</h3>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="">
                        Allergien
                        <span class="icon-left">
                            <fa :icon="['fas', 'book']" />
                        </span>
                        <span class="icon-right">
                            <fa :icon="['fas', 'chevron-right']" />
                        </span>
                    </nuxt-link>
                </li>

                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="">
                        Asthma
                        <span class="icon-left">
                            <fa :icon="['fas', 'book']" />
                        </span>
                        <span class="icon-right">
                            <fa :icon="['fas', 'chevron-right']" />
                        </span>
                    </nuxt-link>
                </li>

                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="">
                        Ekzem / Hautreaktionen
                        <span class="icon-left">
                            <fa :icon="['fas', 'book']" />
                        </span>
                        <span class="icon-right">
                            <fa :icon="['fas', 'chevron-right']" />
                        </span>
                    </nuxt-link>
                </li>

                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="">
                        Intoleranzen
                        <span class="icon-left">
                            <fa :icon="['fas', 'book']" />
                        </span>
                        <span class="icon-right">
                            <fa :icon="['fas', 'chevron-right']" />
                        </span>
                    </nuxt-link>
                </li>

                <li class="list-group-item list-group-item-action">
                    <nuxt-link to="">
                        Wissenswertes
                        <span class="icon-left">
                            <fa :icon="['fas', 'book']" />
                        </span>
                        <span class="icon-right">
                            <fa :icon="['fas', 'chevron-right']" />
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
            users: [],
            emergency_contact: {
                first_name: "Stefan",
                last_name: "Kestenholz",
                phone_number: "0313334455"
            }
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

