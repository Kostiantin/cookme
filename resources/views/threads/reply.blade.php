<div class="card">
    <div class="card-header reply-header">
        {{$reply->created_at->diffForHumans()}} by <a href="#">{{$reply->user->name}}</a>


            <form method="POST" action="{{route('favorite_reply', ['reply' => $reply->id])}}" id="submit_like_reply">
                {{csrf_field()}}
                <button type="submit" class="like-reply" @if(Auth::guest() || $reply->isFavorited()>0) disabled @endif>
                    @if (count($reply->favorites) > 0)
                        <i class="fa fa-thumbs-o-up liked" aria-hidden="true"></i><span class="likes-count">{{count($reply->favorites)}}</span>
                    @else
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    @endif
                </button>
            </form>


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