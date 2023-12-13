<?php

namespace App\Http\Controllers;

use App\Models\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universitas = Universitas::latest()->paginate(10);
        return view('universitas.index', compact('universitas'));
    }

    public function getCustomers()
    {
        $customers = [
            [
                "Name" => "Alfreds Futterkiste",
                "City" => "Berlin",
                "Country" => "Germany"
            ],
            [
                "Name" => "Ana Trujillo Emparedados y helados",
                "City" => "México D.F.",
                "Country" => "Mexico"
            ],
            // Tambahkan data pelanggan lainnya sesuai kebutuhan
        ];

    return response()->json(['customers' => $customers]);
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
    public function show(Universitas $universitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Universitas $universitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Universitas $universitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Universitas $universitas)
    {
        //
    }
}
