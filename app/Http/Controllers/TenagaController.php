<?php

namespace App\Http\Controllers;
use App\Models\tenaga;
use Illuminate\Http\Request;

class TenagaController extends Controller
{
    public function tenaga()
        {
            $data = tenaga::all();
            return view('tenagas.tenagas', compact('data'));
        }
        public function tambahdatatenagas()
        {
            return view('tenagas.tambahdatatenagas');
        }
        public function insertdatatenaga(Request $request)
        {
            $this->validate($request, [
                'foto' => 'required',
                'nip' => 'required',
                'nama' => 'required',
                'status' => 'required',
                'tmt' => 'required',
            ], [
                'foto.required' => 'Harus Diisi',
                'nip.required' => 'Harus Diisi',
                'nama.required' => 'Harus Diisi',
                'status.required' => 'Harus Diisi',
                'tmt.required' => 'Harus Diisi',
            ]);
            $data = tenaga::create([
                'foto' => $request->foto,
                'nip' => $request->nip,
                'nama' => $request->nama,
                'status' => $request->status,
                'tmt' => $request->tmt,
            ]);

            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('tenagas')->with('success', 'Data Berhasil Di Tambahkan');
        }
        public function tampildatatenagas($id)
        {

            $data = tenaga::find($id);
            return view('tenagas.tampildatatenagas', compact('data'));
        }
        public function updatedatatenaga(request $request, $id)
        {
            $data = tenaga::find($id);
            $data->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'status' => $request->status,
                'tmt' => $request->tmt,
            ]);

            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('tenagas')->with('success', 'Data Berhasil Di Update');
        }
        public function deletetenaga($id)
        {

            $data = tenaga::findorfail($id);
            $data->delete();
            return back()->with('info', 'Data berhasil dihapus');

        }

}
