<?php

namespace App\Http\Controllers;

use App\Models\duabelas;
use App\Models\peserta;
use App\Models\sebelas;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function peserta()
    {
        $data2 = duabelas::all()->sortBy('nama_kelas');
        $data1 = sebelas::all()->sortBy('nama_kelas');
        $data = peserta::all()->sortBy('nama_kelas');

        return view('pesertas.pesertas', compact('data','data1','data2'));
    }
    public function data($id)
    {
        $data1 = peserta::findorfail($id);
        $data = peserta::all();
        return view('pesertas.data',compact('data','data1'));
    }
    public function dataXI($id)
    {
        $data = sebelas::findorfail($id);
        return view('pesertas.dataXI',compact('data'));
    }
    public function dataXII($id)
    {
        $data = duabelas::findorfail($id);
        return view('pesertas.dataXII',compact('data'));
    }
    public function tambahdatapeserta()
    {
        return view('pesertas.tambahdatapesertas');
    }
    public function insertdatapeserta(Request $request)
    {
        $this->validate($request, [
            'nama_kelas' => 'required',
            'foto' => 'required',
            'jl' => 'required',
            'jp' => 'required',
            'jml' => 'required',
        ],[
            'nama_kelas.required' => 'Harus Diisi',
            'foto.required' => 'Harus Diisi',
            'jl.required' => 'Harus Diisi',
            'jp.required' => 'Harus Diisi',
            'jml.required' => 'Harus Diisi',
        ]);
        $data = peserta::create([
            'nama_kelas' => $request->nama_kelas,
            'foto' => $request->foto,
            'jp' => $request->jp,
            'jl' => $request->jl,
            'jml' => $request->jml,
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

