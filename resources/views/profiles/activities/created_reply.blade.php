<reply :attributes="{{$activity->subject}}" inline-template v-cloak>
    <article id="reply-{{$activity->subject->id}}" v-if="visible_element">
        <div class="actions text-right">
            @can('update', $activity->subject)
            <button class="btn btn-xs" @click="editing=true">@lang('everywhere.edit')</button>
            <button class="btn btn-xs" @click="destroy"><i class="fa fa-times" aria-hidden="true"></i></button>

            @endcan
        </div>
        <h4 class="threads-header">
            <small>@lang('everywhere.replied') @lang('everywhere.to') <a href="{{route('show_thread', ['category' => $activity->subject->thread->category->slug, 'thread' => $activity->subject->thread->id])}}">{{$activity->subject->thread->title}}</a> {{$activity->subject->created_at->diffForHumans()}}</small>
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
