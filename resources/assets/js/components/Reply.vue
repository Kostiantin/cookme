<script>
    export default {
        props: ['attributes'],
        data() {
            return {
                editing: false,
                body: this.attributes.body,
                visible_element: true
            };
        },
        methods: {
            update() {
                axios.patch('/replies/'+this.attributes.id, {
                    body: this.body
                });

                this.editing = false;

            },
            destroy() {
                if (confirm("Are you sure")) {
                    axios.delete('/replies/'+this.attributes.id);
                    this.visible_element = false;
                    this.$emit('replyremoved');
                }

            }
        }
    }
</script>