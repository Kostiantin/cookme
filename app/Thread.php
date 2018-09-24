<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use RecordsActivity;

    protected $fillable = [
        'user_id', 'title', 'body', 'category_id'
    ];

    // global anonymous scope
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('replyCount', function($builder) {
            $builder->withCount('replies');
        });

        // to remove replies also with a thread
        /*static::deleting(function($thread) {
            $thread->replies()->delete();
        });*/


    }



    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function addReply($reply)
    {
        $this->replies()->create($reply);
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}
