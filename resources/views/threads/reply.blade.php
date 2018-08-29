<div class="card">
    <div class="card-header">{{$reply->created_at->diffForHumans()}} by <a href="#">{{$reply->user->name}}</a></div>
    <div class="card-body">

        <article>
            <div class="body">
                {{$reply->body}}
            </div>
        </article>
        <hr>

    </div>
</div>