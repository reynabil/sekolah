<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\sosmed;
use App\Models\tenaga;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class TenagaController extends Controller
{
    public function exportpdfnonpendidik()
    {
        $data = tenaga::all();
        $pdf = Pdf::loadView('pdf.export-nonpendidik',['data' => $data]);
        return $pdf->download('export-nonpendidik-'.Carbon::now()->timestamp.'.pdf');
    }

    public function tenaga()
    {
        $data = tenaga::paginate(4);
        return view('tenagas.tenagas', compact('data'));
    }
    public function nonpendidik()
    {
        $data = tenaga::paginate(8);
        $sosmed = sosmed::all();
        $berita = berita::all();
        return view('tenagas.nonpendidik',compact('berita','data','sosmed'));
    }
    public function tambahdatatenaga()
    {
        return view('tenagas.tambahdatatenagas');
    }
    public function insertdatatenaga(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'nama' => 'required',
            'status_kepegawaian' => 'required',
        ], [
            'foto.required' => 'Harus Diisi',
            'foto.image' => 'Harus Berupa Gambar',
            'foto.mimes' => 'Harus Berupa Extensi JPG,PNG,JPEG',
            'nama.required' => 'Harus Diisi',
            'status_kepegawaian.required' => 'Harus Diisi',
        ]);
        $data = tenaga::create([
            'foto' => $request->foto,
            'nama' => $request->nama,
            'status_kepegawaian' => $request->status_kepegawaian,
        ]);

        if ($request->hasFile('foto')) {
            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotononpendidik/',$filename);
            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('tenaga')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampildatatenaga($id)
    {

        $data = tenaga::findorfail($id);
        return view('tenagas.tampildatatenagas', compact('data'));
    }
    public function updatedatatenaga(request $request, $id)
    {
        $data = tenaga::findorfail($id);
        $filename = $data->foto;
        $data->update([
            'nama' => $request->nama,
            'status_kepegawaian' => $request->status_kepegawaian,
        ]);

        if ($request->hasFile('foto')) {
            // hapus file lama jika ada
            if ($data->foto && file_exists(public_path('fotononpendidik/' . $data->foto))) {
                unlink(public_path('fotononpendidik/' . $data->foto));
            }

            $random = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('foto')->move('fotononpendidik/',$filename);
        }

        $data->foto = $filename;
        $data->save();

        return redirect()->route('tenaga')->with('success', 'Data Berhasil Di Update');
    }
    public function deletetenaga($id)
    {

        $data = tenaga::findorfail($id);
        if (file_exists(public_path('fotononpendidik/'.$data->foto))) {
            unlink(public_path('fotononpendidik/'.$data->foto));
        }
        $data->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
