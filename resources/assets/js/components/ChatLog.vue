<template lang="html">
    <div class="chat-log">
        <!-- here via v-bind:message="message" we transfer message object to ChatMessage component where we receive it via props: ['message']-->
        <chat-message v-for="message in messages" v-bind:message="message" v-bind:key="message.id"></chat-message>

    </div>
</template>


<script type="text/babel">

    export default {
        props: ['messages']
    }

</script>

<style lang="css">
    .chat-log {
        height: 400px;
        overflow-y: auto;
        background-color: #eee;
        padding: 15px;
    }


</style>