<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favorite;

class Reply extends Model
{

    protected $fillable = [
        'user_id', 'thread_id', 'body',
    ];

    protected $with = ['user', 'favorites'];

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

    public function isFavorited()
    {
        return $this->favorites->where('user_id', auth()->id())->count();
    }
}