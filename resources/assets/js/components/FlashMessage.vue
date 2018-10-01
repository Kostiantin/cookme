<template>
    <div class="alert alert-success custom-alert" role="alert" v-show="show">
        {{body}}
    </div>
</template>
<script>
    export default {
        props: ['flashmessage'],
        data() {
            return {
                body: this.flashmessage,
                show: false
            }
        },
        created() {
            if (this.flashmessage) {
                this.flash(this.flashmessage);
            }

            window.events.$on('flash', flashmessage => {
                this.flash(flashmessage);
            });
        },
        methods: {
            flash(flashmessage) {
                this.body = flashmessage;
                this.show = true;
                this.hide();
            },
            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 3000);
            }
        }
    };
</script>
<style>
    .custom-alert {
        position: absolute;
        top: 80px;
        width: 100%;
        padding: 10px;
        color: #000088;
        background-color: rgba(255,255,255,0.7);
        font-size: 13px;
        z-index: 99;
        line-height: 15px;
        font-weight: bold;
    }
</style>
