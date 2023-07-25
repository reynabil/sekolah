<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pengumuman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengumumen')->insert([
            'foto' => 'download.png',
            'judul' => 'PENGUMUMAN JADWAL TES PT. ADHIKARI INOVASI INDONESIA',
            'created_at' => '2023-1-17',
        ]);
        DB::table('pengumumen')->insert([
            'foto' => 'indofood.jpg',
            'judul' => 'PENGUMUMAN JADWAL TES PT.INDOFOOD SUKSES MAKMUR INDONESIA',
            'created_at' => '2023-1-17',
        ]);
    }
}
