<?php

namespace App\Http\Controllers;

use App\Models\sambutanks;
use Illuminate\Http\Request;

class SambutanksController extends Controller
{
    public function sambutanks()
    {
        $data = sambutanks::all();
        return view('sambutanks.sambutanks', compact('data'));
    }
    public function tambahdatasambutanks()
    {
        return view('sambutanks.tambahdatasambutanks');
    }
    public function insertdatasambutanks(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
            'deskripsi' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'deskripsi.required' => 'Harus Diisi',
        ]);
        $data = sambutanks::create([
            'foto' => $request->foto,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('sambutanks')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildatasambutanks($id)
    {

        $data = sambutanks::find($id);
        return view('sambutanks.tampildatasambutanks', compact('data'));
    }
    public function updatedatasambutanks(request $request, $id)
    {
        $data = sambutanks::find($id);
        $data->update([
            
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('sambutanks')->with('success', 'Data Berhasil Di Update');
    }
    public function deletesambutanks($id)
    {

        $data = sambutanks::findorfail($id);
        $data->delete();
        return back()->with('info', 'Data berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
