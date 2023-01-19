<?php

namespace App\Http\Controllers;
use App\Models\kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatans()
        {
            $data = kegiatan::all();
            return view('kegiatans.kegiatans', compact('data'));
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

            return redirect()->route('kegiatans')->with('success', 'Data Berhasil Di Tambahkan');
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

            
            return redirect()->route('kegiatans')->with('success', 'Data Berhasil Di Update');
        }
        public function deletekegiatans($id)
        {
    
            $data = kegiatan::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');
    
        }
}
