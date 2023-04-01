<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kompetensikeahlian;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class KompetensikeahlianController extends Controller
{
    public function kompetensikeahlian()
    {
        $data = kompetensikeahlian::paginate(9);
        $berita = berita::latest('created_at')->get();
        return view('kompetensikeahlian.kompetensikeahlian', compact('berita','data'));
    }
    public function kompetensikeahlianindex()
    {
        $data = kompetensikeahlian::paginate(3);
        return view('kompetensikeahlian.kompetensikeahlianindex',compact('data'));
    }
    public function detailkompetensi($id)
    {
        $data1 = kompetensikeahlian::latest('created_at')->get();
        $berita = berita::latest('created_at')->get();
        $data = kompetensikeahlian::findorfail($id);
        return view('kompetensikeahlian.detailkompetensi',compact('data','berita','data1'));
    }
    public function tambahkompetensi()
    {
        return view('kompetensikeahlian.tambahkompetensi');
    }
    public function insertkompetensi(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'nama_jurusan' => 'required',
            'foto_detail' => 'required',
            'deskripsi' => 'required',
        ], [

            'foto.required' => 'harus di isi',
            'foto.image' => 'harus Berupa Gambar',
            'foto.mimes' => 'harus Berupa Extensi JPG,PNG,JPEG',
            'nama_jurusan.required' => 'harus di isi',
            'foto_detail.required' => 'harus di isi',
            'deskripsi.required' => 'harus di isi',

        ]);
        $data = kompetensikeahlian::create([
            'foto' => $request->foto,
            'nama_jurusan' => $request->nama_jurusan,
            'foto_detail' => $request->foto_detail,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotokompetensi/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        if ($request->hasFile('foto_detail')) {
            $random = $request->file('foto_detail')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto_detail')->move('fotokompetensi/',$filename);
            $data->foto_detail = $filename;
            $data->save();
        }
        return redirect()->route('kompetensikeahlianindex')->with('success','Kompetensi Keahlian Berhasil di tambahkan');
    }
    public function tampilkompetensi($id)
    {
        $data = kompetensikeahlian::findorfail($id);
        return view('kompetensikeahlian.tampilkompetensi',compact('data'));
    }
    public function updatekompetensi(Request $request,$id )
    {
        $data = kompetensikeahlian::findorfail($id);
        $filename = $data->foto;
        $filename1 = $data->foto_detail;
        $data->update([
            'nama_jurusan' => $request->nama_jurusan,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotokompetensi/' . $data->foto))) {
                unlink(public_path('fotokompetensi/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotokompetensi/',$filename);
        }

        $data->foto = $filename;
        $data->save();

        if ($request->hasFile('foto_detail')) {
            // hapus file lama jika ada
            if ($data->foto_detail && file_exists(public_path('fotokompetensi/' . $data->foto_detail))) {
                unlink(public_path('fotokompetensi/' . $data->foto_detail));
            }

            $random = $request->file('foto_detail')->getClientOriginalExtension();
            $filename1 = time().'.'.$random;
            $request->file('foto_detail')->move('fotokompetensi/',$filename1);
        }

        $data->foto_detail = $filename1;
        $data->save();
        return redirect()->route('kompetensikeahlianindex')->with('success','Kompetensi Keahlian Berhasil di update');
    }
    public function deletekompetensi($id)
    {
        $data = kompetensikeahlian::findorfail($id);
        if (file_exists(public_path('fotokompetensi/'.$data->foto))) {
            unlink(public_path('fotokompetensi/'.$data->foto));
        }
        if (file_exists(public_path('fotokompetensi/'.$data->foto_detail))) {
            unlink(public_path('fotokompetensi/'.$data->foto_detail));
        }
        $data->delete();
        return back()->with('success','Kompetensi Keahlian Berhasil di hapus');
    }
}
