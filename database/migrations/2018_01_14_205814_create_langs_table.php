<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //languages
        $aLangs = [
            0 => [
                'locale' => 'en',
                'name' => 'English',
            ],
            1 => [
                'locale' => 'ua',
                'name' => 'Українська',
            ],
            2 => [
                'locale' => 'ru',
                'name' => 'Русский',
            ],
        ];

        //create table
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', '250');
            $table->string('name', '250');
            $table->integer('active')->default(1);
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });

        // Insert languages
        foreach ($aLangs as $lang) {
            DB::table('languages')->insert(
                array(
                    'locale' => $lang['locale'],
                    'name' => $lang['name'],
                )
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
