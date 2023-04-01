<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\ppdb;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PpdbController extends Controller
{
    public function ppdb()
    {
        $data = ppdb::all();
        return view('ppdb.ppdb',compact('data'));
    }
    public function kegiatanppdb()
    {
        $data = ppdb::findorfail(1);
        $berita  = berita::all();
        return view('ppdb.kegiatanppdb',compact('berita','data'));
    }

    public function tampildatappdb($id)
    {
        $data = ppdb::findorfail($id);
        return view('ppdb.tampildatappdb',compact('data'));
    }
    public function updatedatappdb(Request $request, $id)
    {
        $data = ppdb::findorfail($id);
        $filename = $data->foto;
        $data->update([

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
        return redirect()->route('ppdb')->with('success','data berhasil di update');
    }

}
