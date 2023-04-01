<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\galeri;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver;

class GaleriController extends Controller
{
    public function galeri()
    {
        $data = galeri::paginate(6);
        return view('galeri.galeri', compact('data'));
    }
    public function gallery()
    {
        $data = galeri::paginate(12);
        $berita = berita::all();
        return view('galeri.gallery', compact('berita', 'data'));
    }
    public function tambahgaleri()
    {
        return view('galeri.tambahdatagaleri');
    }
    public function insertgaleri(request $request)
    {

        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'judul' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'judul.required' => 'Harus Diisi',
        ]);
        $data = galeri::create([

            'foto' => $request->foto,
            'judul' => $request->judul,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotogaleri/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('galeri')->with('success', 'Foto Berhasil Di Tambahkan');
    }

    public function tampilgaleri($id)
    {
        $data = galeri::findorfail($id);
        return view('galeri.tampilgaleri', compact('data'));
    }

    public function updategaleri(request $request, $id)
    {
        $data = galeri::find($id);
        $filename = $data->foto;
        $data->update([

            'judul' => $request->judul,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotogaleri/' . $data->foto))) {
                unlink(public_path('fotogaleri/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotogaleri/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('galeri')->with('success', 'Foto Berhasil Di Update');
    }
    public function deletegaleri($id)
    {
        $data = galeri::findorfail($id);
        if (file_exists(public_path('fotogaleri/'.$data->foto))) {
            unlink(public_path('fotogaleri/'.$data->foto));
        }
        $data->delete();
        return back()->with('success','Foto berhasil di delete');

    }
}
