<reply :attributes="{{$activity->subject}}" inline-template v-cloak>
    <article id="reply-{{$activity->subject->id}}" v-if="visible_element">

        <h4 class="threads-header">
            <div class="author-reply">@lang('everywhere.replied') @lang('everywhere.to') <a href="{{route('show_thread', ['category' => $activity->subject->thread->category->slug, 'thread' => $activity->subject->thread->id])}}">{{$activity->subject->thread->title}}</a> {{$activity->subject->created_at->diffForHumans()}}</div>
            <div class="actions text-right actions-reply">
                @can('update', $activity->subject)
                    <button class="btn btn-xs" @click="editing=true"><span class="glyphicon glyphicon-pencil"></span></button>
                    <button class="btn btn-xs" @click="destroy"><span class="glyphicon glyphicon-remove"></span></button>
                @endcan
                <favorite :reply="{{$activity->subject}}"></favorite>
            </div>
        </h4>
        <div v-if="editing">
            <div class="form-group">
                <textarea class="form-control" v-model="body"></textarea>
            </div>
            <button class="btn btn-xs btn-primary" @click="update">@lang('everywhere.update')</button>
            <button class="btn btn-xs" @click="editing=false">@lang('everywhere.cancel')</button>
        </div>
        <div v-else v-text="body"></div>
    </article>
</reply>
