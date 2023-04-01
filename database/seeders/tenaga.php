<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class tenaga extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenagas')->insert([
            'foto' => '1679884488.png',
            'nama' => 'Ismauliawati, SE',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => 'teacher.jpg',
            'nama' => 'Fauzah, S.Pd',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => 'images.jpg',
            'nama' => 'Madya Harbudhi',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => '1679884488.png',
            'nama' => 'Ninik Agustini, A.Ma',
            'status_kepegawaian' => 'NON PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => '1679884488.png',
            'nama' => 'Ismauliawati, SE',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => 'teacher.jpg',
            'nama' => 'Fauzah, S.Pd',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => 'images.jpg',
            'nama' => 'Madya Harbudhi',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => '1679884488.png',
            'nama' => 'Ninik Agustini, A.Ma',
            'status_kepegawaian' => 'NON PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => '1679884488.png',
            'nama' => 'Ismauliawati, SE',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => 'teacher.jpg',
            'nama' => 'Fauzah, S.Pd',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => 'images.jpg',
            'nama' => 'Madya Harbudhi',
            'status_kepegawaian' => 'PNS',
        ]);
        DB::table('tenagas')->insert([
            'foto' => '1679884488.png',
            'nama' => 'Ninik Agustini, A.Ma',
            'status_kepegawaian' => 'NON PNS',
        ]);
    }
}
