<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\ekskul;
use App\Models\sosmed;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class EkskulController extends Controller
{
    public function ekskul()
    {
        $data = ekskul::paginate(3);
        return view('ekskul.ekskul', compact('data'));
    }
    public function ekstra()
    {
        $berita = berita::all();
        $data = ekskul::paginate(6);
        $sosmed = sosmed::all();
        return view('ekskul.ekstra', compact('data','berita','sosmed'));
    }
    public function detail($id)
    {
        $berita = berita::all();
        $each = ekskul::all();
        $cari = ekskul::findorfail($id);
        $data = ekskul::first();
        $sosmed = sosmed::all();
        return view('ekskul.detail', compact('data','cari','each','berita','sosmed'));
    }
    public function tambahdataekskul()
    {
        return view('ekskul.tambahdata');
    }
    public function insertdataekskul(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'deskripsi' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'judul.required' => 'Harus Diisi',
            'deskripsi.required' => 'Harus Diisi',
        ]);
        $data = ekskul::create([
            'foto' => $request->foto,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotoekskul/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('ekskul')->with('success', 'Ekstrakurikuler Berhasil Di Tambahkan');
    }
    public function tampildataekskul($id)
    {

        $data = ekskul::findorfail($id);
        return view('ekskul.tampildata', compact('data'));
    }
    public function updatedataekskul(request $request, $id)
    {
        $data = ekskul::findorfail($id);
        $filename = $data->foto;
        $data->update([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotoekskul/' . $data->foto))) {
                unlink(public_path('fotoekskul/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotoekskul/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('ekskul')->with('success', 'Ekstrakurikuler Berhasil Di Update');
    }
    public function deleteekskul($id)
    {

        $data = ekskul::findorfail($id);
        if (file_exists(public_path('fotoekskul/'.$data->foto))) {
            unlink(public_path('fotoekskul/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Ekstrakurikuler berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
