<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sosmed;
use Illuminate\Http\Request;
use App\Models\lowongankerja;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class LowongankerjaController extends Controller
{
    public function infolowongankerja()
    {
        $data = lowongankerja::paginate(6);
        $berita = berita::all();
        $sosmed = sosmed::all();
        return view('lowongankerja.infolowongankerja',compact('berita','data','sosmed'));
    }
    public function lowongankerja()
    {
        $data = lowongankerja::all();
        return view('lowongankerja.lowongankerja',compact('data'));
    }
    public function tambahlowongan()
    {
        return view('lowongankerja.tambahlowongan');
    }
    public function insertlowongan(Request $request)
    {
        $this->validate($request,[
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'nama_perusahaan' => 'required',
            'kualifikasi' => 'required',
            'deskripsi' => 'required',
        ],[
            'foto' => 'harus di isi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'nama_perusahaan' => 'harus di isi',
            'kualifikasi' => 'harus di isi',
            'deskripsi' => 'harus di isi',
        ]);
        $data = lowongankerja::create([
            'foto' => $request->foto,
            'nama_perusahaan' => $request->nama_perusahaan,
            'kualifikasi' => $request->kualifikasi,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotolowongan/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('lowongankerja')->with('success','Lowongan Pekerjaan berhasil di tambahkan');
    }
    public function tampillowongan($id)
    {
        $data = lowongankerja::findorfail($id);
        return view('lowongankerja.tampillowongankerja',compact('data'));
    }
    public function updatelowongan(Request $request,$id)
    {
        $data = lowongankerja::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'kualifikasi' => $request->kualifikasi,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotolowongan/' . $data->foto))) {
                unlink(public_path('fotolowongan/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotolowongan/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('lowongankerja')->with('success','Lowongan Pekerjaan berhasil di update');
    }
    public function deletelowongan($id)
    {
        $data = lowongankerja::findorfail($id);
        if (file_exists(public_path('fotolowongan/'.$data->foto))) {
            unlink(public_path('fotolowongan/'.$data->foto));
        }
        $data->delete();
        return back()->with('success','data berhasil di delete');
    }

}
