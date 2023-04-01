<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\strukturbkk;
use Illuminate\Http\Request;

class StrukturbkkController extends Controller
{
    public function struktur()
    {
        $data = strukturbkk::all();
        return view('strukturbkk.struktur',compact('data'));
    }
    public function strukturorganisasibkk()
    {
        $data = strukturbkk::findorfail(1);
        $berita = berita::all();
        return view('strukturbkk.strukturoganisasibkk',compact('data','berita'));
    }
    public function tampilstrukturbkk($id)
    {
        $data = strukturbkk::findorfail($id);
        return view('strukturbkk.tampilstrukturbkk',compact('data'));
    }
    public function updatestrukturbkk(Request $request,$id)
    {
        $data = strukturbkk::findorfail($id);
        $filename = $data->foto_struktur;
        $data->update([

        ]);
        if ($request->hasFile('foto_struktur')) {
            // hapus file lama jika ada
            if ($data->foto_struktur && file_exists(public_path('fotosekolah/' . $data->foto_struktur))) {
                unlink(public_path('fotosekolah/' . $data->foto_struktur));
            }

            $random = $request->file('foto_struktur')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto_struktur')->move('fotosekolah/',$filename);
        }

        $data->foto_struktur = $filename;
        $data->save();
        return redirect()->route('struktur')->with('success','Data Berhasil di update');
    }
}
