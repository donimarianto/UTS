@extends('AcaradanKoferensi.header')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Data Pembayaran</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Nomor Telepon</th>
                    <th class="text-center">Kelas Gedung</th>
                    <th class="text-center">Tanggal Acara</th>
                    <th class="text-center">Tanggal Selesai</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Diskon</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Bayar</th>
                    <th class="text-center">Kembalian</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data_pembayaran as $DataPembayaran)
                <tr>
                    <td>{{ $DataPembayaran->nama }}</td>
                    <td>{{ $DataPembayaran->nomor_telepon }}</td>
                    <td>{{ $DataPembayaran->kelas_gedung }}</td>
                    <td>{{ $DataPembayaran->tanggal_acara }}</td>
                    <td>{{ $DataPembayaran->tanggal_selesai }}</td>
                    <td>Rp. {{ number_format($DataPembayaran->harga, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($DataPembayaran->diskon, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($DataPembayaran->total, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($DataPembayaran->bayar, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($DataPembayaran->kembalian, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('hapuspembayaran', $DataPembayaran->id) }}" class="btn btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
