<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sekolah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolahs')->insert([
            'tanggal' => '2023-08-17',
            'kegiatan' => 'Peringatan Kemerdekaan RI',
            'keterangan' => '<p>- Upacara Bendera</p>
            <p>- Lomba-lomba</p>',
        ]);
        DB::table('sekolahs')->insert([
            'tanggal' => '2023-10-01',
            'kegiatan' => 'Hari Kesaktian Pancasila',
            'keterangan' => '- Upacara Bendera',
        ]);
        DB::table('sekolahs')->insert([
            'tanggal' => '2023-10-28',
            'kegiatan' => 'Hari Sumpah Pemuda',
            'keterangan' => '- Upacara Bendera',
        ]);
        DB::table('sekolahs')->insert([
            'tanggal' => '2023-11-10',
            'kegiatan' => 'Hari Pahlawan',
            'keterangan' => '- Upacara Bendera',
        ]);
        DB::table('sekolahs')->insert([
            'tanggal' => '2023-12-16',
            'kegiatan' => 'HUT SMKN 1 Pasuruan',
            'keterangan' => '<p>- Jalan Sehat</p>
            <p>- Lomba-lomba</p>',
        ]);
        DB::table('sekolahs')->insert([
            'tanggal' => '2023-04-21',
            'kegiatan' => 'Peringatan Hari Kartini',
            'keterangan' => '<p>- Upacara Bendera</p>
            <p>- Lomba-lomba</p>',
        ]);
    }
}
