<?php

namespace App\Http\Controllers;

use App\Models\visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function visi()
    {
        $data = visimisi::all();
        return view('visimisi.visimisi', compact('data'));
    }
    public function tambahdatavisi()
    {
        return view('visimisi.tambahdata');
    }
    public function insertdatavisi(Request $request)
    {
        $this->validate($request, [
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
            'komitmen' => 'required',
        ], [
            'visi.required' => 'Harus Diisi',
            'misi.required' => 'Harus Diisi',
            'tujuan.required' => 'Harus Diisi',
            'komitmen.required' => 'Harus Diisi',
        ]);
        $data = visimisi::create([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'komitmen' => $request->komitmen,
        ]);
        return redirect()->route('visi')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildatavisi($id)
    {

        $data = visimisi::find($id);
        return view('visimisi.tampildata', compact('data'));
    }
    public function updatedatavisi(request $request, $id)
    {
        $data = visimisi::find($id);
        $data->update([

            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'komitmen' => $request->komitmen,
        ]);
        return redirect()->route('visi')->with('success', 'Data Berhasil Di Update');
    }
    public function deletevisi($id)
    {

        $data = visimisi::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
