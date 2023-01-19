<?php

namespace App\Http\Controllers;
use App\Models\sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function sekolahs()
        {
            $data = sekolah::all();
            return view('sekolahs.sekolahs', compact('data'));
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

            return redirect()->route('sekolahs')->with('success', 'Data Berhasil Di Tambahkan');
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

            
            return redirect()->route('sekolahs')->with('success', 'Data Berhasil Di Update');
        }
        public function deletesekolahs($id)
        {
    
            $data = sekolah::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');
    
        }
}
