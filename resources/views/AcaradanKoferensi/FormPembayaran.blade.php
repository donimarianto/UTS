<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formPembayaran</title>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')   

<Form method="POST" action="{{route('simpanPembayaran')}}">
        @csrf
        <div class="container">
        <div>
            <label for="">nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div>
            <label for="">nomor telepon</label>
            <input type="text" class="form-control" name="nomor_telepon">
        </div>
        <div>
            <label for="">Kelas Gedung</label>
                <select type="text" class="form-control" name="kelas_gedung">
                    <option value="">Pilih Fasilitas</option>
                    <option value="">1-Gedung dan Dekor</option>
                    <option value="">2-Gedung</option>
                </select>
        </div>
        <div>
            <label for="">tanggal acara</label>
            <input type="date" class="form-control" name="tanggal_acara">
        </div>
        <div>
            <label for="">harga</label>
            <input type="text" class="form-control" id="harga" name="harga">
        </div>
        <div>
            <label for="">bayar</label>
            <input type="text" class="form-control" name="bayar">
        </div>
        <button type="submit" class="btn btn-hover btn-primary mt-3">Simpan</button>
        </div>
</form>
</body>
</html>
@endsection