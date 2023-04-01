<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kelulusan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelulusans')->insert([
            'kelas' => 'MM 1',
            'foto' => 'mm1.png',
            'tanggal' => '2023-05-02',
            'waktu' => '14:00',
        ]);
        DB::table('kelulusans')->insert([
            'kelas' => 'MM 2',
            'foto' => 'mm2.png',
            'tanggal' => '2023-05-02',
            'waktu' => '14:00',
        ]);
        DB::table('kelulusans')->insert([
            'kelas' => 'MM 3',
            'foto' => 'mm3.png',
            'tanggal' => '2023-05-02',
            'waktu' => '14:00',
        ]);
        DB::table('kelulusans')->insert([
            'kelas' => 'TKJ 1',
            'foto' => 'tkj1.png',
            'tanggal' => '2023-05-02',
            'waktu' => '14:00',
        ]);
        DB::table('kelulusans')->insert([
            'kelas' => 'TKJ 2',
            'foto' => 'tkj2.png',
            'tanggal' => '2023-05-02',
            'waktu' => '14:00',
        ]);
        DB::table('kelulusans')->insert([
            'kelas' => 'TKJ 3',
            'foto' => 'tkj3.jpeg',
            'tanggal' => '2023-05-02',
            'waktu' => '14:00',
        ]);
        DB::table('kelulusans')->insert([
            'kelas' => 'RPL 1',
            'foto' => 'rpl1.png',
            'tanggal' => '2023-05-02',
            'waktu' => '14:00',
        ]);
        DB::table('kelulusans')->insert([
            'kelas' => 'RPL 2',
            'foto' => 'rpl2.png',
            'tanggal' => '2023-05-02',
            'waktu' => '14:00',
        ]);
    }
}
