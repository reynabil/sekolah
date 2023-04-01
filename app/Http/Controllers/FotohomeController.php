<?php

namespace App\Http\Controllers;

use App\Models\fotohome;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class FotohomeController extends Controller
{
    public function fotohome()
    {
        $data = fotohome::all();
        return view('fotohome.fotohome', compact('data'));
    }
    public function tambahfotohome()
    {
        return view('fotohome.tambahdata');
    }
    public function insertfotohome(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
        ],[
            'judul.required' => 'Harus Di isi',
            'foto.required' => 'Harus Di isi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi PNG,JPG,JPEG',
        ]);
        $data = fotohome::create([
            'judul' => $request->judul,
            'foto' => $request->foto,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('foto_home/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect('fotohome')->with('success','Data berhasil Di tambahkan');
    }
    public function tampilfotohome($id)
    {
        $data = fotohome::findorfail($id);
        return view('fotohome.tampilfotohome', compact('data'));
    }
    public function updatefotohome(Request $request, $id)
    {
        $data = fotohome::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'judul' => $request->judul,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('foto_home/' . $data->foto))) {
                unlink(public_path('foto_home/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('foto_home/',$filename);
        }

        $data->foto = $filename;
        $data->save();

        return redirect('fotohome')->with('success','Foto Berhasil di update');
    }
    public function deletefotohome($id)
    {
        $data = fotohome::findorfail($id);
        if (file_exists(public_path('foto_home/'.$data->foto))) {
            unlink(public_path('foto_home/'.$data->foto));
        }
        $data->delete();
        return back()->with('success','Data Berhasil Di delete');
    }
}
