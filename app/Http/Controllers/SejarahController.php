<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sejarah;
use App\Models\perkembangan;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function sejarah()
    {
        $berita = berita::all();
        $perkembangan = perkembangan::all();
        $data = sejarah::first();
        return view('sejarah.sejarah',compact('data','perkembangan','berita'));
    }
    public function history()
    {
        $data = sejarah::all();
        $perkembangan = perkembangan::all();
        return view('sejarah.history',compact('perkembangan','data'));
    }
    public function tambahdataperkembangan()
    {
        return view('sejarah.tambahdata');
    }
    public function insertdataperkembangan(Request $request)
    {
        $this->validate($request, [
            'tahun' => 'required',
            'judul' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ], [
            'tahun.required' => 'Harus Diisi',
            'judul.required' => 'Harus Diisi',
            'foto.required' => 'Harus Diisi',
            'deskripsi.required' => 'Harus Diisi',
        ]);
        $perkembangan = perkembangan::create([
            'tahun' => $request->tahun,
            'judul' => $request->judul,
            'foto' => $request->foto,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $perkembangan->foto = $request->file('foto')->getClientOriginalName();
            $perkembangan->save();
        }
        return redirect()->route('history')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildataperkembangan($id)
    {

        $perkembangan = perkembangan::find($id);
        return view('sejarah.tampildataperkembangan', compact('perkembangan'));
    }
    public function updatedataperkembangan(request $request, $id)
    {
        $perkembangan = perkembangan::find($id);
        $perkembangan->update([

            'tahun' => $request->tahun,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $perkembangan->foto = $request->file('foto')->getClientOriginalName();
            $perkembangan->save();
        }
        return redirect()->route('history')->with('success', 'Data Berhasil Di Update');
    }
    public function deleteperkembangan($id)
    {

        $perkembangan = perkembangan::findorfail($id);
        $perkembangan->delete();
        return back()->with('info', 'Data berhasil dihapus');
    }
    public function tampildatasejarah($id)
    {
        $data = sejarah::find($id);
        return view('sejarah.tampildata',compact('data'));
    }
    public function updatedatasejarah(request $request, $id)
    {
        $data = sejarah::find($id);
        $data->update([

            'sejarah' => $request->sejarah,
        ]);
        if ($request->hasFile('fotos')) {
            $request->file('fotos')->move('fotosekolah/', $request->file('fotos')->getClientOriginalName());
            $data->fotos = $request->file('fotos')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('history')->with('success', 'Data Berhasil Di Update');
    }
}
