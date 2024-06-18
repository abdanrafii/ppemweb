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
    // Validasi input
    $validatedData = $request->validate([
        'merk' => 'required',
        'model' => 'required',
        'tahun' => 'required|numeric',
        'nomor_polisi' => 'required',
        'warna' => 'required',
        'gambar' => 'required|mimes:jpg,png,jpeg|max:2048',
    ]);

    // Mengambil file yang diunggah
    $file = $request->file('gambar');
    // Membuat nama file unik dengan menambahkan timestamp
    $fileName = time() . '_' . $file->getClientOriginalName();
    // Memindahkan file ke direktori public/uploads

    $file->storeAs('public/uploads', $fileName);
    $imagePath = '/storage/uploads/' . $fileName;

    // Menyimpan data kendaraan termasuk nama file gambar
    $kendaraan = new Kendaraan($validatedData);
    $kendaraan->gambar = $imagePath; // Pastikan menggunakan kolom 'gambar'
    $kendaraan->save();

    // Redirect ke halaman index dengan pesan sukses
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
        $validatedData = $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required|numeric',
            'nomor_polisi' => 'required',
            'warna' => 'required',
            'gambar' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $data = Kendaraan::find($id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);
            $imagePath = '/storage/uploads/' . $fileName;
            $validatedData['gambar'] = $imagePath;
        }

        $data->update([
            'merk' => $validatedData['merk'],
            'model' => $validatedData['model'],
            'tahun' => $validatedData['tahun'],
            'nomor_polisi' => $validatedData['nomor_polisi'],
            'warna' => $validatedData['warna'],
            'gambar' => $validatedData['gambar'],
        ]);

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
