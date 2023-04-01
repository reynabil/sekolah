<?php

namespace Database\Seeders;

use App\Models\ekskul as ModelsEkskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ekskul extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ekskuls')->insert([
            'foto' => 'albanjari.jpeg',
            'judul' => 'Ekstrakurikuler Albanjari',
            'deskripsi' => 'Hadrah atau biasa yang dikenal dengan al-banjari merupakan kegiatan membaca sholawat dengan diiringi alat musik terbang. Seni al banjari memiliki irama yang menghentak, rancak dan variatif. Kesenian ini seringkali digelar dalam acara-acara seperti maulid nabi, isra miraj atau hajatan semacam sunatan dan pernikahan',
        ]);
        DB::table('ekskuls')->insert([
            'foto' => 'archery.jpeg',
            'judul' => 'Ekstrakurikuler Memanah',
            'deskripsi' => 'Panahan (Inggris:Archery) adalah salah satu olahraga yang dilakukan pemanah dengan cara menembakkan anak panah dengan bantuan busur untuk mencapai target atau sasaran tembak pada jarak yang sudah ditentukan.[1] Berdasarkan pembinaan kondisi fisik, ada komponen-komponen fisik yang lebih spesifik untuk panahan, yaitu daya tahan (endurance), kekuatan (strength), kelenturan (flexibilitas), dan structure/accuracy. Dengan memiliki kekuatan otot dan daya tahan otot yang baik, maka akan memberikan keuntungan besar bagi pemanah untuk tampil di puncaknya. Di samping itu, memanah membutuhkan kekuatan otot tubuh bagian atas dan inti yang menggerakkan kelompok otot utama.',
        ]);
        DB::table('ekskuls')->insert([
            'foto' => 'basket.jpeg',
            'judul' => 'Ekstrakurikuler Basket',
            'deskripsi' => 'Bola basket adalah olahraga bola berkelompok yang terdiri atas dua tim beranggotakan masing-masing lima orang yang saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan.[1] Bola basket dapat di lapangan terbuka, walaupun pertandingan profesional pada umumnya dilakukan di ruang tertutup. Lapangan pertandingan yang diperlukan juga relatif tidak besar, misal dibandingkan dengan sepak bola.[2] Selain itu, permainan bola basket juga lebih kompetitif karena tempo permainan cenderung lebih cepat jika dibandingkan dengan olahraga bola yang lain, seperti voli dan sepak bola.',
        ]);
        DB::table('ekskuls')->insert([
            'foto' => 'koperasi.jpeg',
            'judul' => 'Ekstrakurikuler Koperasi',
            'deskripsi' => 'Koperasi adalah salah satu ekstrakurikuler di SMk Negeri 1 Pasuruan yang bergerak di bidang ekonomi. Ekskul ini bertujuan untuk mengembangkan wawasan, kreativitas, dan inovasi siswa dalam berwirausaha. Mengingat bahwa di era globalisasi yang semakin berkembang pesat, tentunya bangsa ini harus mencetak generasi emas yang tanggap dan mampu mengambil peluang dalam berwirausaha.',
        ]);
        DB::table('ekskuls')->insert([
            'foto' => 'english.jpeg',
            'judul' => 'Ekstrakurikuler English Club',
            'deskripsi' => 'English Club Sebagai Wadah Bagi Para Siswa Untuk Belajar Dan Meningkatkan Kemampuan Berbahasa Inggris. English Club Dapat Membantu Para Siswa Dalam Menunjang Pembelajaran Bahasa Inggris Dikelas Maupun Dilingkungan Sekitar Atau Diluar Sekolah.',
        ]);
        DB::table('ekskuls')->insert([
            'foto' => 'voli.jpeg',
            'judul' => 'Ekstrakurikuler Voli',
            'deskripsi' => 'Bola voli (bahasa Inggris: volleyball) adalah permainan olahraga yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemain. Terdapat pula variasi permainan bola voli pantai yang masing-masing timnya hanya memiliki dua orang pemain. Olahraga ini dinaungi FIVB (Fédération Internationale de Volleyball)[1] sebagai induk organisasi internasional. Sedangkan di Indonesia, olahraga bola Voli dinaungi oleh PBVSI (Persatuan Bola Voli Seluruh Indonesia).',
        ]);
    }
}
