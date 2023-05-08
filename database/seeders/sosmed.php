<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sosmed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sosmeds')->insert([

            'name' => 'Facebook',
            'link' => 'https://www.facebook.com/skensapas'
        ]);
        DB::table('sosmeds')->insert([

            'name' => 'Twitter',
            'link' => 'https://twitter.com/smkn1pasuruan'
        ]);
        DB::table('sosmeds')->insert([

            'name' => 'Youtube',
            'link' => 'https://www.youtube.com/@osis-mpkskensa4022'
        ]);
    }
}
