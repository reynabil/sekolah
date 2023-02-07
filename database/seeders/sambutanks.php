<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sambutanks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sambutanks')->insert([
            'judul' => 'Sambutan Kepala Sekolah',
            'nama' => 'Drs. Akh Sigit Suyani, S.ST, M.T',
            'foto' => 'kepsek.jpg',
            'deskripsi' => ' <p>
            Puji syukur kepada Allah SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan
            anugerahNya sehingga website SMK Negeri 1 Pasuruan ini dapat terbit untuk menjawab akan
            setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada.

            Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya Teknologi
            Informasi yang begitu pesat, sangat diperlukan berbagai sarana prasarana yang kondusif,
            kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami
            berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini
            dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan,
            ilmu pengetahuan dan informasi seputar SMK Negeri 1 Pasuruan.
        </p>
        <p>Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup
            pendidikan dan pemerhati pendidikan secara khusus bagi SMK Negeri 1 Pasuruan.

            Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus
            belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus
            berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk
            mencapai SMK Negeri 1 Pasuruan yang lebih baik lagi.

            Wassalamualaikum wr.wb.</p>',
        ]);
    }
}
