
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
Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('chat-log', require('./components/ChatLog.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));

Vue.component('message', {
    template: '<li class="list-group-item list-group-item-success"><div><slot></slot></div><small class="float-right">you</small></li>'
});

const app = new Vue({
    el: '#app',

    methods: {
        addMessage(message) {
            this.messages.unshift(message);

            //save into db
            axios.post('/savemessage', message).then(response => {
                //console.log(response);
            });
        }
    },
    data: {

        messages: [],
        current_user: '',
        usersInRoom: []
    },
    created() {
        if ($('#chat-room-container').length > 0) {
            axios.get('/messages').then(response => {
                //console.log(response);
                this.messages = response.data.messages;
                this.current_user = response.data.current_user.name;
            });
            Echo.join('chatroom')
                .here(users => {
                    this.usersInRoom = users;
                })
                .joining(user => {
                    this.usersInRoom.push(user);
                })
                .leaving(user => {
                    this.usersInRoom.splice(this.usersInRoom.indexOf(user),1);
                    //console.log('leaving');
                    //console.log(user);
                })
                .listen('MessagePosted', (e) => {
                       /* console.log(e.message.message);
                        console.log(e.user.name);
                        console.log(this.messages);*/
                    this.messages.unshift({
                        message: e.message.message,
                        user: {
                            name: e.user.name
                        }
                    });
                });
        }

    }
});






