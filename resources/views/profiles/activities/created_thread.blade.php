<article>

    <h4 class="threads-header">
        <div class="author-reply">
            <a href="{{route('show_thread',['category' => $activity->subject->category->slug, 'thread' => $activity->subject->id])}}">{{$activity->subject->title}}</a>&nbsp; {{$activity->subject->created_at->diffForHumans()}}
        </div>
        <div class="actions text-right actions-reply">
            @can('update', $activity->subject)
            <form method="POST" action="{{route('destroy_thread', ['category' => $activity->subject->category->slug, 'thread' => $activity->subject->id])}}">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-xs btn-danger">

                    <span class="glyphicon glyphicon-remove"></span>

                </button>
            </form>
            @endcan
            @if ($activity->subject->replies_count > 0)
                <span class="cookme-comments c-position-static"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;<span class="thread-replies-count">{{$activity->subject->replies_count}}</span></span>

            @else
                <span class="cookme-comments c-position-static"><i class="fa fa-comments-o no-comments" aria-hidden="true"></i><span class="thread-replies-count">0</span></span>
            @endif
            <div class="clearfixer"></div>
        </div>
    </h4>
    <div class="body">
        {{$activity->subject->body}}
    </div>
</article>