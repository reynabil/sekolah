<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kelasx;
use Illuminate\Http\Request;

class KelasxController extends Controller
{
    public function kelasxes()
    {
        $data = kelasx::paginate(3);
        return view('kelasxes.kelasxes', compact('data'));
    }
    public function ajarx()
    {
        $data = kelasx::paginate(3);
        $berita = berita::latest('created_at')->get();
        return view('kelasxes.ajarx',compact('berita','data'));
    }
    public function tambahdatakelasxes()
    {
        return view('kelasxes.tambahdatakelasxes');
    }
    public function insertdatakelasxes(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'bahanajar' => 'required',
            'kelas' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'bahanajar.required' => 'Harus Diisi',
            'kelas.required' => 'Harus Diisi',
            'deskripsi.required' => 'Harus Diisi',
            'link.required' => 'Harus Diisi',
        ]);
        $data = kelasx::create([
            'foto' => $request->foto,
            'bahanajar' => $request->bahanajar,
            'kelas' => $request->kelas,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotobahanajar/',$filename);
            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('kelasxes')->with('success', 'Bahan Ajar Berhasil Di Tambahkan');
    }
    public function tampildatakelasxes($id)
    {

        $data = kelasx::find($id);
        return view('kelasxes.tampildatakelasxes', compact('data'));
    }
    public function updatedatakelasxes(request $request, $id)
    {
        $data = kelasx::find($id);
        $filename = $data->foto;
        $data->update([
            'bahanajar' => $request->bahanajar,
            'kelas' => $request->kelas,
            'deskripsi' => $request->deskripsi,

        ]);

        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotobahanajar/' . $data->foto))) {
                unlink(public_path('fotobahanajar/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotobahanajar/',$filename);
        }

        $data->foto = $filename;
        $data->save();

        return redirect()->route('kelasxes')->with('success', 'Bahan Ajar Berhasil Di Update');
    }
    public function deletekelasxes($id)
    {

        $data = kelasx::findorfail($id);
        if (file_exists(public_path('fotobahanajar/'.$data->foto))) {
            unlink(public_path('fotobahanajar/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Bahan Ajar berhasil dihapus');
    }
}
