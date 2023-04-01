<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\berita;
use App\Models\galeri;
use App\Models\kontak;
use App\Models\artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdministratorController extends Controller
{

    public function administrator()
    {
        $pesan = kontak::count();
        $artikel = artikel::count();
        $berita = berita::count();
        $galeri = galeri::count();
        return view('administrator.welcome', compact('berita', 'artikel', 'galeri', 'pesan'));
    }
    public function profil()
    {
        return view('administrator.profil');
    }
    public function updatenama(Request $request)
    {
        $data = Auth::user();
        $data->name = $request->name;
        $data->save();
        return back()->with('success','Nama Telah Diubah');
    }

    public function updatepassword(request $request){
        $request->validate([
            'current_password' => 'required|min:6|max:100',
            'password' => 'required|min:6|max:100|confirmed',
            'password_confirmation' => 'required'
        ], [
            'current_password.required' => 'sandi lama harus diisi',
            'current_password.min' => 'sandi harus lebih dari 6',
            'password.required' => 'sandi baru harus diisi',
            'password.min' => 'sandi harus lebih dari 6',
            'password.confirmed' => 'sandi ini harus sama dengan sandi baru',
            'password_confirmation.required' => 'konfirmasi sandi harus diisi',

        ]);

        $data = User::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $data->password)) {
            return back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        }

        $data->update([
            'password' => Hash::make($request->password)
        ]);
        return back()->with('success', 'Password Berhasil Di Update !');
    }

    public function updatefoto(Request $request)
    {
        $foto = 'admin.png';
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosekolah/', $request->file('foto')->getClientOriginalName());
            $foto = $request->file('foto')->getClientOriginalName();
        }
        $data = Auth::user();
        $data->foto = $foto;
        $data->save();
        return redirect()->back();
    }
    public function updatefotosampul(Request $request)
    {
        $foto = 'sampul.png';
        if ($request->hasFile('fotosampul')) {
            $request->file('fotosampul')->move('fotosekolah/', $request->file('fotosampul')->getClientOriginalName());
            $foto = $request->file('fotosampul')->getClientOriginalName();
        }
        $data = Auth::user();
        $data->fotosampul = $foto;
        $data->save();
        return redirect()->back();
    }

    public function loginadmin()
    {
        return view('administrator.login');
    }

    public function loginproses(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.required' => 'masukkan email yang benar',
            'email.exists'  => 'email salah',
            'password.required' => 'password salah',
        ]);


        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('administrator')->with('success', 'Berhasil Login , Halo Admin');
        } else {
            return back()->with('error', 'password salah');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/loginadmin');
    }

    // public function register()
    // {
    //     return view('siakad.register');
    // }
    // public function registeruser(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required|max:150',
    //         'email' => 'required|unique:users,email',
    //         'password' => 'required|min:5|max:50',
    //     ], [
    //         'name.required' => 'Nama harus diisi',
    //         'name.unique' => ' Nama sudah dipakai',
    //         'email.unique' => 'Email sudah dipakai',
    //         'email.required' => 'Email harus diisi',
    //         'password.required' => 'Sandi harus diisi',
    //     ]);


    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60),
    //         'role' => 'admin',
    //     ]);
    //     return redirect('/login');
    // }


}
