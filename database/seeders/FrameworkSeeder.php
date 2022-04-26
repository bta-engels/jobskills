<?php

namespace Database\Seeders;

use App\Models\Framework;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frameworks')->truncate();
        foreach (config('data.frameworks') as $name) {
            Framework::create(['name' => $name]);
        }

    }
}
