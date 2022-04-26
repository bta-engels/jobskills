<?php

namespace Database\Seeders;

use App\Models\ProgrammingLanguage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgrammingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dd(config('data.programming_languages'));
        DB::table('programming_languages')->truncate();
        foreach (config('data.programming_languages') as $name) {
            ProgrammingLanguage::create(['name' => $name]);
        }
    }
}
