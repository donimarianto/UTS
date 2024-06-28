<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataPembayaran</title>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td class="text-center">nama</td>
                <td class="text-center">nomor telepon</td>
                <td class="text-center">kelas gedung</td>
                <td class="text-center">tanggal acara</td>
                <td class="text-center">harga</td>
                <td class="text-center">bayar</td>
            </tr>
        </thead>
        <tbody>
        @foreach ($data_pembayaran as $DataPembayaran)
            <tr>
                <td>{{ $DataPembayaran->nama }}</td>
                <td>{{ $DataPembayaran->nomor_telepon }}</td>
                <td>{{ $DataPembayaran->kelas_gedung }}</td>
                <td>{{ $DataPembayaran->tanggal_acara }}</td>
                <td>Rp. {{ $DataPembayaran->harga }}</td>
                <td>Rp. {{ $DataPembayaran->bayar }}</td>
                <td><a href="{{route ('hapuspembayaran',$DataPembayaran->id)}}" class="btn btn-danger">Hapus</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection