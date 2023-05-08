<?php

namespace App\Http\Controllers;

use App\Models\denah;
use App\Models\berita;
use App\Models\sosmed;
use App\Models\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function fasilitas()
    {
        $denah = denah::all();
        $data = fasilitas::paginate(3);
        return view('fasilitas.fasilitas', compact('data', 'denah'));
    }
    public function foto($id)
    {
        $data1 = fasilitas::first();
        $berita = berita::all();
        $data = fasilitas::findorfail($id);
        $sosmed = sosmed::all();
        return view('fasilitas.foto', compact('data', 'berita', 'data1','sosmed'));
    }
    public function fase()
    {
        $data1 = denah::findorfail(1);
        $berita = berita::all();
        $data = fasilitas::all();
        $sosmed = sosmed::all();
        return view('fasilitas.fase', compact('data', 'berita', 'data1','sosmed'));
    }
    public function tambahdatafasilitas()
    {
        return view('fasilitas.tambahdata');
    }
    public function tambahdatadenah()
    {

        return view('fasilitas.tambahdatadenah');
    }
    public function insertdatadenah(request $request)
    {
        $data = denah::create([
            'foto_denah' => $request->foto_denah,
        ]);
        if ($request->hasFile('foto_denah')) {
            $request->file('foto_denah')->move('fotofasilitas/', $request->file('foto_denah')->getClientOriginalName());
            $data->foto_denah = $request->file('foto_denah')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('fasilitas');
    }
    public function insertdatafasilitas(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required',
            'foto.*' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'nama_ruang' => 'required',
            'jumlah' => 'required',
        ], [
            'icon.required' => 'Harus Diisi',
            'foto.required' => 'Harus Diisi',
            'nama_ruang.required' => 'Harus Diisi',
            'jumlah.required' => 'Harus Diisi',
        ]);
        //
        $files = [];
        if ($request->hasfile('foto')) {
            foreach ($request->foto as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('fotofasilitas'), $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new fasilitas();
        $model->icon = $request->icon;
        $model->nama_ruang = $request->nama_ruang;
        $model->jumlah = $request->jumlah;
        $model->foto = json_encode($files);
        $model->save();

        // $data = fasilitas::create([
        //     'icon' => $request->icon,
        //     'foto' => implode('|',$image),
        //     'nama_ruang' => $request->nama_ruang,
        //     'jumlah' => $request->jumlah,
        // ]);

        return redirect()->route('fasilitas')->with('success', 'Fasilitas Berhasil Di Tambahkan');
    }
    public function tampildatafasilitas($id)
    {

        $data = fasilitas::findorfail($id);
        return view('fasilitas.tampildata', compact('data'));
    }
    public function tampildatadenah($id)
    {
        $data = denah::findorfail($id);
        return view('fasilitas.tampildatadenah', compact('data'));
    }
    public function updatedatadenah(Request $request, $id)
    {
        $this->validate($request, [
            'foto_denah' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ], [
            'foto_denah.required' => 'Gambar harus diunggah.',
            'foto_denah.image' => 'File yang diunggah harus berupa gambar.',
            'foto_denah.mimes' => 'Gambar hanya dapat berformat PNG, JPG, atau JPEG.',
            'foto_denah.max' => 'Ukuran gambar tidak boleh lebih besar dari 2 MB.',
        ]);
        $data = denah::findorfail($id);
        $data->update([]);
        if ($request->hasFile('foto_denah')) {
            $request->file('foto_denah')->move('fotofasilitas/', $request->file('foto_denah')->getClientOriginalName());
            $data->foto_denah = $request->file('foto_denah')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('fasilitas')->with('success', 'Denah berhasil di update');
    }
    public function updatedatafasilitas(Request $request, $id)
    {
        $this->validate($request, [
            'foto.*' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ], [
            'foto.*.required' => 'Gambar harus diunggah.',
            'foto.*.image' => 'File yang diunggah harus berupa gambar.',
            'foto.*.mimes' => 'Gambar hanya dapat berformat PNG, JPG, atau JPEG.',
            'foto.*.max' => 'Ukuran gambar tidak boleh lebih besar dari 2 MB.',
        ]);
        $data = fasilitas::findorfail($id);
        $data->update([
            "icon" => $request->icon,
            "nama_ruang" => $request->nama_ruang,
            "jumlah" => $request->jumlah,
        ]);

        if ($request->hasfile('foto')) {
            $keyarray1 =  array_keys($request->foto);
            $foto = [];
            // $hasil = array_combine($tes,$foto);-
            $i = 0;
            foreach ($request->foto as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('fotofasilitas/'), $name);
                $foto[$keyarray1[$i]] = $name;
                $i++;
            }
            $fotoin = json_decode($data->foto);
            // dd($foto);
            foreach ($keyarray1 as $key) {
                $fotoin[$key] = $foto[$key];
            }
            $data->foto = $fotoin;
            $data->save();
        }
        return redirect()->route('fasilitas')->with('success', 'Fasilitas Berhasil Di Update');
    }
    public function deletefasilitas($id)
    {

        $data = fasilitas::findorfail($id);
        $data->delete();
        return back()->with('success', 'Fasilitas berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
