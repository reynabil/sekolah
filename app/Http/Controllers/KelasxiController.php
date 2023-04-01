<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kelasxi;
use Illuminate\Http\Request;

class KelasxiController extends Controller
{
    public function kelasxis()
    {
        $data = kelasxi::paginate(3);
        return view('kelasxis.kelasxis', compact('data'));
    }
    public function ajarxi()
    {
        $data = kelasxi::paginate(3);
        $berita = berita::latest('created_at')->get();
        return view('kelasxis.ajarXI',compact('data','berita'));
    }
    public function tambahdatakelasxis()
    {
        return view('kelasxis.tambahdatakelasxis');
    }
    public function insertdatakelasxis(Request $request)
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
        $data = kelasxi::create([
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

        return redirect()->route('kelasxis')->with('success', 'Bahan Ajar Berhasil Di Tambahkan');
    }
    public function tampildatakelasxis($id)
    {

        $data = kelasxi::find($id);
        return view('kelasxis.tampildatakelasxis', compact('data'));
    }
    public function updatedatakelasxis(request $request, $id)
    {
        $data = kelasxi::find($id);
        $filename = $data->foto;
        $data->update([
            'bahanajar' => $request->bahanajar,
            'kelas' => $request->kelas,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
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

        return redirect()->route('kelasxis')->with('success', 'Bahan Ajar Berhasil Di Update');
    }
    public function deletekelasxis($id)
    {

        $data = kelasxi::findorfail($id);
        if (file_exists(public_path('fotobahanajar/'.$data->foto))) {
            unlink(public_path('fotobahanajar/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Bahan Ajar berhasil dihapus');
    }
}
