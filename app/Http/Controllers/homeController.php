<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Jurusan;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::latest()->paginate(10);
        return view('welcomePage', compact('jurusan'));
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

    public function AdminJurusan()
    {
        $jurusan = Jurusan::latest()->paginate(10);
        return view('admin.jurusan',compact('jurusan'));
    }


    public function universitas()
    {
        return view('jurusan');
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
    public function edit(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //
    }
}
