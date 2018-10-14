<div id="reply-{{$reply->id}}" class="card">
    <div class="card-header reply-header">
        @if(Auth::check())
            <favorite :reply="{{$reply}}"></favorite>
        @endif
        {{$reply->created_at->diffForHumans()}} @lang('everywhere.by') <a href="#">{{$reply->user->name}}</a>
    </div>
    <div class="card-body reply-body">
        <article>
            <div class="body">
                {{$reply->body}}
            </div>
        </article>
        <hr>
    </div>
</div>
