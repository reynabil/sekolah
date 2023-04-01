<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{

    public function berita(Request $request)
    {
        if (isset($_GET['keyword'])) {
            $search = $_GET['keyword'];
            $data = berita::where('judul', 'LIKE', '%' . $search . '%')->paginate(8);
            $data->appends($request->all());
            $berita = berita::all();
        } else {
            $data = berita::paginate(8);
            $berita = berita::all();
        }
        return view('berita.berita' ,compact('data','berita'));
    }
    public function selengkapnya($id)
    {
        // DB::table('beritas')->increment('views');
        // $view = DB::table('beritas')->limit(1)->get();
        $data = berita::all()->sortBy('created_at');
        $berita = berita::first();
        $each = berita::findorfail($id);
        $each->increment('views');
        return view('berita.Selengkapnya',compact('data','berita','each',));
    }
    public function news()
    {
        $data = berita::paginate(4);
        return view('berita.news',compact('data'));
    }
    public function tambahberita()
    {
        return view('berita.tambahberita');
    }
    public function insertberita(request $request)
    {

            $this->validate($request, [
                'foto' => 'required|image|mimes:png,jpg,jpeg',
                'judul' => 'required',
                'deskripsi' => 'required',
            ], [
                'foto.required' => 'Harus Diisi',
                'foto.image' => 'Harus Berupa Gambar',
                'foto.mimes' => 'Harus Berupa png,jpg,jpeg',
                'judul.required' => 'Harus Diisi',
                'deskripsi.required' => 'Harus Diisi',
            ]);
            $data = berita::create([

                'foto' => $request->foto,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
            if ($request->hasFile('foto')) {
                $random = $request->file('foto')->getClientOriginalExtension();
                $filename = time().'.'.$random;
                $request->file('foto')->move('fotoberita/',$filename);
                $data->foto = $filename;
                $data->save();
            }
            return redirect()->route('news')->with('success', 'Berita Berhasil Di Tambahkan');

    }
    public function tampildata($id)
    {
        $data = berita::findorfail($id);
        return view('berita.tampilberita',compact('data'));
    }

    public function updateberita(request $request, $id)
    {
        $data = berita::findorfail($id);
        $filename = $data->foto; // nama file foto lama

        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotoberita/' . $data->foto))) {
                unlink(public_path('fotoberita/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotoberita/',$filename);
        }

        $data->foto = $filename;
        $data->save();

        return redirect()->route('news')->with('success', 'Berita Berhasil Di Update');
    }
    public function deleteberita($id)
    {

        $data = berita::findorfail($id);
        if (file_exists(public_path('fotoberita/'.$data->foto))) {
            unlink(public_path('fotoberita/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Berita berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
