<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\ekskul;
use App\Models\sambutanks;
use Illuminate\Http\Request;

class SambutanksController extends Controller
{
    public function sambutanks()
    {

        $data = sambutanks::all();

        return view('sambutanks.sambutanks', compact('data'));
    }
    public function sambutan()

    {
        $berita = berita::all();
        $ekskul = ekskul::first();
        $data = sambutanks::findorfail(1);
        return view('sambutanks.sambutan', compact('data','ekskul','berita'));
    }

    public function tampildatasambutanks($id)
    {

        $data = sambutanks::find($id);
        return view('sambutanks.tampildatasambutanks', compact('data'));
    }
    public function updatedatasambutanks(request $request, $id)
    {
        $data = sambutanks::findorfail($id);
        $filename = $data->foto;

        $data->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
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
        return redirect()->route('sambutanks')->with('success', 'Data Berhasil Di Update');
    }

}
