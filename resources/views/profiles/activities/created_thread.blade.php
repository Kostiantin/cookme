<article>
    <div class="actions text-right">
        @can('update', $activity->subject)
        <form method="POST" action="{{route('destroy_thread', ['category' => $activity->subject->category->slug, 'thread' => $activity->subject->id])}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-xs btn-danger">

                <i class="fa fa-times" aria-hidden="true"></i>

            </button>
        </form>
        @endcan
    </div>
    <h4 class="threads-header">
        <a href="{{route('show_thread',['category' => $activity->subject->category->slug, 'thread' => $activity->subject->id])}}">{{$activity->subject->title}}</a>&nbsp; {{$activity->subject->created_at->diffForHumans()}}
        @if ($activity->subject->replies_count > 0)
            <span class="cookme-comments">{{$activity->subject->replies_count}}&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i></span>

        @else
            <span class="cookme-comments"><i class="fa fa-comments-o no-comments" aria-hidden="true"></i></span>
        @endif
    </h4>
    <div class="body">
        {{$activity->subject->body}}
    </div>
</article>