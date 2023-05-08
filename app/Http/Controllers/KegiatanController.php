<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sosmed;
use App\Models\kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatans()
    {
        $data = kegiatan::paginate(6);
        return view('kegiatans.kegiatans', compact('data'));
    }
    public function keagamaan()
    {
        $data = kegiatan::all()->sortBy('tanggal');
        $sosmed = sosmed::all();
        $berita = berita::all();
        return view('kegiatans.keagamaan',compact('berita','data','sosmed'));
    }
    public function tambahdatakegiatans()
    {
        return view('kegiatans.tambahdatakegiatans');
    }
    public function insertdatakegiatans(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'kegiatan' => 'required',
            'keterangan' => 'required',
        ], [
            'tanggal.required' => 'Harus Diisi',
            'kegiatan.required' => 'Harus Diisi',
            'keterangan.required' => 'Harus Diisi',
        ]);
        $data = kegiatan::create([
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
            'keterangan' => $request->keterangan,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotokegiatan/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('kegiatans')->with('success', 'Kegiatan Keagamaan Berhasil Di Tambahkan');
    }
    public function tampildatakegiatans($id)
    {

        $data = kegiatan::find($id);
        return view('kegiatans.tampildatakegiatans', compact('data'));
    }
    public function updatedatakegiatans(request $request, $id)
    {
        $data = kegiatan::find($id);
        $data->update([
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
            'keterangan' => $request->keterangan,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotokegiatan/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }


        return redirect()->route('kegiatans')->with('success', 'Kegiatan Keagamaan Berhasil Di Update');
    }
    public function deletekegiatans($id)
    {

        $data = kegiatan::findorfail($id);
        $data->delete();
        return back()->with('success', 'Kegiatan Keagamaan berhasil dihapus');
    }
}
