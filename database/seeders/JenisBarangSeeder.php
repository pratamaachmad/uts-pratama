<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_barangs')->insert([[
            'kode' => '1',
            'jenis' => 'Vape'
        ],
        [
            'kode' => '2',
            'jenis' => 'Vape God'
        ],
        [
            'kode' => '3',
            'jenis' => 'Pod Mod'
        ]
        ]);
    }
}
