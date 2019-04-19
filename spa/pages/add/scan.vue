<template>
    <section>
        <div class="text-justify m-4">
            <h2>Profil hinzufügen</h2>
            Scannen Sie den QR-Code auf Ihrem Allergiepass
            mit der Smartphone Kamera.
        </div>

        <!--
        <div class="text-center m-4 camera">
            <fa :icon="['fas', 'camera']" />
        </div>
        -->

        {{decodedString}}

        <div class="wrapper">
            <qrcode-stream @decode="onDecode"></qrcode-stream>
        </div>

    </section>
</template>

<script>

    import { QrcodeStream, QrcodeDropZone, QrcodeCapture } from 'vue-qrcode-reader'

    export default {

        data() {
            return {
                decodedString: ''
            };
        },

        mount() {
        },

        components: {
            'qrcode-stream': QrcodeStream,
            'qrcode-drop-zone': QrcodeDropZone,
            'qrcode-capture': QrcodeCapture
        },

        methods: {
            onDecode (s) {
                s = (s || "").toLowerCase();
                if (s.indexOf('/spa/add/') !== -1) {
                    var uniqueId = s = s.split('/spa/add/')[1];

                    location.replace('/spa/add/' + uniqueId)
                }
            }
        }
    }

</script>

<style>

    .camera svg {
        font-size: 10rem;
    }

    .wrapper {
        border: 5px solid #000;
        margin: 1rem;
    }

</style>

