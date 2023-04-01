<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\visimisibkk;
use Illuminate\Http\Request;

class VisimisibkkController extends Controller
{
    public function visimisibkk()
    {
        $data = visimisibkk::findorfail(1);
        $berita = berita::all();
        return view('visimisibkk.visimisibkk', compact('berita', 'data'));
    }
    public function visimisib()
    {
        $data = visimisibkk::all();
        return view('visimisibkk.visimisi', compact('data'));
    }
    public function tampilvisimisibkk($id)
    {
        $data = visimisibkk::findorfail($id);
        return view('visimisibkk.tampilvisimisibkk', compact('data'));
    }
    public function updatevisimisibkk(Request $request, $id)
    {
        $data = visimisibkk::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'visibkk' => $request->visibkk,
            'misibkk' => $request->misibkk,
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
        return redirect()->route('visimisib')->with('success','Visi Misi berhasil di update');
    }
}
