<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sosmed;
use App\Models\sasaran;
use App\Models\sasaranmutu;
use Illuminate\Http\Request;

class SasaranmutuController extends Controller
{
    public function sasaranmutu()
    {
        $data1 = sasaranmutu::all();
        $data = sasaran::findorfail(1);
        $berita = berita::all();
        $sosmed = sosmed::all();
        return view('sasaranmutu.sasaranmutu', compact('berita', 'data','data1','sosmed'));
    }
    public function sasaranmutuindex()
    {
        $data1 = sasaranmutu::all();
        $data = sasaran::all();
        return view('sasaranmutu.sasaranmutuindex', compact('data', 'data1'));
    }
    public function tambahdatasasaran()
    {
        return view('sasaranmutu.tambahsasaranmutu');
    }
    public function insertsasaranmutu(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
        ], [
            'judul.required' => 'harus di isi',
            'deskripsi.required' => 'harus di isi',
        ]);
        sasaranmutu::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('sasaranmutuindex')->with('success','sasaranmutu berhasil di tambahkan');

    }
    public function tampilsasaranmutuindex($id)
    {
        $data = sasaran::findorfail($id);
        return view('sasaranmutu.tampilsasaranmutuindex', compact('data'));
    }
    public function updatesasaranmutuindex(Request $request, $id)
    {
        $data = sasaran::findorfail($id);
        $filename = $data->logo;
        $filename1 = $data->foto;
        $data->update([
            'deskripsi_singkat' => $request->deskripsi_singkat,
        ]);
        if ($request->hasFile('logo')) {
            // hapus file lama jika ada
            if ($data->logo && file_exists(public_path('fotosasaran/' . $data->logo))) {
                unlink(public_path('fotosasaran/' . $data->logo));
            }

            $random = $request->file('logo')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('logo')->move('fotosasaran/',$filename);
        }

        $data->foto = $filename;
        $data->save();

        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotosasaran/' . $data->foto))) {
                unlink(public_path('fotosasaran/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename1 = time().'.'.$random;
            $request->file('foto')->move('fotosasaran/',$filename1);
        }

        $data->foto = $filename1;
        $data->save();

        return redirect()->route('sasaranmutuindex')->with('success','data berhasil di update');
    }
    public function tampilsasaranmutu($id)
    {
        $data = sasaranmutu::findorfail($id);
        return view('sasaranmutu.tampilsasaranmutu',compact('data'));
    }
    public function updatesasaranmutu(Request $request,$id)
    {
        $data = sasaranmutu::findorfail($id);
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('sasaranmutuindex')->with('success','sasaran mutu berhasil di update');
    }
    public function deletesasaranmutu($id)
    {
        $data = sasaranmutu::findorfail($id);
        $data->delete();
        return back()->with('success',' sasaran mutu berhasil di delete');
    }
}
