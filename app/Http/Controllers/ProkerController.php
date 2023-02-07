<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\proker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProkerController extends Controller
{
    public function proker()
    {
        $data = proker::all();
        return view('proker.proker', compact('data'));
    }
    public function program()
    {

        $data = proker::paginate(2);
        $berita = berita::all();
        return view('proker.program', compact('berita', 'data'));
    }

    public function tambahproker()
    {
        $data = proker::all();
        return view('proker.tambahdata', compact('data'));
    }

    public function insertproker(Request $request)
    {
        $this->validate($request, [
            'tujuan' => 'required',
            'kegiatan' => 'required',
            'indikator' => 'required',
            'penanggungjk' => 'required',
            'batas_waktu' => 'required',
        ], [
            'tujuan.required' => 'Harus Diisi',
            'kegiatan.required' => 'Harus Diisi',
            'indikator.required' => 'Harus Diisi',
            'penanggungjk.required' => 'Harus Diisi',
            'batas_waktu.required' => 'Harus Diisi',
        ]);
        $data = proker::create([
            'tujuan' => $request->tujuan,
            'kegiatan' => $request->kegiatan,
            'indikator' => $request->indikator,
            'penanggungjk' => $request->penanggungjk,
            'batas_waktu' => $request->batas_waktu,
        ]);
        return redirect()->route('proker')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampilproker($id)
    {
        $data = proker::findorfail($id);
        return view('proker.tampildata', compact('data'));
    }
}
