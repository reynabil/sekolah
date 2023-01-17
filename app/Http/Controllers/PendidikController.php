<?php

namespace App\Http\Controllers;

use App\Models\pendidik;
use Illuminate\Http\Request;

class PendidikController extends Controller
    {
        public function pendidiks()
        {
            $data = pendidik::all();
            return view('pendidiks.pendidiks', compact('data'));
        }
        public function tambahdatapendidiks()
        {
            return view('pendidiks.tambahdatapendidiks');
        }
        public function insertdatapendidiks(Request $request)
        {
            $this->validate($request, [
                'foto' => 'required',
                'nip' => 'required',
                'nama' => 'required',
                'pangkat' => 'required',
                'tugas' => 'required',
            ], [
                'foto.required' => 'Harus Diisi',
                'nip.required' => 'Harus Diisi',
                'nama.required' => 'Harus Diisi',
                'pangkat.required' => 'Harus Diisi',
                'tugas.required' => 'Harus Diisi',
            ]);
            $data = pendidik::create([
                'foto' => $request->foto,
                'nip' => $request->nip,
                'nama' => $request->nama,
                'pangkat' => $request->pangkat,
                'tugas' => $request->tugas,
            ]);
            
            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('pendidiks')->with('success', 'Data Berhasil Di Tambahkan');
        }
        public function tampildatapendidiks($id)
        {
    
            $data = pendidik::find($id);
            return view('pendidiks.tampildatapendidiks', compact('data'));
        }
        public function updatedatapendidiks(request $request, $id)
        {
            $data = pendidik::find($id);
            $data->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'pangkat' => $request->pangkat,
                'tugas' => $request->tugas,
            ]);

            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            
            return redirect()->route('pendidiks')->with('success', 'Data Berhasil Di Update');
        }
        public function deletependidiks($id)
        {
    
            $data = pendidik::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');
    
        }
    }
