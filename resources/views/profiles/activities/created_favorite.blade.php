<article>
    <div class="actions text-right">

    </div>
    <div class="favorited-reply">
        <small>@lang('everywhere.you') @lang('everywhere.favorited') @lang('everywhere.reply') {{$activity->subject->created_at->diffForHumans()}}</small><br>
            <p>{{$activity->subject->favorited->body}}</p><br>
             @lang('everywhere.in') @lang('everywhere.thread')
            <a href="{{route('show_thread', ['category' => $activity->subject->favorited->thread->category->slug, 'thread' => $activity->subject->favorited->thread->id])}}#reply-{{$activity->subject->favorited->id}}">{{$activity->subject->favorited->thread->title}}</a>
    </div>
</article>