<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak()
    {
        $data = kontak::all();
        return view('kontak.kontak',compact('data'));
    }
    public function contact()
    {
        $berita = berita::all();
        return view('kontak.contact',compact('berita'));
    }
    public function insertpesan(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ],[
            'nama.required' => 'harus di isi',
            'email.required' => 'harus di isi',
            'pesan.required' => 'harus di isi',
        ]);
        kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return back()->with('success','Pesan Telah Terkirim , Terimak Kasih Telah Menghubungi Kami');
    }
}
