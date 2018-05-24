<template lang="html">
    <div class="chat-composer">

        <input class="form-control" type="text" placeholder="Type your message here..."/>
        <button class="btn btn-primary">Send</button>
    </div>
</template>


<script>

    export default {

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