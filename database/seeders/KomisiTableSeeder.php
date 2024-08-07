<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KomisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komisis')->insert([
            ['marketing_id' => 1, 'bulan' => '2023-05', 'omzet' => 138000000, 'komisi_persen' => 2.5, 'komisi_nominal' => 3450000],
            ['marketing_id' => 2, 'bulan' => '2023-05', 'omzet' => 80000000, 'komisi_persen' => 0, 'komisi_nominal' => 0],
            ['marketing_id' => 3, 'bulan' => '2023-05', 'omzet' => 44320000, 'komisi_persen' => 0, 'komisi_nominal' => 0],
            ['marketing_id' => 1, 'bulan' => '2023-06', 'omzet' => 75000000, 'komisi_persen' => 0, 'komisi_nominal' => 0],
            ['marketing_id' => 2, 'bulan' => '2023-06', 'omzet' => 1010020000, 'komisi_persen' => 10, 'komisi_nominal' => 101002100],
            ['marketing_id' => 3, 'bulan' => '2023-06', 'omzet' => 205000000, 'komisi_persen' => 5, 'komisi_nominal' => 10250100],
        ]);
    }
}
