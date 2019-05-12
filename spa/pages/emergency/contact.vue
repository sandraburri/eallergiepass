<!--
The affected person can enter an emergency contact here.
This contact data is stored locally on the affected person's mobile phone.
-->

<template>
    <section class="container-fluid">

        <div class="form-contact">
            Hier können Sie eine Notfallkontaktperson erfassen <br />
        </div>

        <div class="form-contains">
            <input v-model="firstName" placeholder="Vorname">
            <input v-model="lastName" placeholder="Name"> <br />
            <br />
            <input v-model="phoneNumber" placeholder="Telefonnummer" type="number"> <br />
            <br />
            <button type="submit" class="btn btn-primary" v-on:click="onSave">
                 <fa :icon="['fas', 'save']" />
                Speichern
            </button>
        </div>

    </section>
</template>

<script>

    export default {
        data() {
            var data = {
                firstName: null,
                lastName: null,
                phoneNumber: null
            }

            var x = this.$store.state.emergencyContacts.items || [];
            if (x.length > 0) {
                x = x[0];
                data.firstName = x.firstName;
                data.lastName = x.lastName;
                data.phoneNumber = x.phoneNumber;
            }
            return data;
        },

        methods: {
            onSave: function (event) {
                this.$store.commit('emergencyContacts/set', {
                    firstName: this.firstName,
                    lastName: this.lastName,
                    phoneNumber: this.phoneNumber
                });

                this.$router.push('/');
            }
        }
    }

</script>

<style>
    div.form-contact {
        margin-top: 15px;
        margin-left: 15px;
    }

    div.form-contains {
        margin-top: 15px;
        margin-left: 15px;
    }

</style>
