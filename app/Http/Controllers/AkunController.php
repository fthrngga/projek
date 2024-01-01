<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    /*
    * @method POST
    */

    public function viewRegis()
    {
        return view('admin.regis');
    }

    public function registrasi(Request $request)
    {
        // Simpan data ke database menggunakan model Akun
        Akun::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('home.viewAdmin');
    }

    public function viewLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $akun = Akun::where('username', $request->username)->first();

        if ($akun && Hash::check($request->password, $akun->password)) {
            return redirect()->route('home.viewAdmin');
        }

        return redirect()->route('admin.login');
    }
}
