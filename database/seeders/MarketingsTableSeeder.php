<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarketingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marketings')->insert([
            ['id' => 1, 'name' => 'Alfandy'],
            ['id' => 2, 'name' => 'Mery'],
            ['id' => 3, 'name' => 'Danang'],
        ]);
    }
}
