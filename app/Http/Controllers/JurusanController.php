<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::latest()->paginate(10);
        return view('jurusan.index', compact('jurusan'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahJurusan');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jurusan = Jurusan::create([
            "nama" => $request->nama,
            "keterangan" => $request->keterangan,
            "profesi" => $request->profesi,
        ]);

        return redirect()->route('home.AdminJurusan')->with('success', 'Data Makanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jurusan = Jurusan::find($id);
    
        if (!$jurusan) {
        // Handle ketika data tidak ditemukan, bisa redirect atau memberikan pesan kesalahan
            return redirect()->route('jurusan.index')->with(['error' => 'Data tidak ditemukan!']);
    }

        return view('jurusan.detail', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        return view('admin.editJurusan', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $jurusan->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'profesi' => $request->profesi,
        ]);
        
        $jurusan = Jurusan::latest()->paginate(10);
        return redirect()->route('home.AdminJurusan')->with(['success' => 'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $jurusan = Jurusan::findOrFail($id);
    $jurusan->delete();

    
    return redirect()->route('home.AdminJurusan')->with(['success' => 'Data Berhasil Dihapus!']);
    
}

}
