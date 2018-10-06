
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

var moment = require('moment');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//flash messages
window.events = new Vue();
window.flash = function (flashmessage) {
    window.events.$emit('flash', flashmessage);
};

Vue.component('example', require('./components/Example.vue'));
// quick messages
Vue.component('flash-message', require('./components/FlashMessage.vue'));

// reply editing component
Vue.component('reply', require('./components/Reply.vue'));

// chat components
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
            //save into db
            axios.post('/savemessage', message).then(response => {
                //console.log(response);
            });
            message.created_at = moment().format('YYYY-MM-DD HH:mm:ss');
            this.messages.push(message);
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
                })
                .listen('MessagePosted', (e) => {
                    this.messages.push({
                        message: e.message.message,
                        created_at: moment().format('YYYY-MM-DD HH:mm:ss'),
                        user: {
                            name: e.user.name
                        }
                    });
                });
        }
    }
});






