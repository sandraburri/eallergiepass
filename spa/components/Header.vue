<template>
    <header>

        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="/spa" title="eAllergiepass">
                <logo />
            </a>
        </nav>

        <nav class="breadcrumb" aria-label="breadcrumb"  v-if="breadcrumbs.length">
            <ol class="breadcrumb">
                <li
                    v-for="breadcrumb in breadcrumbs"
                    v-bind:key="breadcrumb.to"
                    :class="'breadcrumb-item' + (breadcrumb.active ? ' active' : '')"
                >
                    <nuxt-link :to="breadcrumb.to" v-if="breadcrumb.to && !breadcrumb.active">
                        <fa :icon="['fas', breadcrumb.icon]" v-if="breadcrumb.icon" />
                        {{breadcrumb.title}}
                    </nuxt-link>

                    <span v-if="!breadcrumb.to || breadcrumb.active">
                        <fa :icon="['fas', breadcrumb.icon]" v-if="breadcrumb.icon" />
                        {{breadcrumb.title}}
                    </span>
                </li>
            </ol>
        </nav>

        <section class="container-fluid" v-if="title">
            <h1>{{title}}</h1>
        </section>

    </header>
</template>

<script>
    import Logo from "~/components/Logo.vue";
    export default {
        components: {
            Logo
        },

        data() {
            return {
                title: null,
                breadcrumbs: []
            }
        },

        watch: {
            '$route': function() {
                this.calcBreadcrumb();

            }
        },

        mounted() {
            this.calcBreadcrumb();
        },

        methods: {
            calcBreadcrumb() {
                var crumbs = [];

                var routeNames = $nuxt._router.options.routes.map(route => route.path);
                var currentPath = this.$route.fullPath;

                if (currentPath != '/') {
                    this.title = this.getTitle(currentPath);

                    let relativePath = '';
                    currentPath.split('/').forEach(path => {
                        relativePath += (relativePath != '/' ? '/' : '') + path;
                        var to = routeNames.indexOf(relativePath) !== -1 ? relativePath : null;
                        var title  = this.getTitle(relativePath);
                        var icon = this.getIcon(relativePath);
                        if (!to && !title) {
                            return;
                        }

                        crumbs.push({
                            to: to,
                            title: title,
                            icon: icon,
                            active: relativePath == currentPath
                        });
                    });
                }

                this.breadcrumbs = crumbs;
            },

            getTitle(relativePath) {
                switch (relativePath) {
                    case "/": return "Home";
                    case "/add/scan": return "Profil hinzufügen";
                    case "/content": return "Inhalte";
                    case "/view": return "Notfallinformationen";
                    case "/content/allergies": return "Allergien";
                    case "/content/allergies/house-mites": return "Haus­staub­mil­ben­all­er­gie";
                    case "/content/asthma":return "Asthma";
                    case "/content/excema": return "Ekzem / Hautreaktionen";
                    case "/content/intolerance": return "Intoleranzen";
                    case "/content/trivia": return "Wissenswertes";
                    case "/emergency/contact": return "Notfallkontakt";
                    case "/emergency/help": return "Notfallanleitung";
                    case "/legal/impressum": return "Impressum";
                    case "/legal/privacy": return "Datenschutzerklärung";
                    case "/legal/tos": return "Haftungsausschluss";
                }
                return null;
            },

            getIcon(relativePath) {
                switch (relativePath) {
                    case "/": return "home";
                }
                return '';
            }
        }
    }
</script>

<style>


ol.breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}

ol.breadcrumb a {
    color: #666;
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    padding-left: .5rem;
    color: #6c757d;
    content: "/";
}

</style>
