@extends('template')

@section('tulisan1','Data Penggaris')

@section('link1')
<a href="/penggaris"> Kembali</a>
@endsection

@section('konten')
	<form action="/penggaris/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
              <input type="text" name="tersedia" class="form-control" id="tersedia" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merk" class="form-control" id="merk" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
              <input type="number" name="stok" class="form-control" id="stok" required="required">
            </div>
          </div>
          <div class="row mb-3">
            <label for="kode" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
              <textarea name="kode" class="form-control" id="kode" required="required"></textarea>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-10">
              <center><input type="text" name="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
          </div>


	</form>
@endsection
