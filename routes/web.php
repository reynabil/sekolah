<?php

use App\Http\Controllers\FasilitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisimisiController;
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

Route::get('/tampildatafasilitas/{id}', [VisimisiController::class, 'tampildatafasilitas'])->name('tampildatafasilitas');
Route::post('/updatedatafasilitas/{id}', [VisimisiController::class, 'updatedatafasilitas'])->name('updatedatafasilitas');

Route::get('/deletefasilitas/{id}', [VisimisiController::class, 'deletefasilitas'])->name('deletefasilitas');


