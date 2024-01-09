<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Jurusan;
use App\Models\Home;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::find(1);
        $jurusan = Jurusan::latest()->paginate(10);
        return view('welcomePage', compact('jurusan','home'));
    }

    public function jurusan()
    {
        return view('jurusan');
    }

    public function viewAdmin()
    {
        $jurusan = Jurusan::latest()->paginate(10);
        return view('admin.index',compact('jurusan'));
    }

    public function viewDataHome()
    {
        $home = Home::find(1);
        return view('admin.dataHome',compact('home'));
    }

    public function AdminJurusan()
    {
        $jurusan = Jurusan::latest()->paginate(10);
        return view('admin.jurusan',compact('jurusan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('pohonKeputusan.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $home = Home::find(1);
        return view('admin.editHome', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $home = Home::findOrFail($id);

        $home->update([
            'judul' => $request->judul,
            'ketJudul' => $request->ketJudul,
            'kk' => $request->kk,
            'ketkk' => $request->ketkk,
            'jurusan1' => $request->jurusan1,
            'ket1jurusan1' => $request->ket1jurusan1,
            'ket2jurusan1' => $request->ket2jurusan1,
            'jurusan2' => $request->jurusan2,
            'ket1jurusan2' => $request->ket1jurusan2,
            'ket2jurusan2' => $request->ket2jurusan2,
            'profesi' => $request->profesi,
            'ketprofesi' => $request->ketprofesi,
            'profesi1' => $request->profesi1,
            'ketprofesi1' => $request->ketprofesi1,
            'profesi2' => $request->profesi2,
            'ketprofesi2' => $request->ketprofesi2,
            'profesi3' => $request->profesi3,
            'ketprofesi3' => $request->ketprofesi3,
            'profesi4' => $request->profesi4,
            'ketprofesi4' => $request->ketprofesi4,
        ]);
        
        $home = Home::find(1);
        return redirect()->route('admin.aturHome')->with(['success' => 'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //
    }
}
