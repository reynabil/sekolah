<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class visimisibkk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisibkks')->insert([
            'foto' => 'blog.jpg',
            'visibkk' => 'Terwujudnya penyalur tamatan yang mempunyai kemampuan keahlian profesional, berkarakter, dan beretos kerja tinggi, serta mampu berkompetensi kerja di era globalisasi.',
            'misibkk' => '<p>1. Menghasilkan tamatan tingkat menengah yang berkualitas dengan berlandaskan agama, disiplin,
            dan
            karakter positif yang tinggi.</p>
        <p>2. Menerapkan manajemen pengelolaan yang menggacu pada standar ISO 9001:2008 dengan melibatkan
            semua komponen sekolah dan pihak pihak terkait .</p>
        <p>3. Meningkatkan kerjasama dan menjalin komunikasi yang baik dengan pihak-pihak terkait terutama
            Dunia Usaha/Dunia Industri/Instansi (DU/DI).</p>
        <P>4. Memberikan pelayanan bagi tamatan dalam mencari lowongan kerja dan rekruitmen tenaga kerja
            dari
            (DU/DI), baik dari dalam negri maupun luar negri .</p>',
        ]);
    }
}
