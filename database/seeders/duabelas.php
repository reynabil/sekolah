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
            'foto' => 'logosmk.ico',
            'jl' => '17',
            'jp' => '17',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KA 2',
            'foto' => 'logosmk.ico',
            'jl' => '17',
            'jp' => '18',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KI 1',
            'foto' => 'logosmk.ico',
            'jl' => '20',
            'jp' => '14',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KI 2',
            'foto' => 'logosmk.ico',
            'jl' => '20',
            'jp' => '14',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII KI 3',
            'foto' => 'logosmk.ico',
            'jl' => '18',
            'jp' => '15',
            'jml' => '33',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII RPL 1',
            'foto' => 'logosmk.ico',
            'jl' => '21',
            'jp' => '14',
            'jml' => '34',
        ]);DB::table('duabelas')->insert([
            'nama_kelas' => 'XII RPL 2',
            'foto' => 'logosmk.ico',
            'jl' => '26',
            'jp' => '9',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII TKJ 1',
            'foto' => 'logosmk.ico',
            'jl' => '25',
            'jp' => '8',
            'jml' => '33',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII TKJ 2',
            'foto' => 'logosmk.ico',
            'jl' => '29',
            'jp' => '5',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII TKJ 3',
            'foto' => 'logosmk.ico',
            'jl' => '27',
            'jp' => '8',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII MM 1',
            'foto' => 'logosmk.ico',
            'jl' => '21',
            'jp' => '12',
            'jml' => '33',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII MM 2',
            'foto' => 'logosmk.ico',
            'jl' => '17',
            'jp' => '16',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII MM 3',
            'foto' => 'logosmk.ico',
            'jl' => '19',
            'jp' => '13',
            'jml' => '32',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII OTKP 1',
            'foto' => 'logosmk.ico',
            'jl' => '5',
            'jp' => '30',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII OTKP 2',
            'foto' => 'logosmk.ico',
            'jl' => '6',
            'jp' => '29',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII AKL 1',
            'foto' => 'logosmk.ico',
            'jl' => '5',
            'jp' => '30',
            'jml' => '35',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII AKL 2',
            'foto' => 'logosmk.ico',
            'jl' => '4',
            'jp' => '30',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII AKL 3',
            'foto' => 'logosmk.ico',
            'jl' => '3',
            'jp' => '29',
            'jml' => '32',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII BDP 1',
            'foto' => 'logosmk.ico',
            'jl' => '10',
            'jp' => '24',
            'jml' => '34',
        ]);
        DB::table('duabelas')->insert([
            'nama_kelas' => 'XII BDP 2',
            'foto' => 'logosmk.ico',
            'jl' => '9',
            'jp' => '26',
            'jml' => '35',
        ]);
    }
}
