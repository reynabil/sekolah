<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\pengumuman;
use App\Models\siswaditerima;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function pengumumanbkk()
    {
        $data = pengumuman::paginate(6);
        $berita = berita::all();
        return view('pengumuman.pengumumanbkk', compact('berita', 'data'));
    }
    public function pengumuman()
    {
        $siswa = siswaditerima::all();
        $data = pengumuman::all();
        return view('pengumuman.pengumuman', compact('data', 'siswa'));
    }
    public function siswa($id)
    {
        $data = siswaditerima::where('id_judul', $id)->get();
        $berita = berita::all();
        return view('pengumuman.siswa', compact('berita', 'data'));
    }
    public function tambahpengumuman()
    {
        return view('pengumuman.tambahpengumuman');
    }
    public function tambahsiswa()
    {
        $data = pengumuman::all();
        return view('pengumuman.tambahsiswa', compact('data'));
    }
    public function insertpengumuman(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'judul' => 'required',
        ], [
            'foto.required' => 'harus di isi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'judul.required' => 'harus di isi',
        ]);
        $data = pengumuman::create([
            'foto' => $request->foto,
            'judul' => $request->judul,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto')->move('fotopengumuman/', $filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('pengumuman')->with('success', 'data berhasil di tambahkan');
    }
    public function insertsiswa(Request $request)
    {
        $this->validate($request, [
            'id_judul' => 'required',
            'foto_siswa' => 'required|image|mimes:png,jpg,jpeg',
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'email' => 'required|unique:siswaditerimas,email',
            'no_telp' => 'required',
            'jeniskelamin' => 'required',
        ], [
            'id_judul.required' => 'Harus di isi',
            'foto_siswa.required' => 'Harus di isi',
            'foto_siswa.image' => 'Harus Berupa Gambar',
            'foto_siswa.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'nisn.required' => 'Harus di isi',
            'nisn.unique' => 'NISN harus berbeda',
            'nama_siswa.required' => 'Harus di isi',
            'email.required' => 'Harus di isi',
            'email.unique' => 'Email harus berbeda',
            'no_telp.required' => 'Harus di isi',
            'no_telp.unique' => 'NO telepon harus berbeda',
            'jeniskelamin.required' => 'Harus di isi',
        ]);
        $data = siswaditerima::create([
            'id_judul' => $request->id_judul,
            'foto_siswa' => $request->foto_siswa,
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'jeniskelamin' => $request->jeniskelamin,
        ]);
        if ($request->hasFile('foto_siswa')) {
            $random = $request->file('foto_siswa')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto_siswa')->move('fotosiswa/', $filename);
            $data->foto_siswa = $filename;
            $data->save();
        }
        return redirect()->route('pengumuman')->with('success', 'data berhasil di tambahkan');
    }
    public function tampilsiswa($id)
    {
        $data = siswaditerima::findorfail($id);
        $pengumuman = pengumuman::all();
        return view('pengumuman.tampilsiswa', compact('data', 'pengumuman'));
    }
    public function updatesiswa(Request $request, $id)
    {

        $data = siswaditerima::findorfail($id);
        $filename = $data->foto_siswa;

        $data->update([
            'id_judul' => $request->id_judul,
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'jeniskelamin' => $request->jeniskelamin,
        ]);
        if ($request->hasFile('foto_siswa')) {
            // hapus file lama jika ada
            if ($data->foto_siswa && file_exists(public_path('fotosiswa/' . $data->foto_siswa))) {
                unlink(public_path('fotosiswa/' . $data->foto_siswa));
            }

            $random = $request->file('foto_siswa')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto_siswa')->move('fotosiswa/', $filename);
        }

        $data->foto_siswa = $filename;
        $data->save();
        return redirect()->route('pengumuman')->with('success', 'data berhasil di update');
    }
    public function tampilpengumuman($id)
    {
        $data = pengumuman::findorfail($id);
        return view('pengumuman.tampilpengumuman', compact('data'));
    }
    public function updatepengumuman(Request $request, $id)
    {
        $data = pengumuman::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'judul' => $request->judul,
        ]);

        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotopengumuman/' . $data->foto))) {
                unlink(public_path('fotopengumuman/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time() . '.' . $random;
            $request->file('foto')->move('fotopengumuman/', $filename);
        }

        $data->foto = $filename;
        $data->save();
        return redirect()->route('pengumuman')->with('success', 'data berhasil di update');
    }
    public function deletepengumuman($id)
    {
        $data = pengumuman::findorfail($id);
        if (file_exists(public_path('fotopengumuman/' . $data->foto))) {
            unlink(public_path('fotopengumuman/' . $data->foto));
        }


        foreach ($data->siswas as $siswa) {
            if (file_exists(public_path('fotosiswa/' . $siswa->foto_siswa))) {
                unlink(public_path('fotosiswa/' . $siswa->foto_siswa));
            }
            $siswa->delete();
        }

        $data->delete();
        return back()->with('success', 'data berhasil di delete');
    }
    public function deletesiswa($id)
    {
        $data = siswaditerima::findorfail($id);
        if (file_exists(public_path('fotosiswa/' . $data->foto_struktur))) {
            unlink(public_path('fotosiswa/' . $data->foto_struktur));
        }

        // $data->delete();
        return back()->with('success', 'data berhasil di delete');
    }
}
