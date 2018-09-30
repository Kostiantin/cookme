<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 24.09.2018
 * Time: 9:08
 */

namespace app;

use App\Activity;

trait RecordsActivity
{

    protected static function bootRecordsActivity()
    {

        if (auth()->guest()) {return;}

        // activities, whenever a thread is created we track it in the activities table
        /*static::created(function ($thread) {
            $thread->recordActivity('created');
        });*/

        foreach (static::getRecordEvents() as $event) {
            static::$event(function ($model) use($event) {
                $model->recordActivity($event);
            });
        }
    }

    protected function recordActivity($event) {
        //dd($event);
        switch ($event) {
            case 'created':
                Activity::create([
                    'user_id' => auth()->id(),
                    'type' => $this->getActivityType($event),
                    'subject_id' => $this->id,
                    'subject_type' => get_class($this),
                ]);
                break;
        }

    }

    protected static function getRecordEvents()
    {
        return ['created'];// if you add an item here then you will need to add a view file with this name in the activities folder
    }

    protected function getActivityType($event)
    {
        return $event .'_' . strtolower((new \ReflectionClass($this))->getShortName());
    }
}