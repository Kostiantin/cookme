<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('translator_translations')->truncate();

        $langsConfig = LanguagesTableSeeder::$aLangs;
        //echo database_path();die;
        $handle = fopen(database_path()."/translations/cookme_translations.csv", "r");
        $lineNumber = 0;
        if ($handle) {
            while (($line = fgetcsv($handle)) !== false) {
                if($lineNumber++ == 0) continue;

                foreach ($langsConfig as $langCellIndex => $lang) {
                    DB::table('translator_translations')->insert([
                        'locale' => $lang['locale'],
                        'namespace' => $line[1],
                        'group' => $line[2],
                        'item' => $line[3],
                        'text' => $line[$langCellIndex],
                    ]);
                }

                // process the line read.
            }
            fclose($handle);
        }
    }
}
