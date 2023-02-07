<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        $berita = berita::all();
        $data = berita::all();
        return view('berita.berita' ,compact('data','berita'));
    }
    public function selengkapnya($id)
    {
        $data = berita::all();
        $berita = berita::first();
        $each = berita::findorfail($id);
        return view('berita.Selengkapnya',compact('data','berita','each'));
    }
    public function news()
    {
        $data = berita::all();
        return view('berita.news',compact('data'));
    }
    public function tambahberita()
    {
        return view('berita.tambahberita');
    }
    public function insertberita(request $request)
    {

            $this->validate($request, [
                'foto' => 'required',
                'judul' => 'required',
                'deskripsi' => 'required',
            ], [
                'foto.required' => 'Harus Diisi',
                'judul.required' => 'Harus Diisi',
                'deskripsi.required' => 'Harus Diisi',
            ]);
            $data = berita::create([

                'foto' => $request->foto,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('news')->with('success', 'Data Berhasil Di Tambahkan');

    }
    public function tampildata($id)
    {
        $data = berita::find($id);
        return view('berita.tampilberita',compact('data'));
    }

    public function updateberita(request $request, $id)
    {
        $data = berita::find($id);
        $data->update([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('news')->with('success', 'Data Berhasil Di Update');
    }
    public function deleteberita($id)
    {

        $data = berita::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
