<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\identitas;
use App\Models\sambutanks;
use App\Models\visimisi;
use Database\Seeders\identitas as SeedersIdentitas;
use Database\Seeders\sambutanks as SeedersSambutanks;
use Database\Seeders\visimisi as SeedersVisimisi;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SeedersSambutanks::class,
            SeedersVisimisi::class,
            SeedersIdentitas::class,
            fasilitas::class,
            ekskul::class,
            sejarah::class,
            perkembangan::class,
            berita::class,
            slider::class,
            border::class,
            proker::class,
            pendidik::class,

        ]);
    }
}
