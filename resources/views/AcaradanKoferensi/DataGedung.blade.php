<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataGedung</title>
    <style>
        .card-img-top {
            width: 100%;
            height: 200px; 
            object-fit: cover;
        }
        .card{
            margin: 30px;
        }
    </style>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')
<br>
<div class="row">
@foreach ($data_gedung as $FormGedung)

    <div class="card" style="width: 18rem;">
    <img src="{{ asset('gambar')}}/{{ $FormGedung->gambar  }}" class="card-img-top" alt="..">
        <div class="card-body">
        <h5 class="card-title">Kelas: {{$FormGedung->kelas}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Fasilitas: {{$FormGedung->fasilitas}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Rp. {{$FormGedung->harga}}</h6>
            <a href="{{route ('hapusgedung',$FormGedung->id)}}" class="btn btn-danger">Hapus</a>
        </div>
    </div>
@endforeach
</div>
</body>
</html>
@endsection
