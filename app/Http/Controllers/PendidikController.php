<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\pendidik;
use Illuminate\Http\Request;

class PendidikController extends Controller
    {
        public function pendidik()
        {
            $data = pendidik::all();
            return view('pendidiks.pendidiks', compact('data'));
        }
        public function teacher()
        {
            $berita = berita::all();
            $data = pendidik::all();
            return view('pendidiks.pendidik',compact('data','berita'));
        }
        public function tambahdatapendidik()
        {
            return view('pendidiks.tambahdatapendidiks');
        }
        public function insertdatapendidik(Request $request)
        {
            $this->validate($request, [
                'foto' => 'required',
                'nama' => 'required',
                'pangkat_gol' => 'required',
                'tugas' => 'required',
            ], [
                'foto.required' => 'Harus Diisi',
                'nama.required' => 'Harus Diisi',
                'pangkat_gol.required' => 'Harus Diisi',
                'tugas.required' => 'Harus Diisi',
            ]);
            $data = pendidik::create([
                'nama' => $request->nama,
                'pangkat_gol' => $request->pangkat_gol,
                'tugas' => $request->tugas,
            ]);

            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('pendidik')->with('success', 'Data Berhasil Di Tambahkan');
        }
        public function tampildatapendidik($id)
        {

            $data = pendidik::find($id);
            return view('pendidiks.tampildatapendidiks', compact('data'));
        }
        public function updatedatapendidik(request $request, $id)
        {
            $data = pendidik::find($id);
            $data->update([
                'nama' => $request->nama,
                'pangkat_gol' => $request->pangkat_gol,
                'tugas' => $request->tugas,
            ]);

            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('pendidik')->with('success', 'Data Berhasil Di Update');
        }
        public function deletependidik($id)
        {

            $data = pendidik::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');

        }
    }
