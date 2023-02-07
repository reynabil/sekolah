<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function peserta()
    {
        $data = peserta::all();
        return view('pesertas.pesertas', compact('data'));
    }
    public function tambahdatapeserta()
    {
        return view('pesertas.tambahdatapesertas');
    }
    public function insertdatapeserta(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
        ]);
        $data = peserta::create([
            'foto' => $request->foto,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pesertas')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildatapeserta($id)
    {

        $data = peserta::find($id);
        return view('pesertas.tampildatapesertas', compact('data'));
    }
    public function updatedatapesertas(request $request, $id)
    {
        $data = peserta::find($id);
        $data->update([
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pesertas')->with('success', 'Data Berhasil Di Update');
    }
    public function deletepeserta($id)
    {

        $data = peserta::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data berhasil dihapus');

    }
}

