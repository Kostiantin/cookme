<reply :attributes="{{$reply}}" inline-template v-cloak>
    <article id="reply-{{$reply->id}}" v-if="visible_element">
        <div class="actions text-right">
            @can('update', $reply)
                <button class="btn btn-xs" @click="editing=true">@lang('everywhere.edit')</button>
                <button class="btn btn-xs" @click="destroy"><i class="fa fa-times" aria-hidden="true"></i></button>
            @endcan
            @if(Auth::check())
                <favorite :reply="{{$reply}}"></favorite>
            @endif
        </div>
        <h4 class="threads-header">
            <small>{{$reply->created_at->diffForHumans()}} @lang('everywhere.by') <a href="#">{{$reply->user->name}}</a></small>
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
