<?php

namespace App\Http\Controllers;

use App\Models\tiga;
use Illuminate\Http\Request;

class TigaController extends Controller
{
    public function tigas()
        {
            $data = tiga::all();
            return view('tigas.tigas', compact('data'));
        }
        public function tambahdatatigas()
        {
            return view('tigas.tambahdatatigas');
        }
        public function insertdatatigas(Request $request)
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
            $data = tiga::create([
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

            return redirect()->route('tigas')->with('success', 'Data Berhasil Di Tambahkan');
        }
        public function tampildatatigas($id)
        {
    
            $data = tiga::find($id);
            return view('tigas.tampildatatigas', compact('data'));
        }
        public function updatedatatigas(request $request, $id)
        {
            $data = tiga::find($id);
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
            
            return redirect()->route('tigas')->with('success', 'Data Berhasil Di Update');
        }
        public function deletetigas($id)
        {
    
            $data = tiga::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');
    
        }
}
