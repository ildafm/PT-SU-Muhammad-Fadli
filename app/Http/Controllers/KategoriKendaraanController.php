<?php

namespace App\Http\Controllers;

use App\Models\KategoriKendaraan;
use Illuminate\Http\Request;

class KategoriKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Kategori Kendaraan";
        $active = 'kategori_kendaraan';
        return view('kategori_kendaraan.index')->with('title', $title)->with('active', $active);
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
    public function show(KategoriKendaraan $kategoriKendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriKendaraan $kategoriKendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriKendaraan $kategoriKendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriKendaraan $kategoriKendaraan)
    {
        //
    }
}
