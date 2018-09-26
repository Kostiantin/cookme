<article>
    <div class="actions text-right">

    </div>
    <h4 class="threads-header">
        <small>@lang('everywhere.replied') @lang('everywhere.to') <a href="{{route('show_thread', ['category' => $activity->subject->thread->category->slug, 'thread' => $activity->subject->thread->id])}}">{{$activity->subject->thread->title}}</a> {{$activity->subject->created_at->diffForHumans()}}</small>
    </h4>
    <div class="body">
        {{$activity->subject->body}}
    </div>
</article>