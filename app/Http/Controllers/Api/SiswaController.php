<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response([
            'message' => 'Data berhasil tampil',
            'data' => Siswa::all()
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nis' => 'required | integer',
            'nama' => 'required',
            'alamat' => 'required | string',
            'sekolah_id' => 'required| integer',
        ]);

        return response([
            'message' => 'Data berhasil dibuat',
            'data' => Siswa::create($validator)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return response([
                'message' => 'Data berhasil tampil',
                'data' => Siswa::findOrFail($id)
            ], 200);
        } catch (\Throwable $id) {
            return response([
                'message' => 'Data tidak ditemukan',
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required | integer',
            'nama' => 'required',
            'alamat' => 'required | string',
            'sekolah_id' => 'required| integer',
        ]);

        return response([
            'message' => 'Data berhasil diperbarui',
            'data' => Siswa::create($validator)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::find($id)->delete();
        return response([
            'message' => 'Data berhasil dihapus',
        ], 200);
    }
}
