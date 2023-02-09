<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class peserta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X Kimia Analisis 1',
            'foto' => 'logosmk.ico',
            'jl' => '18',
            'jp' => '18',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X TKJ 1',
            'foto' => 'logosmk.ico',
            'jl' => '29',
            'jp' => '7',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X TKJ 2',
            'foto' => 'logosmk.ico',
            'jl' => '29',
            'jp' => '7',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X TKJ 3',
            'foto' => 'logosmk.ico',
            'jl' => '27',
            'jp' => '9',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X Kimia Analisis 2',
            'foto' => 'logosmk.ico',
            'jl' => '16',
            'jp' => '19',
            'jml' => '35',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X Kimia Industri 1',
            'foto' => 'logosmk.ico',
            'jl' => '14',
            'jp' => '22',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X Kimia Industri 2',
            'foto' => 'logosmk.ico',
            'jl' => '14',
            'jp' => '22',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X Kimia Industri 3',
            'foto' => 'logosmk.ico',
            'jl' => '14',
            'jp' => '21',
            'jml' => '35',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X RPL 1',
            'foto' => 'logosmk.ico',
            'jl' => '24',
            'jp' => '12',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X RPL 2',
            'foto' => 'logosmk.ico',
            'jl' => '23',
            'jp' => '13',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X MM 1',
            'foto' => 'logosmk.ico',
            'jl' => '19',
            'jp' => '17',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X MM 2',
            'foto' => 'logosmk.ico',
            'jl' => '21',
            'jp' => '15',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X MM 3',
            'foto' => 'logosmk.ico',
            'jl' => '20',
            'jp' => '16',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X OTKP 1',
            'foto' => 'logosmk.ico',
            'jl' => '4',
            'jp' => '32',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X OTKP 2',
            'foto' => 'logosmk.ico',
            'jl' => '4',
            'jp' => '32',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X AKL 1',
            'foto' => 'logosmk.ico',
            'jl' => '5',
            'jp' => '31',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X AKL 2',
            'foto' => 'logosmk.ico',
            'jl' => '6',
            'jp' => '29',
            'jml' => '35',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X AKL 3',
            'foto' => 'logosmk.ico',
            'jl' => '6',
            'jp' => '30',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X BDP 1',
            'foto' => 'logosmk.ico',
            'jl' => '17',
            'jp' => '19',
            'jml' => '36',
        ]);
        DB::table('pesertas')->insert([
            'nama_kelas' => 'X BDP 2',
            'foto' => 'logosmk.ico',
            'jl' => '16',
            'jp' => '20',
            'jml' => '36',
        ]);
    }
}
