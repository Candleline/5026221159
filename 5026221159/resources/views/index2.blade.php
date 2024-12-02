<!DOCTYPE html>
@extends('template')
@section('tulisan1','Data Penggaris')

@section('link1')
    <a href="/penggaris/tambah2" class="btn btn-primary"> + Tambah Stok Penggaris</a>
@endsection

@section('konten')

	<br/>

	<form action="/penggaris/cari" method="GET">
    <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Merk Penggaris :</label>
            <div class="col-sm-6">

			  <input type="text" name="cari" class="form-control" id="nama" placeholder="Cari merk penggaris .." value="{{ old('cari') }}">
            </div>
			<div class="col-sm-4">

			<input type="submit" value="CARI" class="btn btn-success">
		   </div>
          </div>


	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stok</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($penggaris as $p)
		<tr>
			<td>{{ $p->kode_penggaris }}</td>
			<td>{{ $p->merk_penggaris }}</td>
			<td>{{ $p->stok_penggaris }}</td>
			<td>{{ $p->tersedia_penggaris }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->penggaris_id }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/pegawai/hapus/{{ $p->penggaris_id }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i</a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $penggaris->currentPage() }} <br/>
	Jumlah Data : {{ $penggaris->total() }} <br/>
	Data Per Halaman : {{ $penggaris->perPage() }} <br/>


	{{ $penggaris->links() }}


@endsection
