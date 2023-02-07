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
        $data = slider::find($id);
        $data->update([

        ]);
        if ($request->hasFile('slider1')) {
            $request->file('slider1')->move('banner/', $request->file('slider1')->getClientOriginalName());
            $data->slider1 = $request->file('slider1')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('slider2')) {
            $request->file('slider2')->move('banner/', $request->file('slider2')->getClientOriginalName());
            $data->slider2 = $request->file('slider2')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('slider3')) {
            $request->file('slider3')->move('banner/', $request->file('slider3')->getClientOriginalName());
            $data->slider3 = $request->file('slider3')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('slider')->with('success', 'Data Berhasil Di Update');
    }
}
