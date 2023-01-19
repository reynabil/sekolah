<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function fasilitas()
    {
        $data = fasilitas::all();
        return view('fasilitas.fasilitas', compact('data'));
    }
    public function tambahdatafasilitas()
    {
        return view('fasilitas.tambahdata');
    }
    public function insertdatafasilitas(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required',
            'nama_ruang' => 'required',
            'jumlah' => 'required',
        ], [
            'icon.required' => 'Harus Diisi',
            'nama_ruang.required' => 'Harus Diisi',
            'jumlah.required' => 'Harus Diisi',
        ]);
        $data = fasilitas::create([
            'icon' => $request->icon,
            'nama_ruang' => $request->nama_ruang,
            'jumlah' => $request->jumlah,
        ]);
        return redirect()->route('fasilitas')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildatafasilitas($id)
    {

        $data = fasilitas::find($id);
        return view('fasilitas.tampildata', compact('data'));
    }
    public function updatedatafasilitas(request $request, $id)
    {
        $data = fasilitas::find($id);
        $data->update([

            'icon' => $request->icon,
            'nama_ruang' => $request->nama_ruang,
            'jumlah' => $request->jumlah,
        ]);
        return redirect()->route('fasilitas')->with('success', 'Data Berhasil Di Update');
    }
    public function deletefasilitas($id)
    {

        $data = fasilitas::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
