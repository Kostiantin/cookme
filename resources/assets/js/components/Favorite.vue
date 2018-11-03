<template>
    <button type="submit" :class="classes" @click="toggle">
        <span class="glyphicon glyphicon-heart"></span>
        <span class="fav-count" v-text="favoritesCount"></span>
    </button>
</template>

<script>
    export default {
        props: ['reply'],
        data() {
            //console.log(this.reply);
            return {
                favoritesCount: this.reply.favorites.length,
                isFavorited: this.reply.isFavorited
            }
        },
        computed: {
            classes() {
                return ['like-reply', (this.isFavorited ? 'liked' : '')];
            }
        },
        methods: {
            toggle() {
                //axios
                if (this.isFavorited) {
                    axios.delete('/replies/'+this.reply.id+'/favorites');
                    this.isFavorited = false;
                    this.favoritesCount--;
                }
                else {
                    axios.post('/replies/'+this.reply.id+'/favorites');
                    this.isFavorited = true;
                    this.favoritesCount++;
                }
            }
        }
    }
</script>