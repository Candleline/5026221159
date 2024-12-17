@extends('layoutmain')

@section('content')
<h1>Tambah Data Karyawan</h1>
<form action="{{ route('karyawan.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Kode Pegawai</label>
        <div class="col-sm-10">
            <input type="text" name="kodepegawai" class="form-control" required maxlength="5">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" name="namalengkap" class="form-control" required maxlength="50">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <input type="text" name="divisi" class="form-control" required maxlength="5">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Departemen</label>
        <div class="col-sm-10">
            <input type="number" name="departemen" class="form-control" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
