
<!--
This is the main view for the affected persons,
once you have scanned the QR code, they always
get to this page by means of an icon on their mobile phone.
-->

<template>
    <section class="container-fluid">

        <div v-if="loading">
            Laden...
        </div>

        <div v-if="!loading">
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
                </ul>

                <ul class="list-group no-border no-background">
                    <li class="list-group-item list-group-item-action">
                        <nuxt-link to="/add/scan">
                            <span class="icon-left">
                                <fa :icon="['fas', 'plus']" />
                            </span>
                            Weiteres Profil hinzufügen
                        </nuxt-link>
                    </li>
                </ul>
            </div>

            <div>
                <h3>Notfallkontakt</h3>
                <ul class="list-group">


                    <li
                        v-for="contact in (emergencyContacts || [])"
                        v-bind:key="(contact.phoneNumber || '')"
                        class="list-group-item list-group-item-action">
                        <a :href="'tel:' + (contact.phoneNumber || '')">
                            {{contact.firstName || ''}}
                            {{contact.lastName || ''}}
                            <span class="icon-left">
                                <fa :icon="['fas', 'user']" />
                            </span>
                            <span class="icon-right">
                                <fa :icon="['fas', 'phone']" />
                            </span>
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <nuxt-link to="/emergency/help">
                            Notfallanleitung
                            <span class="icon-left">
                                <fa :icon="['fas', 'exclamation-circle']" />
                            </span>
                        </nuxt-link>
                    </li>
                </ul>

                <ul class="list-group no-border no-background">
                    <li class="list-group-item list-group-item-action">
                        <nuxt-link to="/emergency/contact">
                            <span class="icon-left">
                                <fa :icon="['fas', 'pen']" />
                            </span>
                            Notfallkontakt bearbeiten
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
                        <nuxt-link to="/content/allergies">
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
                        <nuxt-link to="/content/asthma">
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
                        <nuxt-link to="/content/excema">
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
                        <nuxt-link to="/content/intolerance">
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
                        <nuxt-link to="/content/trivia">
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
        </div>

    </section>

</template>

<script>

import { mapGetters, mapState } from 'vuex'

export default {

    computed: {
        ...mapState(['persistedStateReady']),
        ...mapGetters({
            'users': 'users/get',
            'emergencyContacts': 'emergencyContacts/get'
        }),
        hasUsers() {
            const result = Object.keys(this.users).length > 0
            console.debug('hasUsers()', result)
            return result
        }
    },

    watch: {
        persistedStateReady(newValue, oldValue) {
            this.loading = false;
            this.redirectIfEmpty();
        }
    },

    data() {
        return {
            loading: true
        }
    },

    async mounted() {
        this.title = "eAllergiepass";

        if (this.persistedStateReady) {
            this.redirectIfEmpty();
        }
    },

    methods: {
        redirectIfEmpty() {
            if (!this.hasUsers) {
                this.$router.push('/add/scan');
            } else {
                this.loading = false;
            }
        }
    }
}

</script>

<style>
    .container-fluid {
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .list-group-item list-group-item-action active {
        background-color:#8DCB1F;
    }

</style>
