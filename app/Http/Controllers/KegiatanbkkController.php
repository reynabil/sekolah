<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kegiatan;
use App\Models\kegiatanbkk;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\BitwiseOr;

use function PHPUnit\Framework\returnValue;

class KegiatanbkkController extends Controller
{
    public function kegiatanbkkindex()
    {
        $data = kegiatanbkk::all();
        return view('kegiatanbkk.kegiatanbkkindex',compact('data'));
    }
    public function kegiatanbkk()
    {
        $data = kegiatanbkk::all();
        $berita  = berita::all();
        return view('kegiatanbkk.kegiatanbkk',compact('berita','data'));
    }
    public function selengkapnyabkk($id)
    {
        $data = kegiatanbkk::findorfail($id);
        $berita = berita::all();
        return view('kegiatanbkk.selengkapnyabkk',compact('berita','data'));
    }
    public function tambahkegiatanbkk()
    {
        return view('kegiatanbkk.tambahkegiatanbkk');
    }
    public function insertkegiatanbkk(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
        ],[
            'judul' => 'harus di isi',
            'deskripsi' => 'harus di isi',
        ]);
        $data = kegiatanbkk::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('kegiatanbkkindex')->with('success','Kegiatan berhasil di tambahkan');
    }
    public function tampilkegiatanbkk($id)
    {
        $data = kegiatanbkk::findorfail($id);
        return view('kegiatanbkk.tampilkegiatanbkk',compact('data'));
    }
    public function updatekegiatanbkk(Request $request,$id)
    {
        $data = kegiatanbkk::findorfail($id);
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('kegiatanbkkindex')->with('success','Kegiatan berhasil di update');
    }
    public function deletekegiatanbkk($id)
    {
        $data = kegiatanbkk::findorfail($id);
        $data->delete();
        return redirect()->route('kegiatanbkkindex')->with('success','Kegiatan berhasil di delete');
    }
}
