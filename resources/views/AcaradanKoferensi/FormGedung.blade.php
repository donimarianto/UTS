<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formGedung</title>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')   

<Form method="POST" action="{{route('simpanData')}}">
        @csrf
        <div class="container">
        <div>
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas">
        </div>
        <div>
            <label for="">Fasilitas</label>
            <input type="text" class="form-control" name="fasilitas">
        </div>
        <div>
            <label for="">Harga</label>
            <input type="text" class="form-control" name="harga">
        </div>
        <button type="submit" class="btn btn-hover btn-primary mt-3">Simpan</button>
        </div>
</form>
</body>
</html>
@endsection