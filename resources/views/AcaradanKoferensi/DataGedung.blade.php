@extends('AcaradanKoferensi.header')
@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($data_gedung as $FormGedung)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('gambar')}}/{{ $FormGedung->gambar  }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kelas: {{ $FormGedung->kelas }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Fasilitas: {{ $FormGedung->fasilitas }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Rp. {{ $FormGedung->harga }}</h6>
                    <a href="{{ route('hapusgedung', $FormGedung->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
