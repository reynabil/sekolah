<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kelulusan;
use Illuminate\Http\Request;

class KelulusanController extends Controller
{
    public function lulusan()
    {
        $data = kelulusan::paginate(6);
        return view('kelulusan.kelulusan', compact('data'));
    }

    public function kelulusan(Request $request)
    {
        if (isset($_GET['keyword'])) {
            $search = $_GET['keyword'];
            $data = kelulusan::where('kelas', 'LIKE', '%' . $search . '%')->orWhere('tanggal', 'LIKE', '%' . $search . '%')->paginate(6);
            $data->appends($request->all());
            $berita = berita::all();
        } else {
            $data = kelulusan::paginate(6);
            $berita = berita::all();
        }
        return view('kelulusan.infokelulusan', compact('data', 'berita'));
    }
    public function tambahkelulusan()
    {
        return view('kelulusan.tambahkelulusan');
    }
    public function insertdatakelulusan(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'tanggal' => 'required',
            'waktu' => 'required',
            'kelas' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'tanggal.required' => 'Harus Diisi',
            'waktu.required' => 'Harus Diisi',
            'kelas.required' => 'Harus Diisi',
        ]);
        $data = kelulusan::create([
            'foto' => $request->foto,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'kelas' => $request->kelas,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto')->move('fotokelulusan/', $filename);
            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('lulusan')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampilkelulusan($id)
    {
        $data = kelulusan::findorfail($id);
        return view('kelulusan.tampilinfokelulusan', compact('data'));
    }
    public function updatekelulusan(Request $request, $id)
    {
        $data = kelulusan::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotokelulusan/' . $data->foto))) {
                unlink(public_path('fotokelulusan/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto')->move('fotokelulusan/', $filename);
        }

        $data->foto = $filename;
        $data->save();

        return redirect()->route('lulusan')->with('success', 'data berhasil di update');
    }
    public function deletekelulusan($id)
    {
        $data = kelulusan::findorfail($id);
        if (file_exists(public_path('fotokelulusan/' . $data->foto))) {
            unlink(public_path('fotokelulusan/' . $data->foto));
        }
        $data->delete();
        return back()->with('success', 'data berhasil di delete');
    }
}
