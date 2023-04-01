<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sebelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI KA 1',
            'foto' => 'KA.png',
            'jl' => '9',
            'jp' => '27',
            'jml' => '36',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI KA 2',
            'foto' => 'KA.png',
            'jl' => '10',
            'jp' => '25',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI KI 1',
            'foto' => 'KI.png',
            'jl' => '17',
            'jp' => '18',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI KI 2',
            'foto' => 'KI.png',
            'jl' => '16',
            'jp' => '19',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI KI 3',
            'foto' => 'KI.png',
            'jl' => '16',
            'jp' => '18',
            'jml' => '34',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI RPL 1',
            'foto' => 'RPL.png',
            'jl' => '26',
            'jp' => '10',
            'jml' => '36',
        ]);DB::table('sebelas')->insert([
            'nama_kelas' => 'XI RPL 2',
            'foto' => 'RPL.png',
            'jl' => '26',
            'jp' => '8',
            'jml' => '34',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI TKJ 1',
            'foto' => 'TKJ.png',
            'jl' => '27',
            'jp' => '8',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI TKJ 2',
            'foto' => 'TKJ.png',
            'jl' => '27',
            'jp' => '8',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI TKJ 3',
            'foto' => 'TKJ.png',
            'jl' => '27',
            'jp' => '7',
            'jml' => '34',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI MM 1',
            'foto' => 'DKV.png',
            'jl' => '19',
            'jp' => '14',
            'jml' => '33',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI MM 2',
            'foto' => 'DKV.png',
            'jl' => '22',
            'jp' => '13',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI MM 3',
            'foto' => 'DKV.png',
            'jl' => '17',
            'jp' => '13',
            'jml' => '30',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI OTKP 1',
            'foto' => 'MPKT.png',
            'jl' => '4',
            'jp' => '31',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI OTKP 2',
            'foto' => 'MPKT.png',
            'jl' => '3',
            'jp' => '31',
            'jml' => '34',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI AKL 1',
            'foto' => 'AKL.png',
            'jl' => '7',
            'jp' => '28',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI AKL 2',
            'foto' => 'AKL.png',
            'jl' => '7',
            'jp' => '28',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI AKL 3',
            'foto' => 'AKL.png',
            'jl' => '7',
            'jp' => '28',
            'jml' => '35',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI BDP 1',
            'foto' => 'BDP.png',
            'jl' => '9',
            'jp' => '25',
            'jml' => '34',
        ]);
        DB::table('sebelas')->insert([
            'nama_kelas' => 'XI BDP 2',
            'foto' => 'BDP.png',
            'jl' => '8',
            'jp' => '26',
            'jml' => '34',
        ]);
    }
}
