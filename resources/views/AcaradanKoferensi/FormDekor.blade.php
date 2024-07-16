@extends('AcaradanKoferensi.header')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title mb-0">Form Dekor <i class="fa fa-paint-brush"></i></h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('simpanDekor') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="dekor">Dekor <i class="fa fa-paint-brush"></i></label>
                    <input type="text" class="form-control" name="dekor" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama <i class="fa fa-user"></i></label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon <i class="fa fa-phone"></i></label>
                    <input type="text" class="form-control" name="nomor_telepon" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat <i class="fa fa-map-marker"></i></label>
                    <input type="text" class="form-control" name="alamat" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
