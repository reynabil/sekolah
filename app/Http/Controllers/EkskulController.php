<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\ekskul;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class EkskulController extends Controller
{
    public function ekskul()
    {
        $data = ekskul::all();
        return view('ekskul.ekskul', compact('data'));
    }
    public function ekstra()
    {
        $berita = berita::all();
        $data = ekskul::all();
        return view('ekskul.ekstra', compact('data','berita'));
    }
    public function detail($id)
    {
        $berita = berita::all();
        $each = ekskul::all();
        $cari = ekskul::findorfail($id);
        $data = ekskul::first();
        return view('ekskul.detail', compact('data','cari','each','berita'));
    }
    public function tambahdataekskul()
    {
        return view('ekskul.tambahdata');
    }
    public function insertdataekskul(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
            'judul' => 'required',
            'fotod' => 'required',
            'deskripsi' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'judul.required' => 'Harus Diisi',
            'fotod.required' => 'Harus Diisi',
            'deskripsi.required' => 'Harus Diisi',
        ]);
        $data = ekskul::create([
            'foto' => $request->foto,
            'judul' => $request->judul,
            'fotod' => $request->fotod,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('fotod')) {
            $request->file('fotod')->move('fotosekolah/', $request->file('fotod')->getClientOriginalName());
            $data->fotod = $request->file('fotod')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('ekskul')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildataekskul($id)
    {

        $data = ekskul::find($id);
        return view('ekskul.tampildata', compact('data'));
    }
    public function updatedataekskul(request $request, $id)
    {
        $data = ekskul::find($id);
        $data->update([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('fotod')) {
            $request->file('fotod')->move('fotosekolah/', $request->file('fotod')->getClientOriginalName());
            $data->fotod = $request->file('fotod')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('ekskul')->with('success', 'Data Berhasil Di Update');
    }
    public function deleteekskul($id)
    {

        $data = ekskul::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
