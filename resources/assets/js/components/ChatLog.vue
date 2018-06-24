<template lang="html">
    <div class="chat-log">
        <!-- here via v-bind:message="message" we transfer message object to ChatMessage component where we receive it via props: ['message']-->
        <chat-message v-for="message in messages" v-bind:message="message" v-bind:key="message.id" v-bind:current_user="current_user"></chat-message>

    </div>
</template>


<script type="text/babel">

    export default {
        props: ['messages','current_user']
    }

</script>
