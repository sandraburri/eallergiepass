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
            <input v-model="first_name" placeholder="Vorname">
            <input v-model="last_name" placeholder="Name"> <br />
            <br />
            <input v-model="phone_number" placeholder="Telefonnummer"> <br />
            <br />
            <button type="submit" class="btn btn-primary">
                 <fa :icon="['fas', 'save']" />
                Speichern
            </button>
        </div>

    </section>
</template>

<script>

    export default {
        data() {
            return {
                first_name: null,
                last_name: null,
                phone_number: null
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