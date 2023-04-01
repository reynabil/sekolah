<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function article()
    {
        $data = artikel::paginate(4);
        return view('artikel.article', compact('data'));
    }
    public function artikel(Request $request)
    {
        if (isset($_GET['keyword'])) {
            $search = $_GET['keyword'];
            $data = artikel::where('judul', 'LIKE', '%' . $search . '%')->paginate(8);
            $data->appends($request->all());
            $berita = berita::all();
        } else {
            $data = artikel::paginate(8);
            $berita = berita::all();
        }
        return view('artikel.artikel', compact('data','berita'));
    }
    public function detailartikel($id)
    {
        // DB::table('artikels')->increment('views');
        // $views = DB::table('artikels')->limit(1)->get();
        $data = artikel::all();
        $berita = artikel::first();
        $each = artikel::findorfail($id);
        $each->increment('views');
        return view('artikel.selengkapnya', compact('data', 'berita', 'each'));
    }
    public function tambahartikel()
    {
        return view('artikel.tambahartikel');
    }
    public function insertartikel(request $request)
    {

        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'deskripsi' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa PNG,JPG,JPEG',
            'judul.required' => 'Harus Diisi',
            'deskripsi.required' => 'Harus Diisi',
        ]);
        $data = artikel::create([

            'foto' => $request->foto,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotoartikel/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('article')->with('success', 'Artikel Berhasil Di Tambahkan');
    }
    public function tampilartikel($id)
    {
        $data = artikel::find($id);
        return view('artikel.tampilartikel', compact('data'));
    }

    public function updateartikel(request $request, $id)
    {
        $data = artikel::find($id);
        $filename = $data->foto;
        $data->update([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('foto')) {
            if ($data->foto && file_exists(public_path('fotoartikel/' . $data->foto))) {
                unlink(public_path('fotoartikel/' . $data->foto));
            }
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotoartikel/',$filename);
            $data->foto = $filename;
            $data->save();
        }
        return redirect()->route('article')->with('success', 'Artikel Berhasil Di Update');
    }
    public function deleteartikel($id)
    {

        $data = artikel::findorfail($id);
        if (file_exists(public_path('fotoartikel/'.$data->foto))) {
            unlink(public_path('fotoartikel/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Artikel berhasil dihapus');


        // $data = admin::find($id);
        // $data->delete();
        // return redirect()->route('admin')->with('success', 'Data Berhasil Di Delete');
    }
}
