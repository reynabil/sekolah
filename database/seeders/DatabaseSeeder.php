<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\identitas;
use App\Models\sambutanks;
use App\Models\User;
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
        User::create([
            'name' => 'Administrator',
            'email' => 'Administrator@gmail.com',
            'password' => Hash::make('smkn1pasuruan'),
            'role' => 'Admin',
        ]);


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
            peserta::class,
            sebelas::class,
            duabelas::class,
            tigabelas::class,
            kelasxes::class,
            tenaga::class,
            kelasxis::class,
            tigas::class,
            empat::class,
            denah::class,
            ppdb::class,
            galeri::class,
            kegiatan::class,
            sekolah::class,
            kelulusan::class,
            artikel::class,
            visimisibkk::class,
            strukturbkk::class,
            lowongankerja::class,
            kegiatanbkk::class,
            pengumuman::class,
            siswa::class,
            sasaran::class,
            sasaranmutu::class,
            alumni::class,
            kompetensikeahlian::class,
            fotohome::class,
            sosmed::class,
        ]);
    }
}
