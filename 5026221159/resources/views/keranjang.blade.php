<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h1>Daftar Keranjang Belanja</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->Jumlah }}</td>
                <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Batal</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('keranjang.create') }}">Beli</a>
</body>
</html>
