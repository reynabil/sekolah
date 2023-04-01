<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sejarah;
use App\Models\perkembangan;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function sejarah()
    {
        $berita = berita::all();
        $perkembangan = perkembangan::all();
        $data = sejarah::findorfail(1);
        return view('sejarah.sejarah',compact('data','perkembangan','berita'));
    }
    public function history()
    {
        $data = sejarah::all();
        $perkembangan = perkembangan::paginate(6);
        return view('sejarah.history',compact('perkembangan','data'));
    }
    public function tambahdataperkembangan()
    {
        return view('sejarah.tambahdata');
    }
    public function insertdataperkembangan(Request $request)
    {
        $this->validate($request, [
            'tahun' => 'required',
            'judul' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi' => 'required',
        ], [
            'tahun.required' => 'Harus Diisi',
            'judul.required' => 'Harus Diisi',
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG  ',
            'deskripsi.required' => 'Harus Diisi',
        ]);
        $perkembangan = perkembangan::create([
            'tahun' => $request->tahun,
            'judul' => $request->judul,
            'foto' => $request->foto,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $perkembangan->foto = $request->file('foto')->getClientOriginalName();
            $perkembangan->save();
        }
        return redirect()->route('history')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildataperkembangan($id)
    {

        $perkembangan = perkembangan::find($id);
        return view('sejarah.tampildataperkembangan', compact('perkembangan'));
    }
    public function updatedataperkembangan(request $request, $id)
    {
        $perkembangan = perkembangan::find($id);
        $filename = $perkembangan->foto;
        $perkembangan->update([

            'tahun' => $request->tahun,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($perkembangan->foto && file_exists(public_path('fotosekolah/' . $perkembangan->foto))) {
                unlink(public_path('fotosekolah/' . $perkembangan->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotosekolah/',$filename);
        }
        $perkembangan->foto = $filename;
        $perkembangan->save();
        return redirect()->route('history')->with('success', 'Data Berhasil Di Update');
    }
    public function deleteperkembangan($id)
    {

        $perkembangan = perkembangan::findorfail($id);
        $perkembangan->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
    public function tampildatasejarah($id)
    {
        $data = sejarah::find($id);
        return view('sejarah.tampildata',compact('data'));
    }
    public function updatedatasejarah(request $request, $id)
    {
        $data = sejarah::findorfail($id);
        $filename = $data->fotos;
        $data->update([
            'sejarah' => $request->sejarah,
        ]);
        if ($request->hasFile('fotos')) {
            // hapus file lama jika ada
            if ($data->fotos && file_exists(public_path('fotosekolah/' . $data->fotos))) {
                unlink(public_path('fotosekolah/' . $data->fotos));
            }

            $random = $request->file('fotos')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('fotos')->move('fotosekolah/',$filename);
        }
        $data->fotos = $filename;
        $data->save();

        return redirect()->route('history')->with('success', 'Data Berhasil Di Update');
    }
}
