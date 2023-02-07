<?php

namespace App\Http\Controllers;
use App\Models\kelasx;
use Illuminate\Http\Request;

class KelasxController extends Controller
{
    public function kelasxes()
        {
            $data = kelasx::all();
            return view('kelasxes.kelasxes', compact('data'));
        }
        public function tambahdatakelasxes()
        {
            return view('kelasxes.tambahdatakelasxes');
        }
        public function insertdatakelasxes(Request $request)
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
            $data = kelasx::create([
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

            return redirect()->route('kelasxes')->with('success', 'Data Berhasil Di Tambahkan');
        }
        public function tampildatakelasxes($id)
        {
    
            $data = kelasx::find($id);
            return view('kelasxes.tampildatakelasxes', compact('data'));
        }
        public function updatedatakelasxes(request $request, $id)
        {
            $data = kelasx::find($id);
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
            
            return redirect()->route('kelasxes')->with('success', 'Data Berhasil Di Update');
        }
        public function deletekelasxes($id)
        {
    
            $data = kelasx::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');
    
        }
}
