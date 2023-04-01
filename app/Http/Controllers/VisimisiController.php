<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function visi()
    {
        $data = visimisi::all();
        return view('visimisi.visimisi', compact('data'));
    }
    public function visim()
    {
        $berita = berita::latest('created_at')->get();
        $data = visimisi::findorfail(1);
        return view('visimisi.visi',compact('data','berita'));
    }

    public function tampildatavisi($id)
    {

        $data = visimisi::find($id);
        return view('visimisi.tampildata', compact('data'));
    }
    public function updatedatavisi(request $request, $id)
    {
        $data = visimisi::findorfail($id);
        $filename = $data->foto;
        $data->update([

            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'komitmen' => $request->komitmen,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotosekolah/' . $data->foto))) {
                unlink(public_path('fotosekolah/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotosekolah/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('visi')->with('success', 'Visi Misi Berhasil Di Update');
    }

}
