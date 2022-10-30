<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[
            'Kode_jenis_barang' => '1',
            'nama' => 'Vaporesso',
            'deskripsi_detail' => 'Lihatlah Model Vape Ini, Bukannya Sangat Bagus Bukan.',
            'stock' => '2',
            'foto' => 'img.jpg',
            'harga' => 'Rp. 600.000'
        ],
        [
            'Kode_jenis_barang' => '2',
            'nama' => 'HexOhms',
            'deskripsi_detail' => 'Vape Ini Sangat Digemari Dikalangan Anak Jaman New Karena Sangat Murah.',
            'stock' => '4',
            'foto' => 'img1.jpg',
            'harga' => 'Rp. 750.000'
        ],
        [
            'Kode_jenis_barang' => '3',
            'nama' => 'VapeAegis',
            'deskripsi_detail' => 'Ini Adalah Vape Terbaik Dari Australia Dan Banyak Peminatnya.',
            'stock' => '3',
            'foto' => 'img2.jpg',
            'harga' => 'Rp. 850.000'
        ]
        ]);
    }
}
