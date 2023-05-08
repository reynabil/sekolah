<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sosmed;
use App\Models\identitas;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    public function identitas()
    {
        $data = identitas::all();
        return view('identitas.identity', compact('data'));
    }
    public function identity()
    {
        $berita = berita::all();
        $sosmed = sosmed::all();
        $data = identitas::findorfail(1);
        return view('identitas.identitas', compact('data', 'berita','sosmed'));
    }

    public function tampildataidentitas($id)
    {

        $data = identitas::findorfail($id);
        return view('identitas.tampildata', compact('data'));
    }
    public function updatedataidentitas(request $request, $id)
    {
        $data = identitas::findorfail($id);
        $filename = $data->fotos;
        $data->update([
            'bait1' => $request->bait1,
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

        return redirect()->route('identitas')->with('success', 'Identitas Sekolah Berhasil Di Update');
    }
}
