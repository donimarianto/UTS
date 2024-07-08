<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formDekor</title>
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
    </style>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')
<div class="container">
    <div class="form-container">
        <h2>Form Gedung</h2>
        <form method="POST" action="{{route('simpanDekor')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="dekor">Dekor</label>
                <input type="text" class="form-control" name="dekor" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="text" class="form-control" name="nomor_telepon" required>
            </div>
            <div class="form-group">
                <label for="alamt">Alamat</label>
                <input type="text" class="form-control" name="gambar" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

</body>
</html>
@endsection
