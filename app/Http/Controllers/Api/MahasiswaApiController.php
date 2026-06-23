<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(10);
        return response()->json([
            'success' => true,
            'message' => 'Daftar data mahasiswa berhasil diambil',
            'data' => $mahasiswas
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        $mahasiswa = Mahasiswa::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Data mahasiswa berhasil ditambahkan',
            'data' => $mahasiswa
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail data mahasiswa berhasil diambil',
            'data' => $mahasiswa
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Data mahasiswa berhasil diperbarui',
            'data' => $mahasiswa
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data mahasiswa berhasil dihapus'
        ], 200);
    }
}