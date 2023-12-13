<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class pertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function pertanyaan()
    {
        return view('pertanyaan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$pertanyaan = Pertanyaan::latest()->paginate(10);
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
    public function show(Pertanyaan $pertanyaan)
    {
        //
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
