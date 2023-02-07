<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\border;

class BorderController extends Controller

{
    public function border()
    {
        $data = border::all();
        return view('border.banner', compact('data'));
    }

    public function tampilborder($id)
    {
        $data = border::find($id);
        return view('border.tampilbanner',compact('data'));
    }
    public function updateborder(request $request, $id)
    {
        $data = border::find($id);
        $data->update([

            'judul1' => $request->judul1,
            'deskripsi1' => $request->deskripsi1,
            'judul2' => $request->judul2,
            'deskripsi2' => $request->deskripsi2,
            'judul3' => $request->judul3,
            'deskripsi3' => $request->deskripsi3,
        ]);

        return redirect()->route('border')->with('success', 'Data Berhasil Di Update');
    }
}
