<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisDBController extends Controller
{
    public function index2()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //hasilnya array 2D
        $penggaris = DB::table('penggaris')->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('index2',['penggaris' => $penggaris]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah2()
    {

	// memanggil view tambah
	return view('tambah2');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('penggaris')->insert([
		'penggaris_kode' => $request->kode,
		'penggaris_merk' => $request->merk,
		'penggaris_stok' => $request->stok,
		'penggaris_tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/penggaris');

    }

    public function edit2($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
    // SELECT * FROM pegawai WHERE pegawai_id = x
	$penggaris = DB::table('penggaris')->where('penggaris_id','=',$id)->get();
    // mengambil data dari table pegawai, tanpa filtering
    //$pegawai = DB::table('pegawai')->get(); //hasilnya array 2D
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit2',['penggaris' => $penggaris]);

    }

    // update data pegawai
    public function update(Request $request)
    {
	// update data pegawai
	DB::table('penggaris')->where('penggaris',$request->id)->update([
		'penggaris_kode' => $request->kode,
		'penggaris_merk' => $request->merk,
		'penggaris_stok' => $request->stok,
		'penggaris_tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/penggaris');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('penggaris')->where('pegawai_id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/penggaris');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$penggaris = DB::table('penggaris')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index2',['penggaris' => $penggaris]);

	}
}
