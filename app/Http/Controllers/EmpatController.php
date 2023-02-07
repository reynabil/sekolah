<?php

namespace App\Http\Controllers;
use App\Models\empat;
use Illuminate\Http\Request;

class EmpatController extends Controller
{
    public function empats()
        {
            $data = empat::all();
            return view('empats.empats', compact('data'));
        }
        public function tambahdataempats()
        {
            return view('empats.tambahdataempats');
        }
        public function insertdataempats(Request $request)
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
            $data = empat::create([
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

            return redirect()->route('empats')->with('success', 'Data Berhasil Di Tambahkan');
        }
        public function tampildataempats($id)
        {
    
            $data = empat::find($id);
            return view('empats.tampildataempats', compact('data'));
        }
        public function updatedataempats(request $request, $id)
        {
            $data = empat::find($id);
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
            
            return redirect()->route('empats')->with('success', 'Data Berhasil Di Update');
        }
        public function deleteempats($id)
        {
    
            $data = empat::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');
    
        }
}
