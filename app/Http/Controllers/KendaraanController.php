<?php

namespace App\Http\Controllers;

use App\Models\KategoriKendaraan;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Kendaraan";
        $active = 'kendaraan';
        $kendaraans = Kendaraan::all();

        return view('kendaraan.index')
            ->with('title', $title)
            ->with('active', $active)
            ->with('kendaraans', $kendaraans);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Kendaraan";
        $active = 'kendaraan';

        $kategoriKendaraans = KategoriKendaraan::all();
        // dd($kategoriKendaraans);

        return view("kendaraan.create")
            ->with('title', $title)
            ->with('active', $active)
            ->with('kategoriKendaraans', $kategoriKendaraans);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $validateData = $request->validate([
                'nomor_polisi' => 'required',
                'merek' => 'required',
                'status' => 'required',
                'kategori_kendaraan' => 'required',
                'deskripsi' => 'required',
            ]);
            // dd($validateData);

            $kendaraan = new Kendaraan();
            $kendaraan->nomor_polisi = $validateData['nomor_polisi'];
            $kendaraan->merek = $validateData['merek'];
            $kendaraan->status = $validateData['status'];
            $kendaraan->kategori_id = $validateData['kategori_kendaraan'];
            $kendaraan->deskripsi = $validateData['deskripsi'];

            $kendaraan->save();
            return redirect()->route('kendaraan.index')->with('pesan', "Berhasil menambahkan data kendaraan");
        } catch (\Throwable $th) {
            return redirect()->route('kendaraan.index')->with('pesan_error', "Gagal menambahkan data kendaraan");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        //
        $title = "Kendaraan";
        $active = 'kendaraan';

        $kategoriKendaraans = KategoriKendaraan::all();

        return view("kendaraan.edit")
            ->with('title', $title)
            ->with('active', $active)
            ->with('kategoriKendaraans', $kategoriKendaraans)
            ->with('kendaraan', $kendaraan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        //
        try {
            $validateData = $request->validate([
                'nomor_polisi' => 'required',
                'merek' => 'required',
                'kategori_kendaraan' => 'required',
                'deskripsi' => 'required',
            ]);

            $kendaraan->update([
                'nomor_polisi' => $validateData['nomor_polisi'],
                'merek' =>  $validateData['merek'],
                'kategori_id' => $validateData['kategori_kendaraan'],
                'deskripsi' => $validateData['deskripsi'],
            ]);

            return redirect()->route('kendaraan.index')->with('pesan', "Berhasil mengubah data kendaraan");
        } catch (\Throwable $th) {
            return redirect()->route('kendaraan.index')->with('pesan_error', "Gagal mengubah data kendaraan");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        //
        try {
            $kendaraan->delete();
            return redirect()->route('kendaraan.index')->with('pesan', "Hapus data kendaraan dengan nomor polisi $kendaraan->nomor_polisi berhasil dilakukan");
        } catch (\Throwable $th) {
            return redirect()->route('kendaraan.index')->with('pesan_error', "Gagal menghapus data kendaraan dengan nomor polisi $kendaraan->nomor_polisi");
        }
    }
}
