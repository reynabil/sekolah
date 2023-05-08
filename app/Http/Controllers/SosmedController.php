<?php

namespace App\Http\Controllers;

use App\Models\sosmed;
use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use SebastianBergmann\CodeUnit\FunctionUnit;

class SosmedController extends Controller
{
    public function sosmed()
    {
        $data = sosmed::all();
        return view('sosmed.sosmed',compact('data'));
    }

    public function tambahsosmed()
    {
        return view('sosmed.tambahsosmed');
    }

    public function insertsosmed(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:sosmeds',
            'link' => 'required',
        ],[
            'name.required' => 'Nama Harus Diisi',
            'name.unique' => 'Nama Harus Berbeda',
            'link.required' => 'Link Harus Disii',
        ]);

        sosmed::create([
            'name' => $request->name,
            'link' => $request->link,
        ]);
        return redirect('sosmed')->with('success','Data Berhasil Ditambahkan');
    }
}
