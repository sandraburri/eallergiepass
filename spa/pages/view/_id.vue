<template>
    <section class="container-fluid" v-if="user">
       <br />
       <h2> Notfallinformationen von </h2>
        {{user.affected.first_name}}
        {{user.affected.last_name}} <br />
        {{user.affected.street}}
        {{user.affected.street_number}} <br />
        {{user.affected.zip}}
        {{user.affected.city}} <br />
        {{user.affected.phone_number}} <br />
        {{user.affected.ahv_number}} <br />
        {{user.affected.birth_date}} <br />
  
        <br />
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
                    <p class="label">Nachgewisen am</p>
                    <p>{{item.verification}}</p>
                </div>
                
                <div class="form-group" v-if="item.suspicion">
                    <p class="label">Verdacht auf</p>
                    <p>{{item.suspicion}}</p>
                </div>
               
                <div class="form-group" v-if="item.medication">
                    <p class="label">Medikamente</p>
                    <p>{{item.medication}}</p>
                </div>

                <div class="form-group" v-if="item.emergency_medication">
                    <p class="label">Notfallmedikamente</p>
                    <p class="emergency">{{item.emergency_medication}}</p>
                </div>
               
            </div>

        </div>

       <h2> Ausgestellt von </h2>
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
        <br />
        
    </section>

</template>

<script>
export default {

    data() {
        return {
            loading: true,
            user: null
        }
    },

    async mounted() {
        let userId = this.$route.params.id;

        let users = localStorage['users'] || '';
        if (users) {
            users = JSON.parse(users);
        }

        users = users || {};
         if (!Object.keys(users).length) {
            this.$router.push('/');
        }
        
        this.user = users[userId];
    },

    methods: {
    }
}

</script>

<style>

    .item {
        margin: 10px;
        padding: 0;
    }

    p {
        margin: 0;
        padding: 0;
    }

    p.label {
        color: #999;
        font-size: 80%;
    }

    div.form-group {
       margin: 0;
        padding: 0; 
    }

    p.emergency {
        color: red
    }

</style>
