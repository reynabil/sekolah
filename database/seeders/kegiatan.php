<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kegiatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-06-28',
            'kegiatan' => 'Hari Raya Idul Adha',
            'keterangan' => 'SMKN 1 Pasuruan akan mengadakan penyembelihan hewan qurban',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-07-18',
            'kegiatan' => 'Tahun Baru Hijriyah 1444 H',
            'keterangan' => 'Diadakan  Lomba Keagamaan',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-09-26',
            'kegiatan' => 'Peringatan Maulid Nabi Muhammad SAW',
            'keterangan' => 'Istighosah dan Pengajian',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-12-25',
            'kegiatan' => 'Hari Raya Natal',
            'keterangan' => '-',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-02-18',
            'kegiatan' => 'Peringatan Isra miraj',
            'keterangan' => 'Diadakan  Lomba Keagamaan',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-03-22',
            'kegiatan' => 'Hari Raya Nyepi',
            'keterangan' => '-',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-04-07            ',
            'kegiatan' => 'Peringatan Wafat Isa Al Masih',
            'keterangan' => '-',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-05-18',
            'kegiatan' => 'Peringatan Kenaikan  Isa Al Masih',
            'keterangan' => '-',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-04-21',
            'kegiatan' => 'Hari Raya Idul Fitri',
            'keterangan' => '-',
        ]);
        DB::table('kegiatans')->insert([
            'tanggal' => '2023-06-04',
            'kegiatan' => 'Hari Raya Waisak',
            'keterangan' => '-',
        ]);
    }
}
