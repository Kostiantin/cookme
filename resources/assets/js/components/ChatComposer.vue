<template lang="html">
    <div class="chat-composer">

        <input class="form-control" type="text" placeholder="Type your message here..." v-model="messageText" @keyup.enter="sendMessage"/>
        <button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>


<script type="text/babel">

    export default {
        props: ['current_user'],
        data() {
            return {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent',{
                    message: this.messageText,
                    user: {
                        name: this.current_user
                    }
                });
                this.messageText = '';
            }
        }
    }

</script>

<style lang="css">
    .chat-composer {
        max-width: 400px;
        display: flex;
    }
    .chat-composer input {
        flex: 1 auto;
    }
    .chat-composer button {

    }
</style>