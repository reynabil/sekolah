<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class duabelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KA 1',
            'foto' => 'KA.png',
            'jl' => '17',
            'jp' => '17',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KA 2',
            'foto' => 'KA.png',
            'jl' => '17',
            'jp' => '18',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KI 1',
            'foto' => 'KI.png',
            'jl' => '20',
            'jp' => '14',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KI 2',
            'foto' => 'KI.png',
            'jl' => '20',
            'jp' => '14',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KI 3',
            'foto' => 'KI.png',
            'jl' => '18',
            'jp' => '15',
            'jml' => '33',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII RPL 1',
            'foto' => 'RPL.png',
            'jl' => '21',
            'jp' => '14',
            'jml' => '34',
        ]);DB::table('duabelas')->insert([
            'nama_kelas' => 'XII RPL 2',
            'foto' => 'RPL.png',
            'jl' => '26',
            'jp' => '9',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII TKJ 1',
            'foto' => 'TKJ.png',
            'jl' => '25',
            'jp' => '8',
            'jml' => '33',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII TKJ 2',
            'foto' => 'TKJ.png',
            'jl' => '29',
            'jp' => '5',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII TKJ 3',
            'foto' => 'TKJ.png',
            'jl' => '27',
            'jp' => '8',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII MM 1',
            'foto' => 'DKV.png',
            'jl' => '21',
            'jp' => '12',
            'jml' => '33',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII MM 2',
            'foto' => 'DKV.png',
            'jl' => '17',
            'jp' => '16',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII MM 3',
            'foto' => 'DKV.png',
            'jl' => '19',
            'jp' => '13',
            'jml' => '32',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII OTKP 1',
            'foto' => 'MPKT.png',
            'jl' => '5',
            'jp' => '30',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII OTKP 2',
            'foto' => 'MPKT.png',
            'jl' => '6',
            'jp' => '29',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII AKL 1',
            'foto' => 'AKL.png',
            'jl' => '5',
            'jp' => '30',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII AKL 2',
            'foto' => 'AKL.png',
            'jl' => '4',
            'jp' => '30',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII AKL 3',
            'foto' => 'AKL.png',
            'jl' => '3',
            'jp' => '29',
            'jml' => '32',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII BDP 1',
            'foto' => 'BDP.png',
            'jl' => '10',
            'jp' => '24',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII BDP 2',
            'foto' => 'BDP.png',
            'jl' => '9',
            'jp' => '26',
            'jml' => '35',
        ]);
    }
}
