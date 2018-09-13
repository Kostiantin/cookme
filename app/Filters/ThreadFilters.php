<?php

namespace App\Filters;

use App\User;

class ThreadFilters extends Filters
{
    protected $filters = ['by', 'popular'];

    /*
     * Filter the query according to user name
     */
    protected function by ($username)
    {

        $user = User::where('name', $username)->firstOrFail();

        return $this->builder->where('user_id', $user->id);

    }


    /*
     * Filter the query according to most popular
     */
    protected function popular ()
    {
        $this->builder->getQuery()->orders = [];
        return $this->builder->orderBy('replies_count', 'desc');
    }
}