<template>
    <section>

        <div class="form-contact">
            Hier können Sie eine Notfallkontaktperson erfassen <br />
        </div>

        <div class="form-contains">
            <input v-model="message" placeholder="Vorname">
            <input v-model="message" placeholder="Name"> <br />
            <br />
            <input v-model="message" placeholder="Telefonnummer"> <br />
            <br />
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-save"></i>
                Speichern
            </button>

        </div>



    </section>
</template>

<script>

    export default {
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

