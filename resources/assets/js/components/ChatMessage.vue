<template lang="html">
    <div class="chat-message">

        <p>{{ message }}</p>

        <small>{{ user }}</small>

    </div>
</template>


<script>

    export default {
        data() {
            return {
                message: 'This is some message text',
                user: 'Konstantin'
            }
        }
    }

</script>

<style lang="css">

    p {
      color: red;
    }

</style>