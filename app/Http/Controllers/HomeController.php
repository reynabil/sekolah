<?php

namespace App\Http\Controllers;

use web;
use App\Models\berita;
use App\Models\border;
use App\Models\ekskul;
use App\Models\footer;
use App\Models\kontak;
use App\Models\medsos;
use App\Models\slider;
use App\Models\sambutanks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $slider = slider::first();
        $data = berita::all();
        $sambutan = sambutanks::first();
        $ekskul = ekskul::all();
        $border = border::first();
        $berita = berita::all();
        return view('web.home', compact('sambutan', 'data', 'ekskul', 'slider', 'border','berita'));
    }

    public function footer()
    {

        $footer = footer::all();
        $kontak = kontak::first();
        $medsos = medsos::all();
        return view('footer.foot',compact('footer','kontak','medsos'));
    }


}
