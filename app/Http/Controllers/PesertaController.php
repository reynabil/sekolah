<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sosmed;
use App\Models\peserta;
use App\Models\sebelas;
use App\Models\duabelas;
use App\Models\tigabelas;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function peserta()
    {
        $data3 = tigabelas::all()->sortBy('nama_kelas');
        $data2 = duabelas::all()->sortBy('nama_kelas');
        $data1 = sebelas::all()->sortBy('nama_kelas');
        $data = peserta::all()->sortBy('nama_kelas');

        return view('pesertas.pesertas', compact('data', 'data1', 'data2', 'data3'));
    }
    public function data($id)
    {
        $data1 = peserta::findorfail($id);
        $data = peserta::all();
        return view('pesertas.data', compact('data', 'data1'));
    }
    public function dataXI($id)
    {
        $data = sebelas::findorfail($id);
        return view('pesertas.dataXI', compact('data'));
    }
    public function dataXII($id)
    {
        $data = duabelas::findorfail($id);
        return view('pesertas.dataXII', compact('data'));
    }
    public function dataXIII($id)
    {
        $data = tigabelas::findorfail($id);
        return view('pesertas.dataXIII', compact('data'));
    }
    public function murid()
    {
        $berita = berita::all();
        $sosmed = sosmed::all();
        $data = peserta::all()->sortBy('nama_kelas');
        return view('pesertas.murid', compact('data', 'berita','sosmed'));
    }
    public function sepuluh()
    {
        $berita = berita::all();
        $sosmed = sosmed::all();
        $data = peserta::all()->sortBy('nama_kelas');
        return view('pesertas.sepuluh', compact('data', 'berita','sosmed'));
    }
    public function sebelas()
    {
        $berita = berita::all();
        $sosmed = sosmed::all();
        $data = sebelas::all()->sortBy('nama_kelas');
        return view('pesertas.sebelas', compact('data', 'berita','sosmed'));
    }
    public function duabelas()
    {
        $berita = berita::all();
        $sosmed = sosmed::all();
        $data = duabelas::all()->sortBy('nama_kelas');
        return view('pesertas.duabelas', compact('data', 'berita','sosmed'));
    }
    public function tigabelas()
    {
        $berita = berita::all();
        $sosmed = sosmed::all();
        $data = tigabelas::all()->sortBy('nama_kelas');
        return view('pesertas.tigabelas', compact('data', 'berita','sosmed'));
    }
    public function tambahdatapeserta()
    {
        return view('pesertas.tambahdatapesertas');
    }
    public function insertdatapeserta(Request $request)
    {
        $this->validate($request, [
            'nama_kelas' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'jl' => 'required',
            'jp' => 'required',
            'jml' => 'required',
        ], [
            'nama_kelas.required' => 'Harus Diisi',
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
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
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('logo/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('peserta')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildatapeserta($id)
    {

        $data = peserta::find($id);
        return view('pesertas.tampildatapesertas', compact('data'));
    }
    public function updatedatapeserta(request $request, $id)
    {
        $data = peserta::find($id);
        $filename = $data->foto;
        $data->update([
            'nama_kelas' => $request->nama_kelas,
            'jp' => $request->jp,
            'jl' => $request->jl,
            'jml' => $request->jml,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('logo/' . $data->foto))) {
                unlink(public_path('logo/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('logo/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('peserta')->with('success', 'Data Berhasil Di Update');
    }
    public function deletepeserta($id)
    {

        $data = peserta::findorfail($id);
        $data->delete();
        return redirect()->route('peserta')->with('success', 'Data berhasil dihapus');
    }

    //XI

    public function tambahdataXI()
    {
        return view('pesertas.tambahdataXI');
    }
    public function insertdataXI(Request $request)
    {
        $this->validate($request, [
            'nama_kelas' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'jl' => 'required',
            'jp' => 'required',
            'jml' => 'required',
        ], [
            'nama_kelas.required' => 'Harus Diisi',
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'jl.required' => 'Harus Diisi',
            'jp.required' => 'Harus Diisi',
            'jml.required' => 'Harus Diisi',
        ]);
        $data = sebelas::create([
            'nama_kelas' => $request->nama_kelas,
            'foto' => $request->foto,
            'jp' => $request->jp,
            'jl' => $request->jl,
            'jml' => $request->jml,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('logo/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('peserta')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildataXI($id)
    {

        $data = sebelas::find($id);
        return view('pesertas.tampildataXI', compact('data'));
    }
    public function updatedataXI(request $request, $id)
    {
        $data = sebelas::find($id);
        $filename = $data->foto;
        $data->update([
            'nama_kelas' => $request->nama_kelas,
            'jp' => $request->jp,
            'jl' => $request->jl,
            'jml' => $request->jml,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('logo/' . $data->foto))) {
                unlink(public_path('logo/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('logo/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('peserta')->with('success', 'Data Berhasil Di Update');
    }
    public function deleteXI($id)
    {

        $data = sebelas::findorfail($id);
        $data->delete();
        return redirect()->route('peserta')->with('success', 'Data berhasil dihapus');
    }

    //XII

    public function tambahdataXII()
    {
        return view('pesertas.tambahdataXII');
    }
    public function insertdataXII(Request $request)
    {
        $this->validate($request, [
            'nama_kelas' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'jl' => 'required',
            'jp' => 'required',
            'jml' => 'required',
        ], [
            'nama_kelas.required' => 'Harus Diisi',
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'jl.required' => 'Harus Diisi',
            'jp.required' => 'Harus Diisi',
            'jml.required' => 'Harus Diisi',
        ]);
        $data = duabelas::create([
            'nama_kelas' => $request->nama_kelas,
            'foto' => $request->foto,
            'jp' => $request->jp,
            'jl' => $request->jl,
            'jml' => $request->jml,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('logo/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('peserta')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildataXII($id)
    {

        $data = duabelas::findorfail($id);
        return view('pesertas.tampildataXII', compact('data'));
    }
    public function updatedataXII(request $request, $id)
    {
        $data = duabelas::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'nama_kelas' => $request->nama_kelas,
            'jp' => $request->jp,
            'jl' => $request->jl,
            'jml' => $request->jml,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('logo/' . $data->foto))) {
                unlink(public_path('logo/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('logo/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('peserta')->with('success', 'Data Berhasil Di Update');
    }
    public function deleteXII($id)
    {

        $data = duabelas::findorfail($id);
        $data->delete();
        return redirect()->route('peserta')->with('success', 'Data berhasil dihapus');
    }


    //XIII


    public function tambahdataXIII()
    {
        return view('pesertas.tambahdataXIII');
    }
    public function insertdataXIII(Request $request)
    {
        $this->validate($request, [
            'nama_kelas' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'jl' => 'required',
            'jp' => 'required',
            'jml' => 'required',
        ], [
            'nama_kelas.required' => 'Harus Diisi',
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'jl.required' => 'Harus Diisi',
            'jp.required' => 'Harus Diisi',
            'jml.required' => 'Harus Diisi',
        ]);
        $data = tigabelas::create([
            'nama_kelas' => $request->nama_kelas,
            'foto' => $request->foto,
            'jp' => $request->jp,
            'jl' => $request->jl,
            'jml' => $request->jml,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('logo/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('peserta')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildataXIII($id)
    {

        $data = tigabelas::findorfail($id);
        return view('pesertas.tampildataXIII', compact('data'));
    }
    public function updatedataXIII(request $request, $id)
    {
        $data = tigabelas::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'nama_kelas' => $request->nama_kelas,
            'jp' => $request->jp,
            'jl' => $request->jl,
            'jml' => $request->jml,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('logo/' . $data->foto))) {
                unlink(public_path('logo/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('logo/',$filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('peserta')->with('success', 'Data Berhasil Di Update');
    }
    public function deleteXIII($id)
    {

        $data = tigabelas::findorfail($id);
        $data->delete();
        return redirect()->route('peserta')->with('success', 'Data berhasil dihapus');
    }
}
