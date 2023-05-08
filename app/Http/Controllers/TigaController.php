<?php

namespace App\Http\Controllers;

use App\Models\tiga;
use App\Models\berita;
use App\Models\sosmed;
use Illuminate\Http\Request;

class TigaController extends Controller
{
    public function tigas()
    {
        $data = tiga::paginate(3);
        return view('tigas.tigas', compact('data'));
    }
    public function ajarxii()
    {
        $data = tiga::paginate(3);
        $berita = berita::latest('created_at')->get();
        $sosmed = sosmed::all();
        return view('tigas.ajarXII',compact('data','berita','sosmed'));
    }
    public function tambahdatatigas()
    {
        return view('tigas.tambahdatatigas');
    }
    public function insertdatatigas(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'bahanajar' => 'required',
            'kelas' => 'required',
            'link' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
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
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotobahanajar/',$filename);
            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('tigas')->with('success', 'Bahan Ajar Berhasil Di Tambahkan');
    }
    public function tampildatatigas($id)
    {

        $data = tiga::findorfail($id);
        return view('tigas.tampildatatigas', compact('data'));
    }
    public function updatedatatigas(request $request, $id)
    {
        $data = tiga::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'bahanajar' => $request->bahanajar,
            'kelas' => $request->kelas,
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

        return redirect()->route('tigas')->with('success', 'Bahan Ajar Berhasil Di Update');
    }
    public function deletetigas($id)
    {

        $data = tiga::findorfail($id);
        if (file_exists(public_path('fotobahanajar/'.$data->foto))) {
            unlink(public_path('fotobahanajar/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Bahan Ajar berhasil dihapus');
    }
}
