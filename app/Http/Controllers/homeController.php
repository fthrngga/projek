<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcomePage');
    }

    public function jurusan()
    {
        return view('jurusan');
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
