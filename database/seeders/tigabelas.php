<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class tigabelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tigabelas')->insert([
            'nama_kelas' => 'XIII KA 1',
            'foto' => 'KA.png',
            'jl' => '14',
            'jp' => '22',
            'jml' => '36',
        ]);
        DB::table('tigabelas')->insert([
            'nama_kelas' => 'XIII KA 2',
            'foto' => 'KA.png',
            'jl' => '16',
            'jp' => '17',
            'jml' => '33',
        ]);
    }
}
