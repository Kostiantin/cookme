<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Chat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            #chat-ul {
                display: block;
                width: 400px;
                margin: 0 auto;
                margin-top: 40px;
                overflow-y: auto;
                height: 300px;
            }
            #chat-ul li {
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <div id="app"></div>
        <div class="content">
            <div class="row" >
                <div class="col-md-12" id="chat">
                    <ul id="chat-ul" class="list-group">
                        <li>Chat</li>
                        <li>
                            <input type="text" class="form-control" value="" placeholder="Type your message here..." v-model="message" v-on:keyup.enter="sendMessage">
                        </li>
                        <message v-for="msg in chat.messages">@{{msg}}</message>
                    </ul>
                </div>

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
