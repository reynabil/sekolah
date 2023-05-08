<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sosmed;
use App\Models\sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function sekolahs()
    {
        $data = sekolah::paginate(6);
        return view('sekolahs.sekolahs', compact('data'));
    }
    public function phbn()
    {
        $data = sekolah::all()->sortBy('tanggal');
        $sosmed = sosmed::all();
        $berita = berita::all();
        return view('sekolahs.phbn',compact('data','berita','sosmed'));
    }
    public function tambahdatasekolahs()
    {
        return view('sekolahs.tambahdatasekolahs');
    }
    public function insertdatasekolahs(Request $request)
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
        $data = sekolah::create([
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('sekolahs')->with('success', 'Kegiatan Berhasil Di Tambahkan');
    }
    public function tampildatasekolahs($id)
    {

        $data = sekolah::find($id);
        return view('sekolahs.tampildatasekolahs', compact('data'));
    }
    public function updatedatasekolahs(request $request, $id)
    {
        $data = sekolah::find($id);
        $data->update([
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
            'keterangan' => $request->keterangan,
        ]);


        return redirect()->route('sekolahs')->with('success', 'Kegiatan Berhasil Di Update');
    }
    public function deletesekolahs($id)
    {

        $data = sekolah::findorfail($id);
        $data->delete();
        return back()->with('success', 'Kegiatan berhasil dihapus');
    }
}
