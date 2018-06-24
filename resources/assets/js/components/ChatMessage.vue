<template lang="html">
    <div class="chat-message">

        <p :class="determineColors">{{ message.message }}</p>

        <small :class="determineColors"><strong>{{ message.created_at }}</strong>&nbsp;&nbsp;|&nbsp;&nbsp;{{ message.user.name }}</small>

    </div>
</template>

<script>
    export default {
        props: ['message', 'current_user'],
        computed: {
            determineColors(){
                var _className = 'text-success';
                if (this.message.user.name != this.current_user) {
                    _className = 'text-info';
                }
                return _className;
            }
        }
    }
</script>