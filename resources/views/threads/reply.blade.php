<div id="reply-{{$reply->id}}" class="card">
    <div class="card-header reply-header">
        <favorite :reply="{{$reply}}"></favorite>
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
