<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fotohome extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotohomes')->insert([
            'judul' => 'Apel Sekolah',
            'foto' => 'apel.jpeg',
        ]);
        DB::table('fotohomes')->insert([
            'judul' => 'HUT',
            'foto' => 'hut.jpeg',
        ]);
        DB::table('fotohomes')->insert([
            'judul' => 'Juara',
            'foto' => 'juara.jpeg',
        ]);
        DB::table('fotohomes')->insert([
            'judul' => 'Pandora',
            'foto' => 'pandora.jpeg',
        ]);
    }
}
