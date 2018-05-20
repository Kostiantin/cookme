
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

Vue.component('message', {
    template: '<li class="list-group-item list-group-item-success"><div><slot></slot></div><small class="float-right">you</small></li>'
});

const app = new Vue({
    el: '#app',
    data: {
        'message': '',
        'chat': {
            'messages':[]
        }
    },
    methods: {
        sendMessage() {
        if (this.message.length != 0) {
            this.chat.messages.unshift(this.message);
            //

            axios.post('/send', {
                message: this.message
            })
            .then(response => {
                console.log(response);
                //alert('scot');
                this.message = '';
            })
            .catch(error => {
                console.log(error);
            });
        }
      }
    },
    mounted() {
        console.log(window.Echo);
        window.Echo.channel('chat')
            .listen('.ChatEvent', (e) => {
            //alert(33);
            console.log(e);
            //alert(e.message);
            this.chat.messages.unshift(e.message);

        });
    }
});






