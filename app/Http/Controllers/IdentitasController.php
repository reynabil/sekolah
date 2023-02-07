<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\identitas;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    public function identitas()
    {
        $data = identitas::all();
        return view('identitas.identity', compact('data'));
    }
    public function identity()
    {
        $berita = berita::all();
        $data = identitas::first();
        return view('identitas.identitas', compact('data','berita'));
    }
    public function tambahdatapendidiks()
    {
        return view('pendidiks.tambahdatapendidiks');
    }
    // public function insertdatapendidiks(Request $request)
    // {
    //     $this->validate($request, [
    //         'foto' => 'required',
    //         'nip' => 'required',
    //         'nama' => 'required',
    //         'pangkat' => 'required',
    //         'tugas' => 'required',
    //     ], [
    //         'foto.required' => 'Harus Diisi',
    //         'nip.required' => 'Harus Diisi',
    //         'nama.required' => 'Harus Diisi',
    //         'pangkat.required' => 'Harus Diisi',
    //         'tugas.required' => 'Harus Diisi',
    //     ]);
    //     $data = identitas::create([
    //         'foto' => $request->foto,
    //         'nip' => $request->nip,
    //         'nama' => $request->nama,
    //         'pangkat' => $request->pangkat,
    //         'tugas' => $request->tugas,
    //     ]);

    //     if ($request->hasFile('foto')) {
    //         $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
    //         $data->foto = $request->file('foto')->getClientOriginalName();
    //         $data->save();
    //     }

    //     return redirect()->route('pendidiks')->with('success', 'Data Berhasil Di Tambahkan');
    // }
    public function tampildataidentitas($id)
    {

        $data = identitas::find($id);
        return view('identitas.tampildata', compact('data'));
    }
    public function updatedataidentitas(request $request, $id)
    {
        $data = identitas::find($id);
        $data->update([
            'bait1' => $request->bait1,
        ]);
        if ($request->hasFile('fotos')) {
            $request->file('fotos')->move('fotosekolah/', $request->file('fotos')->getClientOriginalName());
            $data->fotos = $request->file('fotos')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('fotokep')) {
            $request->file('fotokep')->move('fotosekolah/', $request->file('fotokep')->getClientOriginalName());
            $data->fotokep = $request->file('fotokep')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('identitas')->with('success', 'Data Berhasil Di Update');
    }
    public function deletependidiks($id)
    {

        $data = identitas::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data berhasil dihapus');
    }
}
