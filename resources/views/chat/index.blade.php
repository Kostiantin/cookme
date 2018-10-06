@extends('layouts.master')

@section('title')
<title>{{ config('app.name', 'CookMe') }}</title>
@endsection

@section('content')
<div id="chat-room-container">
    <div class="container">

            <div class="row" >
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="chat-main-container">
                        <h2>
                            @lang('everywhere.chat_room')
                        </h2>
                        <chat-log v-bind:messages="messages" v-bind:current_user="current_user"></chat-log>
                        <chat-composer @messagesent="addMessage" v-bind:current_user="current_user"></chat-composer>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="participants-main-container">
                        <h2>@lang('everywhere.active_participants')</h2>
                        <ul>
                            <li v-for="user in usersInRoom" v-text="user.name"></li>
                        </ul>
                    </div>
                </div>
            </div>


    </div>
</div>


@endsection

@section('custom_js')
@endsection