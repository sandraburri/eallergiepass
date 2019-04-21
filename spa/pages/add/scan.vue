<template>
    <section class="container-fluid">

        <div class="alert alert-default alert-icon p-0">
            <div class="icon">
                <fa :icon="['fas', 'camera']" />
            </div>
            <div class="content">
                Scannen Sie den QR-Code auf Ihrem Allergiepass mit der Smartphone Kamera.
            </div>
        </div>

        <div class="wrapper stream" v-if="!error">
            <qrcode-stream @decode="onDecode" @init="onInit" />
        </div>

        <div class="wrapper mt-4" v-if="fallback">
            <h4>QR-Code Scanner nicht gefunden</h4>
            <small class="mt-2 text-danger">
                Technische Meldung: {{error}}
            </small>

            <div class="alert alert-info alert-icon mt-4">
                <div class="icon">
                    <fa :icon="['fas', 'info']" />
                </div>
                <div class="content">
                    Alternativ können sie ein bestehendes Bild hochladen
                </div>
            </div>
            <qrcode-capture @decode="onDecode" @init="onInit" />
        </div>

    </section>
</template>

<script>

    import { QrcodeStream, QrcodeDropZone, QrcodeCapture } from 'vue-qrcode-reader'

    export default {

        data() {
            return {
                error: '',
                decodedString: '',
                fallback: false
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
                var token = '/spa/#/add/';
                if (s.indexOf(token) !== -1) {
                    var uniqueId = s = s.split(token)[1];
                    location.replace(token + uniqueId)
                }
            },

            async onInit (promise) {
                console.log("onInit");
                try {
                    await promise;
                } catch (error) {
                    this.error = error.toString();

                    if (error.name === 'NotAllowedError') {
                        this.error = "You need to grant camera access permisson"
                    } else if (error.name === 'NotFoundError') {
                        this.error = "No camera on this device"
                    } else if (error.name === 'NotSupportedError') {
                        this.error = "Secure context required (HTTPS, localhost)"
                    } else if (error.name === 'NotReadableError') {
                        this.error = "Is the camera already in use?"
                    } else if (error.name === 'OverconstrainedError') {
                        this.error = "Installed cameras are not suitable"
                    } else if (error.name === 'StreamApiNotSupportedError') {
                        this.error = "Stream API is not supported in this browser"
                    }
                }

                this.fallback = true;
            }
        }
    }

</script>

<style type="text/scss">

    .camera svg {
        font-size: 10rem;
    }

    .wrapper.stream {
        border: 5px solid #000;
    }

</style>

