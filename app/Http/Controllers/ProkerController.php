<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\proker;
use App\Models\sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProkerController extends Controller
{
    public function proker()
    {
        $data = proker::paginate(2);
        return view('proker.proker', compact('data'));
    }
    public function program()
    {

        $data = proker::paginate(2);
        $berita = berita::latest('created_at')->get();
        $sosmed = sosmed::all();
        return view('proker.program', compact('berita', 'data','sosmed'));
    }

    public function tambahproker()
    {
        $data = proker::all();
        return view('proker.tambahdata', compact('data'));
    }

    public function insertproker(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'tujuan' => 'required',
            'kegiatan' => 'required',
            'indikator' => 'required',
            'penanggungjk' => 'required',
            'batas_waktu' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'tujuan.required' => 'Harus Diisi',
            'kegiatan.required' => 'Harus Diisi',
            'indikator.required' => 'Harus Diisi',
            'penanggungjk.required' => 'Harus Diisi',
            'batas_waktu.required' => 'Harus Diisi',
        ]);
        $data = proker::create([
            'foto' => $request->foto,
            'tujuan' => $request->tujuan,
            'kegiatan' => $request->kegiatan,
            'indikator' => $request->indikator,
            'penanggungjk' => $request->penanggungjk,
            'batas_waktu' => $request->batas_waktu,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotoproker/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('proker')->with('success', 'Program Kerja Berhasil Di Tambahkan');
    }
    public function tampilproker($id)
    {
        $data = proker::findorfail($id);
        return view('proker.tampildata', compact('data'));
    }
    public function updateproker(Request $request ,$id)
    {
        $data = proker::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'tujuan' => $request->tujuan,
            'kegiatan' => $request->kegiatan,
            'indikator' => $request->indikator,
            'penanggungjk' => $request->penanggungjk,
            'batas_waktu' => $request->batas_waktu,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotoproker/' . $data->foto))) {
                unlink(public_path('fotoproker/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotoproker/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('proker')->with('success','Program Kerja berhasil di update');
    }
    public function deleteproker($id)
    {
        $data = proker::findorfail($id);
        if (file_exists(public_path('fotoproker/'.$data->foto))) {
            unlink(public_path('fotoproker/'.$data->foto));
        }
        $data->delete();
        return back()->with('success','Program Kerja berhasil di hapus');
    }
}
