<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Keranjang</title>
</head>
<body>
    <h1>Tambah Data Keranjang</h1>
    <form action="{{ route('keranjang.store') }}" method="POST">
        @csrf
        <label>Kode Barang:</label><br>
        <input type="text" name="KodeBarang"><br>

        <label>Jumlah Pembelian:</label><br>
        <input type="text" name="Jumlah"><br>

        <label>Harga:</label><br>
        <input type="text" name="Harga"><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
