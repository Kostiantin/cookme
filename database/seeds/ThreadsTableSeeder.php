<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadsTableSeeder extends Seeder
{

    public static $aCategories = [
        1 => [
            'name' => 'Problem during cooking',
            'slug' => 'problem-during-cooking',
        ],
        2 => [
            'name' => 'Share my dish',
            'slug' => 'share-my-dish',
        ],
        3 => [
            'name' => 'Fish dishes',
            'slug' => 'fish-dishes',
        ],
        4 => [
            'name' => 'Vegetarian',
            'slug' => 'vegetarian',
        ],
        5 => [
            'name' => 'Meat dishes',
            'slug' => 'meat-dishes',
        ],
    ];

    public static $aThreads = [
        1 => [
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'Need to cook sharlotka',
            'body' => 'Have some problem with ingredients for this cake. Give advices please',
        ],
        2 => [
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'My favourite way of cooking fried eggs',
            'body' => 'Just take 4 big eggs, 2 tomatoes, spices and bread.',
        ],
        3 => [
            'user_id' => 2,
            'category_id' => 3,
            'title' => 'Some fish can not be made by me :)',
            'body' => 'Today i tried to make a fish in the oven...',
        ],
        4 => [
            'user_id' => 3,
            'category_id' => 4,
            'title' => 'My vegi morning meal',
            'body' => 'This is a really simple dish. Two boiled potatoes spiced with salt and pepper, bread and butter, and glass of milk.',
        ],
        5 => [
            'user_id' => 2,
            'category_id' => 5,
            'title' => 'Recipe of fried pork with mushrooms and grass',
            'body' => 'Take 0.5kg of fresh pork, 0.5kg of white mushrooms, 10 leafs of basil and let us start',
        ],
    ];

    public static $aReplies = [
        1 => [
            'thread_id' => 1,
            'user_id' => 3,
            'body' => 'Please tell me what sharlotka is? Some cake?',
        ],
        2 => [
            'thread_id' => 2,
            'user_id' => 3,
            'body' => 'Yes, this is my way too! :)',
        ],
        3 => [
            'thread_id' => 3,
            'user_id' => 3,
            'body' => 'Don\'t be so strict to yourself, just try once more. Probably you forgot something, send me your recipe please i will check it',
        ],
        4 => [
            'thread_id' => 4,
            'user_id' => 2,
            'body' => 'I will try your recipe tomorrow morning',
        ],
        5 => [
            'thread_id' => 5,
            'user_id' => 3,
            'body' => 'Sounds very tasty, will try it',
        ],
        6 => [
            'thread_id' => 5,
            'user_id' => 2,
            'body' => 'Yes, thank you, it is worthy of investing some time',
        ],
    ];

    /**
     * Seeder to fill threads, categories, replies tables
     */
    public function run()
    {
        // add all categories
        foreach (self::$aCategories as $cat_id => $category) {
            DB::table('categories')->insert([
                'id' => $cat_id,
                'name' => $category['name'],
                'slug' => $category['slug'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        // add all threads
        foreach (self::$aThreads as $thread_id => $thread) {
            DB::table('threads')->insert([
                'id' => $thread_id,
                'user_id' => $thread['user_id'],
                'category_id' => $thread['category_id'],
                'title' => $thread['title'],
                'body' => $thread['body'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        // add all replies
        foreach (self::$aReplies as $reply_id => $reply) {
            DB::table('replies')->insert([
                'id' => $reply_id,
                'thread_id' => $reply['thread_id'],
                'user_id' => $reply['user_id'],
                'body' => $reply['body'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
