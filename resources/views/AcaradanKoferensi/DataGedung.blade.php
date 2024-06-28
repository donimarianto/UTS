<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataGedung</title>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')

@foreach ($data_gedung as $FormGedung)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Kelas: {{$FormGedung->kelas}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Fasilitas: {{$FormGedung->fasilitas}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Rp. {{$FormGedung->harga}}</h6>
            <a href="{{route ('hapusgedung',$FormGedung->id)}}" class="btn btn-danger">Hapus</a>
        </div>
    </div>
@endforeach
</body>
</html>
@endsection