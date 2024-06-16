<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kendaraan::all();
        return view('kendaraan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required|numeric',
            'nomor_polisi' => 'required',
            'warna' => 'required',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('status', 'Data Kendaraan berhasil disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kendaraan::find($id);
        return view('kendaraan.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required|numeric',
            'nomor_polisi' => 'required',
            'warna' => 'required',
        ]);

        $data = Kendaraan::find($id);
        $data->update($request->all());
        return redirect()->route('kendaraan.index')->with('status', 'Data Kendaraan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Kendaraan::find($id);
        $data->delete();
        return redirect()->route('kendaraan.index')->with('status', 'Data Kendaraan berhasil dihapus');
    }
}
