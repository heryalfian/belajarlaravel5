<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();

        // dd($data);
        // echo 'test';
        return view('tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sekolah = Sekolah::all();
        // dd('jalankan tambah data');
        return view('tambah', compact('sekolah'));
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
        // dd('siap tambah');
        Siswa::create($validator);
        return redirect('Siswa')->with('success', 'Data Berhasil Diinput');
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
        // dd('ini edit');
        $data = Siswa::find($id);
        $sekolah = Sekolah::all();
        return view('edit', compact('data', 'sekolah'));
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
        // dd($request);
        Siswa::find($id)->update($validator);
        return redirect('Siswa')->with('success', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd('ini hapus');
        Siswa::find($id)->delete();
        return redirect('Siswa')->with('success', 'Data Berhasil terhapus');
    }
}
