<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\TigaController;
use App\Http\Controllers\EmpatController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BorderController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KelasxController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TenagaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KelasxiController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\FotohomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SambutanksController;
use App\Http\Controllers\KegiatanbkkController;
use App\Http\Controllers\SasaranmutuController;
use App\Http\Controllers\StrukturbkkController;
use App\Http\Controllers\VisimisibkkController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\LowongankerjaController;
use App\Http\Controllers\KompetensikeahlianController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SosmedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Administrator
Route::get('/loginadmin', [AdministratorController::class, 'loginadmin'])->name('login');
Route::post('/loginproses', [AdministratorController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [AdministratorController::class, 'logout'])->name('logout');






//Middleware
Route::group(['middleware' => ['auth', 'hakakses:Admin']], function () {
    //Administrator
    Route::get('/administrator', [AdministratorController::class, 'administrator'])->name('administrator');
    Route::get('/profil', [AdministratorController::class, 'profil'])->name('profil');
    Route::post('/updatefoto', [AdministratorController::class, 'updatefoto'])->name('updatefoto');
    Route::post('/updatefotosampul', [AdministratorController::class, 'updatefotosampul'])->name('updatefotosampul');
    Route::post('/updatenama', [AdministratorController::class, 'updatenama'])->name('updatenama');
    Route::post('/updatepassword', [AdministratorController::class, 'updatepassword'])->name('updatepassword');

    //Slider
    Route::get('/slider', [SliderController::class, 'slider'])->name('slider');
    Route::get('/tampilslider/{id}', [SliderController::class, 'tampilslider'])->name('tampilslider');
    Route::post('/updateslider/{id}', [SliderController::class, 'updateslider'])->name('updateslider');

    //border
    Route::get('/border', [BorderController::class, 'border'])->name('border');
    Route::get('/tampilborder/{id}', [BorderController::class, 'tampilborder'])->name('tampilborder');
    Route::post('/updateborder/{id}', [BorderController::class, 'updateborder'])->name('updateborder');

    //berita
    Route::get('/news', [BeritaController::class, 'news'])->name('news');

    Route::get('/tambahberita', [BeritaController::class, 'tambahberita'])->name('tambahberita');
    Route::get('/tampildata/{id}', [BeritaController::class, 'tampildata'])->name('tampildata');
    Route::post('/insertberita', [BeritaController::class, 'insertberita'])->name('insertberita');

    Route::get('/deleteberita/{id}', [BeritaController::class, 'deleteberita'])->name('deleteberita');
    Route::post('/updateberita/{id}', [BeritaController::class, 'updateberita'])->name('updateberita');

    //artikel
    Route::get('/article', [ArtikelController::class, 'article'])->name('article');
    Route::get('/tambahartikel', [ArtikelController::class, 'tambahartikel'])->name('tambahartikel');

    Route::post('/insertartikel', [ArtikelController::class, 'insertartikel'])->name('insertartikel');
    Route::get('/tampilartikel/{id}', [ArtikelController::class, 'tampilartikel'])->name('tampilartikel');

    Route::post('/updateartikel/{id}', [ArtikelController::class, 'updateartikel'])->name('updateartikel');
    Route::get('/deleteartikel/{id}', [ArtikelController::class, 'deleteartikel'])->name('deleteartikel');


    //alumni
    Route::get('/alumniindex', [AlumniController::class, 'alumniindex'])->name('alumniindex');
    Route::get('/detailalumniindex/{id}', [AlumniController::class, 'detailalumniindex'])->name('detailalumniindex');
    Route::get('/tambahbiodataalumni', [AlumniController::class, 'tambahbiodataalumni'])->name('tambahbiodataalumni');

    Route::get('/tambahalumni', [AlumniController::class, 'tambahalumni'])->name('tambahalumni');
    Route::post('/insertalumni', [AlumniController::class, 'insertalumni'])->name('insertalumni');
    Route::post('/updatestatus/{id}', [AlumniController::class, 'updatestatus'])->name('updatestatus');

    Route::get('/tampilalumni/{id}', [AlumniController::class, 'tampilalumni'])->name('tampilalumni');
    Route::post('/updatealumni/{id}', [AlumniController::class, 'updatealumni'])->name('updatealumni');

    Route::get('/tampilbioalumni/{id}', [AlumniController::class, 'tampilbioalumni'])->name('tampilbioalumni');
    Route::get('/deletebioalumni/{id}', [AlumniController::class, 'deletebioalumni'])->name('deletebioalumni');

    //Pesan
    Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');

    //fotohome
    Route::get('/fotohome', [FotohomeController::class, 'fotohome'])->name('fotohome');
    Route::get('/tambahfotohome', [FotohomeController::class, 'tambahfotohome'])->name('tambahfotohome');
    Route::post('/insertfotohome', [FotohomeController::class, 'insertfotohome'])->name('insertfotohome');
    Route::get('/tampilfotohome/{id}', [FotohomeController::class, 'tampilfotohome'])->name('tampilfotohome');
    Route::post('/updatefotohome/{id}', [FotohomeController::class, 'updatefotohome'])->name('updatefotohome');
    Route::get('/deletefotohome/{id}', [FotohomeController::class, 'deletefotohome'])->name('deletefotohome');

    Route::get('/sosmed', [SosmedController::class, 'sosmed'])->name('sosmed');
    Route::get('/tambahsosmed', [SosmedController::class, 'tambahsosmed'])->name('tambahsosmed');
    Route::post('/insertsosmed', [SosmedController::class, 'insertsosmed'])->name('insertsosmed');

    //start Profil

    //start sambutan kepala sekolah
    Route::get('/sambutanks', [SambutanksController::class, 'sambutanks'])->name('sambutanks');
    Route::get('/tampildatasambutanks/{id}', [SambutanksController::class, 'tampildatasambutanks'])->name('tampildatasambutanks');
    Route::post('/updatedatasambutanks/{id}', [SambutanksController::class, 'updatedatasambutanks'])->name('updatedatasambutanks');
    //end sambutan kepala sekolah

    //start visi misi
    Route::get('/visi', [VisimisiController::class, 'visi'])->name('visi');
    Route::get('/tampildatavisi/{id}', [VisimisiController::class, 'tampildatavisi'])->name('tampildatavisi');
    Route::post('/updatedatavisi/{id}', [VisimisiController::class, 'updatedatavisi'])->name('updatedatavisi');
    //end visi misi

    //start fasilitas
    Route::get('/fasilitas', [FasilitasController::class, 'fasilitas'])->name('fasilitas');
    Route::get('/tambahdatafasilitas', [FasilitasController::class, 'tambahdatafasilitas'])->name('tambahdatafasilitas');
    Route::get('/tambahdatadenah', [FasilitasController::class, 'tambahdatadenah'])->name('tambahdatadenah');

    Route::post('/insertdatafasilitas', [FasilitasController::class, 'insertdatafasilitas'])->name('insertdatafasilitas');
    Route::post('/insertdatadenah', [FasilitasController::class, 'insertdatadenah'])->name('insertdatadenah');

    Route::get('/tampildatafasilitas/{id}', [FasilitasController::class, 'tampildatafasilitas'])->name('tampildatafasilitas');
    Route::get('/tampildatadenah/{id}', [FasilitasController::class, 'tampildatadenah'])->name('tampildatadenah');
    Route::post('/updatedatafasilitas/{id}', [FasilitasController::class, 'updatedatafasilitas'])->name('updatedatafasilitas');
    Route::post('/updatedatadenah/{id}', [FasilitasController::class, 'updatedatadenah'])->name('updatedatadenah');

    Route::get('/deletefasilitas/{id}', [FasilitasController::class, 'deletefasilitas'])->name('deletefasilitas');
    //end fasilitas

    //start proker
    Route::get('/proker', [ProkerController::class, 'proker'])->name('proker');
    Route::get('/tambahproker', [ProkerController::class, 'tambahproker'])->name('tambahproker');
    Route::post('/insertproker', [ProkerController::class, 'insertproker'])->name('insertproker');

    Route::get('/tampilproker/{id}', [ProkerController::class, 'tampilproker'])->name('tampilproker');
    Route::post('/updateproker/{id}', [ProkerController::class, 'updateproker'])->name('updateproker');
    Route::get('/deleteproker/{id}', [ProkerController::class, 'deleteproker'])->name('deleteproker');
    //end proker

    //start ekskul
    Route::get('/ekskul', [EkskulController::class, 'ekskul'])->name('ekskul');
    Route::get('/tambahdataekskul', [EkskulController::class, 'tambahdataekskul'])->name('tambahdataekskul');

    Route::post('/insertdataekskul', [EkskulController::class, 'insertdataekskul'])->name('insertdataekskul');

    Route::get('/tampildataekskul/{id}', [EkskulController::class, 'tampildataekskul'])->name('tampildataekskul');
    Route::post('/updatedataekskul/{id}', [EkskulController::class, 'updatedataekskul'])->name('updatedataekskul');

    Route::get('/deleteekskul/{id}', [EkskulController::class, 'deleteekskul'])->name('deleteekskul');
    //end ekskul

    //start identitas sekolah
    Route::get('/identitas', [IdentitasController::class, 'identitas'])->name('identitas');
    Route::get('/tampildataidentitas/{id}', [IdentitasController::class, 'tampildataidentitas'])->name('tampildataidentitas');
    Route::post('/updatedataidentitas/{id}', [IdentitasController::class, 'updatedataidentitas'])->name('updatedataidentitas');
    // end identitas sekolah

    //start sejarah smk
    Route::get('/history', [SejarahController::class, 'history'])->name('history');
    Route::post('/insertdataperkembangan', [SejarahController::class, 'insertdataperkembangan'])->name('insertdataperkembangan');

    Route::get('/tambahdataperkembangan', [SejarahController::class, 'tambahdataperkembangan'])->name('tambahdataperkembangan');
    Route::get('/deleteperkembangan/{id}', [SejarahController::class, 'deleteperkembangan'])->name('deleteperkembangan');

    Route::get('/tampildataperkembangan/{id}', [SejarahController::class, 'tampildataperkembangan'])->name('tampildataperkembangan');
    Route::post('/updatedataperkembangan/{id}', [SejarahController::class, 'updatedataperkembangan'])->name('updatedataperkembangan');
    Route::post('/updatedatasejarah/{id}', [SejarahController::class, 'updatedatasejarah'])->name('updatedatasejarah');
    Route::get('/tampildatasejarah/{id}', [SejarahController::class, 'tampildatasejarah'])->name('tampildatasejarah');
    //end sejarah smk

    //start kompetensi keahlian
    Route::get('/kompetensikeahlianindex', [KompetensikeahlianController::class, 'kompetensikeahlianindex'])->name('kompetensikeahlianindex');
    Route::get('/tambahkompetensi', [KompetensikeahlianController::class, 'tambahkompetensi'])->name('tambahkompetensi');
    Route::post('/insertkompetensi', [KompetensikeahlianController::class, 'insertkompetensi'])->name('insertkompetensi');

    Route::get('/tampilkompetensi/{id}', [KompetensikeahlianController::class, 'tampilkompetensi'])->name('tampilkompetensi');
    Route::post('/updatekompetensi/{id}', [KompetensikeahlianController::class, 'updatekompetensi'])->name('updatekompetensi');

    Route::get('/deletekompetensi/{id}', [KompetensikeahlianController::class, 'deletekompetensi'])->name('deletekompetensi');
    //end kompetensi keahlian

    //end profil

    //start Data info ptk dan pd
    // start peserta didik
    Route::get('/peserta', [PesertaController::class, 'peserta'])->name('peserta');
    Route::get('/data/{id}', [PesertaController::class, 'data'])->name('data');
    Route::get('/dataXI/{id}', [PesertaController::class, 'dataXI'])->name('dataXI');
    Route::get('/dataXII/{id}', [PesertaController::class, 'dataXII'])->name('dataXII');
    Route::get('/dataXIII/{id}', [PesertaController::class, 'dataXIII'])->name('dataXIII');

    //x
    Route::get('/tambahdatapeserta', [PesertaController::class, 'tambahdatapeserta'])->name('tambahdatapeserta');
    Route::post('/insertdatapeserta', [PesertaController::class, 'insertdatapeserta'])->name('insertdatapeserta');
    Route::get('/tampildatapeserta/{id}', [PesertaController::class, 'tampildatapeserta'])->name('tampildatapeserta');
    Route::post('/updatedatapeserta/{id}', [PesertaController::class, 'updatedatapeserta'])->name('updatedatapeserta');
    Route::get('/deletepeserta/{id}', [PesertaController::class, 'deletepeserta'])->name('deletepeserta');

    //xi
    Route::get('/tambahdataXI', [PesertaController::class, 'tambahdataXI'])->name('tambahdataXI');
    Route::post('/insertdataXI', [PesertaController::class, 'insertdataXI'])->name('insertdataXI');
    Route::get('/tampildataXI/{id}', [PesertaController::class, 'tampildataXI'])->name('tampildataXI');
    Route::post('/updatedataXI/{id}', [PesertaController::class, 'updatedataXI'])->name('updatedataXI');
    Route::get('/deleteXI/{id}', [PesertaController::class, 'deleteXI'])->name('deleteXI');

    //xii
    Route::get('/tambahdataXII', [PesertaController::class, 'tambahdataXII'])->name('tambahdataXII');
    Route::post('/insertdataXII', [PesertaController::class, 'insertdataXII'])->name('insertdataXII');
    Route::get('/tampildataXII/{id}', [PesertaController::class, 'tampildataXII'])->name('tampildataXII');
    Route::post('/updatedataXII/{id}', [PesertaController::class, 'updatedataXII'])->name('updatedataXII');
    Route::get('/deleteXII/{id}', [PesertaController::class, 'deleteXII'])->name('deleteXII');

    //xiii
    Route::get('/tambahdataXIII', [PesertaController::class, 'tambahdataXIII'])->name('tambahdataXIII');
    Route::post('/insertdataXIII', [PesertaController::class, 'insertdataXIII'])->name('insertdataXIII');
    Route::get('/tampildataXIII/{id}', [PesertaController::class, 'tampildataXIII'])->name('tampildataXIII');
    Route::post('/updatedataXIII/{id}', [PesertaController::class, 'updatedataXIII'])->name('updatedataXIII');
    Route::get('/deleteXIII/{id}', [PesertaController::class, 'deleteXIII'])->name('deleteXIII');
    //end peserta didik

    //start data pendidik
    Route::get('/exportpdf', [PendidikController::class, 'exportpdf'])->name('exportpdf');
    Route::get('/pendidik', [PendidikController::class, 'pendidik'])->name('pendidik');
    Route::get('/tambahdatapendidik', [PendidikController::class, 'tambahdatapendidik'])->name('tambahdatapendidik');

    Route::post('/insertdatapendidik', [PendidikController::class, 'insertdatapendidik'])->name('insertdatapendidik');

    Route::get('/tampildatapendidik/{id}', [PendidikController::class, 'tampildatapendidik'])->name('tampildatapendidik');
    Route::post('/updatedatapendidik/{id}', [PendidikController::class, 'updatedatapendidik'])->name('updatedatapendidik');

    Route::get('/deletependidik/{id}', [PendidikController::class, 'deletependidik'])->name('deletependidik');
    //end data pendidik

    //start data tenaga non pendidik

    Route::get('/exportpdfnonpendidik', [TenagaController::class, 'exportpdfnonpendidik'])->name('exportpdfnonpendidik');
    Route::get('/tenaga', [TenagaController::class, 'tenaga'])->name('tenaga');
    Route::get('/tambahdatatenaga', [TenagaController::class, 'tambahdatatenaga'])->name('tambahdatatenaga');

    Route::post('/insertdatatenaga', [TenagaController::class, 'insertdatatenaga'])->name('insertdatatenaga');

    Route::get('/tampildatatenaga/{id}', [TenagaController::class, 'tampildatatenaga'])->name('tampildatatenaga');
    Route::post('/updatedatatenaga/{id}', [TenagaController::class, 'updatedatatenaga'])->name('updatedatatenaga');

    Route::get('/deletetenaga/{id}', [TenagaController::class, 'deletetenaga'])->name('deletetenaga');
    //end data tenaga non pendidik

    //end data info ptk dan pd
    //start bahan ajar

    //start bahan ajar kelas x
    Route::get('/kelasxes', [KelasxController::class, 'kelasxes'])->name('kelasxes');
    Route::get('/tambahdatakelasxes', [KelasxController::class, 'tambahdatakelasxes'])->name('tambahdatakelasxes');

    Route::post('/insertdatakelasxes', [KelasxController::class, 'insertdatakelasxes'])->name('insertdatakelasxes');

    Route::get('/tampildatakelasxes/{id}', [KelasxController::class, 'tampildatakelasxes'])->name('tampildatakelasxes');
    Route::post('/updatedatakelasxes/{id}', [KelasxController::class, 'updatedatakelasxes'])->name('updatedatakelasxes');

    Route::get('/deletekelasxes/{id}', [KelasxController::class, 'deletekelasxes'])->name('deletekelasxes');
    //end bahan ajar kelas x

    //start bahan ajar kelas xi
    Route::get('/kelasxis', [KelasxiController::class, 'kelasxis'])->name('kelasxis');
    Route::get('/tambahdatakelasxis', [KelasxiController::class, 'tambahdatakelasxis'])->name('tambahdatakelasxis');

    Route::post('/insertdatakelasxis', [KelasxiController::class, 'insertdatakelasxis'])->name('insertdatakelasxis');

    Route::get('/tampildatakelasxis/{id}', [KelasxiController::class, 'tampildatakelasxis'])->name('tampildatakelasxis');
    Route::post('/updatedatakelasxis/{id}', [KelasxiController::class, 'updatedatakelasxis'])->name('updatedatakelasxis');

    Route::get('/deletekelasxis/{id}', [KelasxiController::class, 'deletekelasxis'])->name('deletekelasxis');
    //end bahan ajar kelas xi

    //start bahan ajar kelas xii
    Route::get('/tigas', [TigaController::class, 'tigas'])->name('tigas');
    Route::get('/tambahdatatigas', [TigaController::class, 'tambahdatatigas'])->name('tambahdatatigas');

    Route::post('/insertdatatigas', [TigaController::class, 'insertdatatigas'])->name('insertdatatigas');

    Route::get('/tampildatatigas/{id}', [TigaController::class, 'tampildatatigas'])->name('tampildatatigas');
    Route::post('/updatedatatigas/{id}', [TigaController::class, 'updatedatatigas'])->name('updatedatatigas');

    Route::get('/deletetigas/{id}', [TigaController::class, 'deletetigas'])->name('deletetigas');
    //end bahan ajar kelas xii

    //start bahan ajar xiiika
    Route::get('/empats', [EmpatController::class, 'empats'])->name('empats');
    Route::get('/tambahdataempats', [EmpatController::class, 'tambahdataempats'])->name('tambahdataempats');

    Route::post('/insertdataempats', [EmpatController::class, 'insertdataempats'])->name('insertdataempats');

    Route::get('/tampildataempats/{id}', [EmpatController::class, 'tampildataempats'])->name('tampildataempats');
    Route::post('/updatedataempats/{id}', [EmpatController::class, 'updatedataempats'])->name('updatedataempats');

    Route::get('/deleteempats/{id}', [EmpatController::class, 'deleteempats'])->name('deleteempats');
    //end bahan ajar xiiika

    //end bahan ajar

    //start agenda kegiatan

    //start kegiatan ppdb
    Route::get('/ppdb', [PpdbController::class, 'ppdb'])->name('ppdb');
    Route::get('/tampildatappdb/{id}', [PpdbController::class, 'tampildatappdb'])->name('tampildatappdb');
    Route::post('/updatedatappdb/{id}', [PpdbController::class, 'updatedatappdb'])->name('updatedatappdb');
    //end kegiatan ppdb

    //start kegiatan kegamaan
    Route::get('/kegiatans', [KegiatanController::class, 'kegiatans'])->name('kegiatans');
    Route::get('/tambahdatakegiatans', [KegiatanController::class, 'tambahdatakegiatans'])->name('tambahdatakegiatans');

    Route::post('/insertdatakegiatans', [KegiatanController::class, 'insertdatakegiatans'])->name('insertdatakegiatans');

    Route::get('/tampildatakegiatans/{id}', [KegiatanController::class, 'tampildatakegiatans'])->name('tampildatakegiatans');
    Route::post('/updatedatakegiatans/{id}', [KegiatanController::class, 'updatedatakegiatans'])->name('updatedatakegiatans');

    Route::get('/deletekegiatans/{id}', [KegiatanController::class, 'deletekegiatans'])->name('deletekegiatans');
    //end kegiatan keagamaan

    //start kegiatan sekolah dan phbn
    Route::get('/sekolahs', [SekolahController::class, 'sekolahs'])->name('sekolahs');
    Route::get('/tambahdatasekolahs', [SekolahController::class, 'tambahdatasekolahs'])->name('tambahdatasekolahs');

    Route::post('/insertdatasekolahs', [SekolahController::class, 'insertdatasekolahs'])->name('insertdatasekolahs');

    Route::get('/tampildatasekolahs/{id}', [SekolahController::class, 'tampildatasekolahs'])->name('tampildatasekolahs');
    Route::post('/updatedatasekolahs/{id}', [SekolahController::class, 'updatedatasekolahs'])->name('updatedatasekolahs');

    Route::get('/deletesekolahs/{id}', [SekolahController::class, 'deletesekolahs'])->name('deletesekolahs');
    //end kegiatan sekolah dan phbn

    //start galeri
    Route::get('/galeri', [GaleriController::class, 'galeri'])->name('galeri');
    Route::get('/tambahgaleri', [GaleriController::class, 'tambahgaleri'])->name('tambahgaleri');
    Route::post('/insertgaleri', [GaleriController::class, 'insertgaleri'])->name('insertgaleri');

    Route::get('/tampilgaleri/{id}', [GaleriController::class, 'tampilgaleri'])->name('tampilgaleri');
    Route::post('/updategaleri/{id}', [GaleriController::class, 'updategaleri'])->name('updategaleri');
    Route::get('/deletegaleri/{id}', [GaleriController::class, 'deletegaleri'])->name('deletegaleri');
    //end galeri

    //start info kelulusan
    Route::get('/lulusan', [KelulusanController::class, 'lulusan'])->name('lulusan');
    Route::get('/tambahkelulusan', [KelulusanController::class, 'tambahkelulusan'])->name('tambahkelulusan');

    Route::post('/insertdatakelulusan', [KelulusanController::class, 'insertdatakelulusan'])->name('insertdatakelulusan');
    Route::get('/tampilkelulusan/{id}', [KelulusanController::class, 'tampilkelulusan'])->name('tampilkelulusan');
    Route::post('/updatekelulusan/{id}', [KelulusanController::class, 'updatekelulusan'])->name('updatekelulusan');
    Route::get('/deletekelulusan/{id}', [KelulusanController::class, 'deletekelulusan'])->name('deletekelulusan');
    //end info kelulusan

    //end agenda kegiatan

    //start bkk

    //start visi misi bkk
    Route::get('/visimisib', [VisimisibkkController::class, 'visimisib'])->name('visimisib');
    Route::get('/tampilvisimisibkk/{id}', [VisimisibkkController::class, 'tampilvisimisibkk'])->name('tampilvisimisibkk');
    Route::post('/updatevisimisibkk/{id}', [VisimisibkkController::class, 'updatevisimisibkk'])->name('updatevisimisibkk');
    //end visi misi bkk

    //start struktur organisasi bkk
    Route::get('/struktur', [StrukturbkkController::class, 'struktur'])->name('struktur');
    Route::get('/tampilstrukturbkk/{id}', [StrukturbkkController::class, 'tampilstrukturbkk'])->name('tampilstrukturbkk');
    Route::post('/updatestrukturbkk/{id}', [StrukturbkkController::class, 'updatestrukturbkk'])->name('updatestrukturbkk');
    //end struktur organisasi bkk

    //start sasaran mutu
    Route::get('/sasaranmutuindex', [SasaranmutuController::class, 'sasaranmutuindex'])->name('sasaranmutuindex');

    Route::get('/tambahdatasasaran', [SasaranmutuController::class, 'tambahdatasasaran'])->name('tambahdatasasaran');
    Route::post('/insertsasaranmutu', [SasaranmutuController::class, 'insertsasaranmutu'])->name('insertsasaranmutu');

    Route::get('/tampilsasaranmutuindex/{id}', [SasaranmutuController::class, 'tampilsasaranmutuindex'])->name('tampilsasaranmutuindex');
    Route::post('/updatesasaranmutuindex/{id}', [SasaranmutuController::class, 'updatesasaranmutuindex'])->name('updatesasaranmutuindex');

    Route::get('/tampilsasaranmutu/{id}', [SasaranmutuController::class, 'tampilsasaranmutu'])->name('tampilsasaranmutu');
    Route::post('/updatesasaranmutu/{id}', [SasaranmutuController::class, 'updatesasaranmutu'])->name('updatesasaranmutu');

    Route::get('/deletesasaranmutu/{id}', [SasaranmutuController::class, 'deletesasaranmutu'])->name('deletesasaranmutu');
    //end sasaran mutu

    //start info lowongan kerja
    Route::get('/lowongankerja', [LowongankerjaController::class, 'lowongankerja'])->name('lowongankerja');

    Route::get('/tambahlowongan', [LowongankerjaController::class, 'tambahlowongan'])->name('tambahlowongan');
    Route::post('/insertlowongan', [LowongankerjaController::class, 'insertlowongan'])->name('insertlowongan');

    Route::get('/tampillowongan/{id}', [LowongankerjaController::class, 'tampillowongan'])->name('tampillowongan');
    Route::post('/updatelowongan/{id}', [LowongankerjaController::class, 'updatelowongan'])->name('updatelowongan');
    Route::get('/deletelowongan/{id}', [LowongankerjaController::class, 'deletelowongan'])->name('deletelowongan');
    //end info lowongan kerja

    //start pengumuman penerimaan kerja
    Route::get('/pengumuman', [PengumumanController::class, 'pengumuman'])->name('pengumuman');

    Route::get('/tambahpengumuman', [PengumumanController::class, 'tambahpengumuman'])->name('tambahpengumuman');
    Route::post('/insertpengumuman', [PengumumanController::class, 'insertpengumuman'])->name('insertpengumuman');

    Route::get('/tambahsiswa', [PengumumanController::class, 'tambahsiswa'])->name('tambahsiswa');
    Route::post('/insertsiswa', [PengumumanController::class, 'insertsiswa'])->name('insertsiswa');

    Route::get('/tampilsiswa/{id}', [PengumumanController::class, 'tampilsiswa'])->name('tampilsiswa');
    Route::post('/updatesiswa/{id}', [PengumumanController::class, 'updatesiswa'])->name('updatesiswa');

    Route::get('/tampilpengumuman/{id}', [PengumumanController::class, 'tampilpengumuman'])->name('tampilpengumuman');
    Route::post('/updatepengumuman/{id}', [PengumumanController::class, 'updatepengumuman'])->name('updatepengumuman');

    Route::get('/deletepengumuman/{id}', [PengumumanController::class, 'deletepengumuman'])->name('deletepengumuman');
    Route::get('/deletesiswa/{id}', [PengumumanController::class, 'deletesiswa'])->name('deletesiswa');
    //end pengummuman penerimaan kerja

    //start kegiatan bkk
    Route::get('/kegiatanbkkindex', [KegiatanbkkController::class, 'kegiatanbkkindex'])->name('kegiatanbkkindex');

    Route::get('/tambahkegiatanbkk', [KegiatanbkkController::class, 'tambahkegiatanbkk'])->name('tambahkegiatanbkk');
    Route::post('/insertkegiatanbkk', [KegiatanbkkController::class, 'insertkegiatanbkk'])->name('insertkegiatanbkk');

    Route::get('/tampilkegiatanbkk/{id}', [KegiatanbkkController::class, 'tampilkegiatanbkk'])->name('tampilkegiatanbkk');
    Route::post('/updatekegiatanbkk/{id}', [KegiatanbkkController::class, 'updatekegiatanbkk'])->name('updatekegiatanbkk');
    Route::get('/deletekegiatanbkk/{id}', [KegiatanbkkController::class, 'deletekegiatanbkk'])->name('deletekegiatanbkk');
    //end kegiatan bkk

    //end bkk
});


//Guest

//face
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/footer', [HomeController::class, 'footer'])->name('footer');

//berita
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/selengkapnya/{id}', [BeritaController::class, 'selengkapnya'])->name('selengkapnya');

//artikel
Route::get('/artikel', [ArtikelController::class, 'artikel'])->name('artikel');
Route::get('/detailartikel/{id}', [ArtikelController::class, 'detailartikel'])->name('detailartikel');

//Alumni
Route::get('/tambah', [AlumniController::class, 'tambah'])->name('tambah');
Route::get('/alumni', [AlumniController::class, 'alumni'])->name('alumni');
Route::get('/detailalumni/{id}', [AlumniController::class, 'detailalumni'])->name('detailalumni');
Route::post('/insertbiodataalumni', [AlumniController::class, 'insertbiodataalumni'])->name('insertbiodataalumni');


//start profil
//sambutan
Route::get('/sambutan', [SambutanksController::class, 'sambutan'])->name('sambutan');

//visi
Route::get('/visim', [VisimisiController::class, 'visim'])->name('visim');

//fasilitas
Route::get('/fase', [FasilitasController::class, 'fase'])->name('fase');
Route::get('/foto/{id}', [FasilitasController::class, 'foto'])->name('foto');

//proker
Route::get('/program', [ProkerController::class, 'program'])->name('program');

//ekskul
Route::get('/ekstra', [EkskulController::class, 'ekstra'])->name('ekstra');
Route::get('/detail/{id}', [EkskulController::class, 'detail'])->name('detail');

//identitas
Route::get('/identity', [IdentitasController::class, 'identity'])->name('identity');

//sejarah smk
Route::get('/sejarah', [SejarahController::class, 'sejarah'])->name('sejarah');

//kompetensikeahlian
Route::get('/kompetensikeahlian', [KompetensikeahlianController::class, 'kompetensikeahlian'])->name('kompetensikeahlian');
Route::get('/detailkompetensi/{id}', [KompetensikeahlianController::class, 'detailkompetensi'])->name('detailkompetensi');
//end profil

//start data info ptk dan pd
//data peserta didik
Route::get('/sepuluh', [PesertaController::class, 'sepuluh'])->name('sepuluh');
Route::get('/sebelas', [PesertaController::class, 'sebelas'])->name('sebelas');
Route::get('/duabelas', [PesertaController::class, 'duabelas'])->name('duabelas');
Route::get('/tigabelas', [PesertaController::class, 'tigabelas'])->name('tigabelas');
Route::get('/murid', [PesertaController::class, 'murid'])->name('murid');

//data pendidik
Route::get('/teacher', [PendidikController::class, 'teacher'])->name('teacher');

//data tenaga non pendidik
Route::get('/nonpendidik', [TenagaController::class, 'nonpendidik'])->name('nonpendidik');
//end data info ptk dan pd

//start bahan ajar
//bahanajarx
Route::get('/ajarx', [KelasxController::class, 'ajarx'])->name('ajarx');

//bahanajarxi
Route::get('/ajarxi', [KelasxiController::class, 'ajarxi'])->name('ajarxi');

//bahanajarxii
Route::get('/ajarxii', [TigaController::class, 'ajarxii'])->name('ajarxii');

//bahanajar xiiika
Route::get('/ajarxiiika', [EmpatController::class, 'ajarxiiika'])->name('ajarxiiika');
//end bahan ajar

//start agenda kegiatan
//kegiatanppdb
Route::get('/kegiatanppdb', [PpdbController::class, 'kegiatanppdb'])->name('kegiatanppdb');

//kegiatan keagamaan
Route::get('/keagamaan', [KegiatanController::class, 'keagamaan'])->name('keagamaan');

//sekolah
Route::get('/phbn', [SekolahController::class, 'phbn'])->name('phbn');

//galeri
Route::get('/gallery', [GaleriController::class, 'gallery'])->name('gallery');

//info kelulusan
Route::get('/kelulusan', [KelulusanController::class, 'kelulusan'])->name('kelulusan');
//end agenda kegiatan

//start bkk
//visimisibkk
Route::get('/visimisibkk', [VisimisibkkController::class, 'visimisibkk'])->name('visimisibkk');

//struktur organisasi bkk
Route::get('/strukturorganisasibkk', [StrukturbkkController::class, 'strukturorganisasibkk'])->name('strukturorganisasibkk');

//info lowongan kerja
Route::get('/infolowongankerja', [LowongankerjaController::class, 'infolowongankerja'])->name('infolowongankerja');

//kegiatan bkk
Route::get('/kegiatanbkk', [KegiatanbkkController::class, 'kegiatanbkk'])->name('kegiatanbkk');
Route::get('/selengkapnyabkk/{id}', [KegiatanbkkController::class, 'selengkapnyabkk'])->name('selengkapnyabkk');

//pengumuman
Route::get('/pengumumanbkk', [PengumumanController::class, 'pengumumanbkk'])->name('pengumumanbkk');
Route::get('/siswa/{id}', [PengumumanController::class, 'siswa'])->name('siswa');

//sasaran mutu
Route::get('/sasaranmutu', [SasaranmutuController::class, 'sasaranmutu'])->name('sasaranmutu');
//kontak kami
Route::get('/contact', [KontakController::class, 'contact'])->name('contact');
Route::post('/insertpesan', [KontakController::class, 'insertpesan'])->name('insertpesan');

//end bkk
