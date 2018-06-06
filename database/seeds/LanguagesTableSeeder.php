<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    public static $aLangs = [
        4 => [
            'locale' => 'en',
            'name' => 'English',
        ],
        5 => [
            'locale' => 'ua',
            'name' => 'Українська',
        ],
        6 => [
            'locale' => 'ru',

            'name' => 'Русский',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$aLangs as $lang) {
            DB::table('translator_languages')->insert([
                'locale' => $lang['locale'],
                'name' => $lang['name'],
            ]);
        }
    }
}
