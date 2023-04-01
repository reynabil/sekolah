<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
        $data = slider::all();
        return view('slider.slider', compact('data'));
    }
    public function tampilslider($id)
    {
        $data = slider::find($id);
        return view('slider.tampilslider', compact('data'));
    }
    public function updateslider(request $request, $id)
    {
        $this->validate($request, [
            'slider1' => 'image|mimes:png,jpg,jpeg|max:2048',
            'slider2' => 'image|mimes:png,jpg,jpeg|max:2048',
            'slider3' => 'image|mimes:png,jpg,jpeg|max:2048',
        ], [
            'slider1.required' => 'Gambar harus diunggah.',
            'slider1.image' => 'File yang diunggah harus berupa gambar.',
            'slider1.mimes' => 'Gambar hanya dapat berformat PNG, JPG, atau JPEG.',
            'slider1.max' => 'Ukuran gambar tidak boleh lebih besar dari 2 MB.',
            'slider2.required' => 'Gambar harus diunggah.',
            'slider2.image' => 'File yang diunggah harus berupa gambar.',
            'slider2.mimes' => 'Gambar hanya dapat berformat PNG, JPG, atau JPEG.',
            'slider2.max' => 'Ukuran gambar tidak boleh lebih besar dari 2 MB.',
            'slider3.required' => 'Gambar harus diunggah.',
            'slider3.image' => 'File yang diunggah harus berupa gambar.',
            'slider3.mimes' => 'Gambar hanya dapat berformat PNG, JPG, atau JPEG.',
            'slider3.max' => 'Ukuran gambar tidak boleh lebih besar dari 2 MB.',
        ]);

        $data = slider::findorfail($id);
        $filename = $data->slider1;
        $filename1 = $data->slider2;
        $filename2 = $data->slider3;

        $data->update([

        ]);
        if ($request->hasFile('slider1')) {

            if ($data->slider1 && file_exists(public_path('banner/' . $data->slider1))) {
                unlink(public_path('banner/' . $data->slider1));
            }
            $random = $request->file('slider1')->getClientOriginalExtension();
            $filename = time().'.'.$random;
            $request->file('slider1')->move('banner/',$filename);
            $data->slider1 = $filename;
            $data->save();
        }
        if ($request->hasFile('slider2')) {
            if ($data->slider2 && file_exists(public_path('banner/' . $data->slider2))) {
                unlink(public_path('banner/' . $data->slider2));
            }
            $random = $request->file('slider2')->getClientOriginalExtension();
            $filename1 = time().'.'.$random;
            $request->file('slider2')->move('banner/',$filename1);
            $data->slider2 = $filename1;
            $data->save();
        }
        if ($request->hasFile('slider3')) {
            if ($data->slider3 && file_exists(public_path('banner/' . $data->slider3))) {
                unlink(public_path('banner/' . $data->slider3));
            }
            $random = $request->file('slider3')->getClientOriginalExtension();
            $filename2 = time().'.'.$random;
            $request->file('slider3')->move('banner/',$filename2);
            $data->slider3 = $filename2;
            $data->save();
        }
        return redirect()->route('slider')->with('success', 'Slider Berhasil Di Update');
    }
}
