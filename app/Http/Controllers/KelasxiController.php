<?php

namespace App\Http\Controllers;
use App\Models\kelasxi;
use Illuminate\Http\Request;

class KelasxiController extends Controller
{
    public function kelasxis()
        {
            $data = kelasxi::all();
            return view('kelasxis.kelasxis', compact('data'));
        }
        public function tambahdatakelasxis()
        {
            return view('kelasxis.tambahdatakelasxis');
        }
        public function insertdatakelasxis(Request $request)
        {
            $this->validate($request, [
                'foto' => 'required',
                'bahanajar' => 'required',
                'kelas' => 'required',
                'link' => 'required',
            ], [
                'foto.required' => 'Harus Diisi',
                'bahanajar.required' => 'Harus Diisi',
                'kelas.required' => 'Harus Diisi',
                'link.required' => 'Harus Diisi',
            ]);
            $data = kelasxi::create([
                'foto' => $request->foto,
                'bahanajar' => $request->bahanajar,
                'kelas' => $request->kelas,
                'link' => $request->link,
            ]);
            
            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('kelasxis')->with('success', 'Data Berhasil Di Tambahkan');
        }
        public function tampildatakelasxis($id)
        {
    
            $data = kelasxi::find($id);
            return view('kelasxis.tampildatakelasxis', compact('data'));
        }
        public function updatedatakelasxis(request $request, $id)
        {
            $data = kelasxi::find($id);
            $data->update([
                'bahanajar' => $request->bahanajar,
                'kelas' => $request->kelas,
                'link' => $request->link,
            ]);

            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            
            return redirect()->route('kelasxis')->with('success', 'Data Berhasil Di Update');
        }
        public function deletekelasxis($id)
        {
    
            $data = kelasxi::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');
    
        }
}
