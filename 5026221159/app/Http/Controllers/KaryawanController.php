<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Halaman Index: Tampilkan semua data karyawan
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('list', compact('karyawan')); // Menggunakan list.blade.php
    }

    public function create()
    {
        return view('newentry'); // Menggunakan newentry.blade.php
        // Debug redirect
return redirect()->route('karyawan.index')->with('success', 'Data berhasil disimpan!');
dd('Redirecting to karyawan.index');

    }


    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|unique:karyawan|size:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|size:5',
            'departemen' => 'required|integer',
        ]);

        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil ditambahkan!');
        // Debug redirect
return redirect()->route('karyawan.index')->with('success', 'Data berhasil disimpan!');
dd('Redirecting to karyawan.index');

    }

    // Hapus data karyawan
    public function destroy($kodepegawai)
    {
        Karyawan::findOrFail($kodepegawai)->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus!');
    }
}
