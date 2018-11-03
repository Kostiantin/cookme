<reply @replyremoved="repliesCount--" :attributes="{{$reply}}" inline-template v-cloak>
    <article id="reply-{{$reply->id}}" v-if="visible_element" class="panel panel-default">
        <div class="panel-body">
            <h4 class="threads-header">
                <div class="author-reply">{{$reply->created_at->diffForHumans()}} @lang('everywhere.by') <a href="#">{{$reply->user->name}}</a></div>
                <div class="actions text-right actions-reply">
                    @can('update', $reply)
                    <button class="btn btn-xs" @click="editing=true"><span class="glyphicon glyphicon-pencil"></span></button>
                    <button class="btn btn-xs" @click="destroy"><span class="glyphicon glyphicon-remove"></span></button>
                    @endcan
                    @if(Auth::check())
                        <favorite :reply="{{$reply}}"></favorite>
                    @endif
                </div>
                <div class="clearfixer"></div>
            </h4>
            <div v-if="editing">
                <div class="form-group">
                    <textarea class="form-control" v-model="body"></textarea>
                </div>
                <button class="btn btn-xs btn-primary" @click="update">@lang('everywhere.update')</button>
                <button class="btn btn-xs" @click="editing=false">@lang('everywhere.cancel')</button>
            </div>
            <div v-else v-text="body"></div>
        </div>
    </article>
</reply>
