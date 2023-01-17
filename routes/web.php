<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenagaController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\SambutanksController;

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

Route::get('/', function () {
    return view('welcome');
});

//sambutan
Route::get('/sambutanks', [SambutanksController::class, 'sambutanks'])->name('sambutanks');
Route::get('/tambahdatasambutanks', [SambutanksController::class, 'tambahdatasambutanks'])->name('tambahdatasambutanks');

Route::post('/insertdatasambutanks', [SambutanksController::class, 'insertdatasambutanks'])->name('insertdatasambutanks');

Route::get('/tampildatasambutanks/{id}', [SambutanksController::class, 'tampildatasambutanks'])->name('tampildatasambutanks');
Route::post('/updatedatasambutanks/{id}', [SambutanksController::class, 'updatedatasambutanks'])->name('updatedatasambutanks');

Route::get('/deletesambutanks/{id}', [SambutanksController::class, 'deletesambutanks'])->name('deletesambutanks');

//visi
Route::get('/visi', [VisimisiController::class, 'visi'])->name('visi');
Route::get('/tambahdatavisi', [VisimisiController::class, 'tambahdatavisi'])->name('tambahdatavisi');

Route::post('/insertdatavisi', [VisimisiController::class, 'insertdatavisi'])->name('insertdatavisi');

Route::get('/tampildatavisi/{id}', [VisimisiController::class, 'tampildatavisi'])->name('tampildatavisi');
Route::post('/updatedatavisi/{id}', [VisimisiController::class, 'updatedatavisi'])->name('updatedatavisi');

Route::get('/deletevisi/{id}', [VisimisiController::class, 'deletevisi'])->name('deletevisi');

//fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'fasilitas'])->name('fasilitas');
Route::get('/tambahdatafasilitas', [FasilitasController::class, 'tambahdatafasilitas'])->name('tambahdatafasilitas');

Route::post('/insertdatafasilitas', [FasilitasController::class, 'insertdatafasilitas'])->name('insertdatafasilitas');

Route::get('/tampildatafasilitas/{id}', [FasilitasController::class, 'tampildatafasilitas'])->name('tampildatafasilitas');
Route::post('/updatedatafasilitas/{id}', [FasilitasController::class, 'updatedatafasilitas'])->name('updatedatafasilitas');

Route::get('/deletefasilitas/{id}', [FasilitasController::class, 'deletefasilitas'])->name('deletefasilitas');


//peserta
Route::get('/pesertas', [PesertaController::class, 'pesertas'])->name('pesertas');
Route::get('/tambahdatapesertas', [PesertaController::class, 'tambahdatapesertas'])->name('tambahdatapesertas');

Route::post('/insertdatapesertas', [PesertaController::class, 'insertdatapesertas'])->name('insertdatapesertas');

Route::get('/tampildatapesertas/{id}', [PesertaController::class, 'tampildatapesertas'])->name('tampildatapesertas');
Route::post('/updatedatapesertas/{id}', [PesertaController::class, 'updatedatapesertas'])->name('updatedatapesertas');

Route::get('/deletepesertas/{id}', [PesertaController::class, 'deletepesertas'])->name('deletepesertas');

//pendidik
Route::get('/pendidiks', [PendidikController::class, 'pendidiks'])->name('pendidiks');
Route::get('/tambahdatapendidiks', [PendidikController::class, 'tambahdatapendidiks'])->name('tambahdatapendidiks');

Route::post('/insertdatapendidiks', [PendidikController::class, 'insertdatapendidiks'])->name('insertdatapendidiks');

Route::get('/tampildatapendidiks/{id}', [PendidikController::class, 'tampildatapendidiks'])->name('tampildatapendidiks');
Route::post('/updatedatapendidiks/{id}', [PendidikController::class, 'updatedatapendidiks'])->name('updatedatapendidiks');

Route::get('/deletependidiks/{id}', [PendidikController::class, 'deletependidiks'])->name('deletependidiks');

//tenaga
Route::get('/tenagas', [TenagaController::class, 'tenagas'])->name('tenagas');
Route::get('/tambahdatatenagas', [TenagaController::class, 'tambahdatatenagas'])->name('tambahdatatenagas');

Route::post('/insertdatatenagas', [TenagaController::class, 'insertdatatenagas'])->name('insertdatatenagas');

Route::get('/tampildatatenagas/{id}', [TenagaController::class, 'tampildatatenagas'])->name('tampildatatenagas');
Route::post('/updatedatatenagas/{id}', [TenagaController::class, 'updatedatatenagas'])->name('updatedatatenagas');

Route::get('/deletetenagas/{id}', [TenagaController::class, 'deletetenagas'])->name('deletetenagas');


