<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\berita;
use App\Models\bioalumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function detailalumniindex($id)
    {
        $data = alumni::findorfail($id);
        return view('alumni.detailalumni', compact('data'));
    }
    public function alumniindex()
    {
        $data1 = bioalumni::paginate(4);
        $data = alumni::paginate(4);
        return view('alumni.alumniindex', compact('data', 'data1'));
    }
    public function tambah()
    {
        $berita = berita::all();
        return view('alumni.tambah', compact('berita'));
    }
    public function alumni()
    {
        $data = alumni::where('status', 1)->paginate(8);;
        $berita = berita::all();
        return view('alumni.alumni', compact('berita', 'data'));
    }
    public function detailalumni($id)
    {
        $data = alumni::findorfail($id);
        $berita = berita::all();
        return view('alumni.detail', compact('berita', 'data'));
    }
    public function tambahalumni()
    {
        return view('alumni.tambahalumni');
    }
    public function tambahbiodataalumni()
    {
        $data = alumni::all();
        return view('alumni.tambahbioalumni', compact('data'));
    }
    public function insertbiodataalumni(Request $request)
    {
        $this->validate($request, [
            'foto' => 'nullable',
            'nama_alumni' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'tahunlulus' => 'required',
            'jurusan' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'pengalaman' => 'required',
            'penghargaan' => 'required',
            'testimoni' => 'required',
        ], [
            'foto.required' => 'Harus Di ISI',
            'nama_alumni.required' => 'Harus Di ISI',
            'alamat.required' => 'Harus Di ISI',
            'email.required' => 'Harus Di ISI',
            'no_telp.required' => 'Harus Di ISI',
            'tahunlulus.required' => 'Harus Di ISI',
            'jurusan.required' => 'Harus Di ISI',
            'pekerjaan.required' => 'Harus Di ISI',
            'pendidikan.required' => 'Harus Di ISI',
            'pengalaman.required' => 'Harus Di ISI',
            'testimoni.required' => 'Harus Di ISI',
        ]);
        $data = alumni::create([
            'foto' => $request->foto,
            'nama_alumni' => $request->nama_alumni,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'tahunlulus' => $request->tahunlulus,
            'jurusan' => $request->jurusan,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'penghargaan' => $request->penghargaan,
            'testimoni' => $request->testimoni,
        ]);

        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto')->move('fotoalumni/', $filename);
            $data->foto = $filename;
            $data->save();
        }
        return back()->with('success', 'data berhasil di kirim ,Silahkan tunggu persetujuan admin');
    }
    public function insertalumni(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
            'nama_alumni' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'tahunlulus' => 'required',
            'jurusan' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'pengalaman' => 'required',
            'penghargaan' => 'required',
            'testimoni' => 'required',
        ], [
            'foto.required' => 'Harus Di ISI',
            'nama_alumni.required' => 'Harus Di ISI',
            'alamat.required' => 'Harus Di ISI',
            'email.required' => 'Harus Di ISI',
            'no_telp.required' => 'Harus Di ISI',
            'tahunlulus.required' => 'Harus Di ISI',
            'jurusan.required' => 'Harus Di ISI',
            'pekerjaan.required' => 'Harus Di ISI',
            'pendidikan.required' => 'Harus Di ISI',
            'pengalaman.required' => 'Harus Di ISI',
            'testimoni.required' => 'Harus Di ISI',
        ]);
        $data = alumni::create([
            'foto' => $request->foto,
            'nama_alumni' => $request->nama_alumni,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'tahunlulus' => $request->tahunlulus,
            'jurusan' => $request->jurusan,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'penghargaan' => $request->penghargaan,
            'testimoni' => $request->testimoni,
        ]);

        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto')->move('fotoalumni/', $filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('alumniindex')->with('success', 'data berhasil di tambah');
    }
    public function updatestatus($id)
    {
        alumni::where('id', $id)->update([
            'status' => 1,
        ]);
        return back()->with('success','berhasil di terima');
    }
    public function tampilalumni($id)
    {
        $data = alumni::findorfail($id);
        return view('alumni.tampilalumni', compact('data'));
    }
    public function updatealumni(Request $request, $id)
    {
        $data = alumni::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'nama_alumni' => $request->nama_alumni,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'tahunlulus' => $request->tahunlulus,
            'jurusan' => $request->jurusan,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'penghargaan' => $request->penghargaan,
            'testimoni' => $request->testimoni,
        ]);
        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotoalumni/' . $data->foto))) {
                unlink(public_path('fotoalumni/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto')->move('fotoalumni/', $filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('alumniindex')->with('success', 'data berhasil di update');
    }
    public function deletealumni($id)
    {
        $data = alumni::findorfail($id);
        if (file_exists(public_path('fotoalumni/' . $data->foto))) {
            unlink(public_path('fotoalumni/' . $data->foto));
        }
        $data->delete();
        return back()->with('success', 'data berhasil di delete');
    }
}
