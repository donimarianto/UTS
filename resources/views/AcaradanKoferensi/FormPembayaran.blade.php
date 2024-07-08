<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formPembayaran</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            margin-top: 50px;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')
<div class="container">
    <div class="form-container">
        <h2>Form Pembayaran</h2>
        <form method="POST" action="{{route('simpanPembayaran')}}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="text" class="form-control" name="nomor_telepon" required>
            </div>
            <div class="form-group">
                <label for="kelas_gedung">Kelas Gedung</label>
                <select class="form-control" id="fasilitas" name="fasilitas" onchange="updateHarga()" required>
                    <option value="">Pilih Fasilitas</option>
                    @foreach($gedung as $lihat)
                    <option value="{{$lihat->fasilitas}}" data-harga="{{ $lihat->harga }}">{{$lihat->fasilitas}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_acara">Tanggal Acara</label>
                <input type="date" class="form-control" name="tanggal_acara" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" readonly>
            </div>
            <div class="form-group">
                <label for="bayar">Bayar</label>
                <input type="text" class="form-control" name="bayar" id="bayar" onchange="hitungNominal()" required>
            </div>
            <div class="form-group">
                <label for="kembalian">Kembalian</label>
                <input type="number" class="form-control" name="kembalian" id="kembalian" readonly>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">Simpan</button>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function updateHarga() {
        var select = document.getElementById('fasilitas');
        var harga = select.options[select.selectedIndex].getAttribute('data-harga');
        document.getElementById('harga').value = harga;
    }

    function hitungNominal() {
        var bayar = parseFloat(document.getElementById('bayar').value);
        var harga = parseFloat(document.getElementById('harga').value);
        var kembalian = bayar - harga;
        if (kembalian < 0) {
            document.getElementById('kembalian').value = '';
        } else {
            document.getElementById('kembalian').value = kembalian;
        }
    }

    window.onload = updateHarga;
</script>
</body>
</html>
@endsection
