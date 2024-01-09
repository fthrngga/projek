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
        $pertanyaan = Pertanyaan::latest()->paginate(10);
        return view('admin.dataPertanyaan', compact('pertanyaan'));
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
        return view('admin.tambahPertanyaan');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pertanyaan = Pertanyaan::create([
            "pertanyaan" => $request->pertanyaan,
        ]);

        return redirect()->route('admin.tambahPertanyaan')->with('success', 'Data Pertanyaan berhasil ditambahkan!');
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
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('admin.editPertanyaan', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->update([
            'pertanyaan' => $request->pertanyaan,
        ]);   
        $pertanyaan = Pertanyaan::latest()->paginate(10);
        return redirect()->route('pertanyaan.index')->with(['success' => 'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //
    }
}
