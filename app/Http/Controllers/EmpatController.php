<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\empat;
use Illuminate\Http\Request;

class EmpatController extends Controller
{
    public function empats()
    {
        $data = empat::all();
        return view('empats.empats', compact('data'));
    }
    public function ajarxiiika()
    {
        $berita = berita::latest('created_at')->get();
        $data = empat::paginate(3);
        return view('empats.ajarXIIIKA',compact('data','berita'));
    }
    public function tambahdataempats()
    {
        return view('empats.tambahdataempats');
    }
    public function insertdataempats(Request $request)
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
        $data = empat::create([
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
        return redirect()->route('empats')->with('success', 'Bahan Ajar Berhasil Di Tambahkan');
    }
    public function tampildataempats($id)
    {

        $data = empat::findorfail($id);
        return view('empats.tampilempats', compact('data'));
    }
    public function updatedataempats(request $request, $id)
    {
        $data = empat::findorfail($id);
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

        return redirect()->route('empats')->with('success', 'Bahan Ajar Berhasil Di Update');
    }
    public function deleteempats($id)
    {

        $data = empat::findorfail($id);
        if (file_exists(public_path('fotobahanajar/'.$data->foto))) {
            unlink(public_path('fotobahanajar/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Bahan Ajar berhasil dihapus');
    }
}
