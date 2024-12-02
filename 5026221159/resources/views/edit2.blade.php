@extends('template')

@section('tulisan1','Data Penggaris')

@section('link1')
<a href="/penggaris"> Kembali</a>
@endsection

@section('konten')
	@foreach($penggaris as $p)
	<form action="/penggaris/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->penggaris_id }}"> <br/>
		<div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" required="required" value="{{ $p->pegawai_nama }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="kode" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
              <input type="text" name="kode" class="form-control" id="jabatan" required="required" value="{{ $p->kode_penggaris }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
              <input type="number" name="stok" class="form-control" id="stok" required="required" value="{{ $p->penggaris_stok }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <textarea name="merk" class="form-control" id="merk" required="required">{{ $p->penggaris_merk }}</textarea>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-10">
              <center><input type="text" name="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
          </div>

	</form>
	@endforeach
	@endsection


