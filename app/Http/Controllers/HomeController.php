<?php

namespace App\Http\Controllers;

use web;
use App\Models\berita;
use App\Models\border;
use App\Models\ekskul;
use App\Models\fasilitas;
use App\Models\footer;
use App\Models\fotohome;
use App\Models\kompetensikeahlian;
use App\Models\kontak;
use App\Models\medsos;
use App\Models\pendidik;
use App\Models\slider;
use App\Models\sambutanks;
use App\Models\tenaga;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $pendidik = pendidik::count();
        $tenaga = tenaga::count();
        $jurusan = kompetensikeahlian::count();
        $fasilitas = fasilitas::count();
        $kegiatan = fotohome::latest('created_at')->get();
        $slider = slider::findorfail(1);
        $sambutan = sambutanks::first();
        $ekskul = ekskul::all();
        $border = border::first();
        $berita = berita::latest('created_at')->get();
        return view('web.home', compact('sambutan', 'ekskul', 'slider', 'border', 'berita', 'kegiatan', 'pendidik', 'tenaga', 'jurusan','fasilitas'));
    }

    public function footer()
    {

        $footer = footer::all();
        $kontak = kontak::first();
        $medsos = medsos::all();
        return view('footer.foot', compact('footer', 'kontak', 'medsos'));
    }
}
