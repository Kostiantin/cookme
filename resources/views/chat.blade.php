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

        </style>
    </head>
    <body>
        <div class="content">
            <div class="row" >
                <div class="col-md-12" id="app">
                    <h1>Chat Room</h1>
                    <chat-log></chat-log>
                    <chat-composer></chat-composer>
                </div>

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
