<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favorite;
use App\Activity;

class Reply extends Model
{
    use RecordsActivity;

    protected $fillable = [
        'user_id', 'thread_id', 'body',
    ];

    protected $with = ['user', 'favorites'];

    protected $appends = ['isFavorited'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favorited');
    }

    public function favorite()
    {
        $attributes = ['user_id' => auth()->id()];
        if (!$this->favorites()->where($attributes)->exists()) {
            return $this->favorites()->create($attributes);
        }
    }

    public function unfavorite()
    {

        $attributes = ['user_id' => auth()->id()];

        $this->favorites()->where($attributes)->get()->each(function($favorite) {
            Activity::where(['user_id' => auth()->id(),'subject_id' => $favorite->id, 'subject_type' => get_class($favorite),])->delete();
            $favorite->delete();
        });

        //
        // we are in the reply instance at this point
        //$this->favorites()->where($attributes)->delete();

    }

    public function isFavorited()
    {
        return $this->favorites->where('user_id', auth()->id())->count();
    }

    public function getIsFavoritedAttribute()// get result of the function isFavorited as a property
    {
        return $this->isFavorited();
    }
}
