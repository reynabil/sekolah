<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\berita;
use App\Models\sosmed;
use App\Models\pendidik;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PendidikController extends Controller
{
    public function exportpdf()
    {
        $data = pendidik::all();
        $pdf = Pdf::loadView('pdf.export-pendidik',['data' => $data]);
        return $pdf->download('export-pendidik-'.Carbon::now()->timestamp.'.pdf');
    }
    public function pendidik()
    {
        $data = pendidik::paginate(4);
        return view('pendidiks.pendidiks', compact('data'));
    }
    public function teacher()
    {
        $berita = berita::all();
        $sosmed = sosmed::all();
        $data = pendidik::paginate(8);
        return view('pendidiks.pendidik', compact('data', 'berita','sosmed'));
    }
    public function tambahdatapendidik()
    {
        return view('pendidiks.tambahdatapendidiks');
    }
    public function insertdatapendidik(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'nama' => 'required',
            'pangkat_gol' => 'required',
            'tugas' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'nama.required' => 'Harus Diisi',
            'pangkat_gol.required' => 'Harus Diisi',
            'tugas.required' => 'Harus Diisi',
        ]);
        $data = pendidik::create([
            'foto' => $request->foto,
            'nama' => $request->nama,
            'pangkat_gol' => $request->pangkat_gol,
            'tugas' => $request->tugas,
        ]);

        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotopendidik/',$filename);
            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('pendidik')->with('success', 'Pendidik Berhasil Di Tambahkan');
    }
    public function tampildatapendidik($id)
    {

        $data = pendidik::findorfail($id);
        return view('pendidiks.tampildatapendidiks', compact('data'));
    }
    public function updatedatapendidik(request $request, $id)
    {
        $data = pendidik::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'nama' => $request->nama,
            'pangkat_gol' => $request->pangkat_gol,
            'tugas' => $request->tugas,
        ]);

        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotopendidik/' . $data->foto))) {
                unlink(public_path('fotopendidik/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotopendidik/',$filename);
        }

        $data->foto = $filename;
        $data->save();

        return redirect()->route('pendidik')->with('success', 'Pendidik Berhasil Di Update');
    }
    public function deletependidik($id)
    {

        $data = pendidik::findorfail($id);
        if (file_exists(public_path('fotopendidik/'.$data->foto))) {
            unlink(public_path('fotopendidik/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Pendidik berhasil dihapus');
    }
}
