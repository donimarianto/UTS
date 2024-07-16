
@extends('AcaradanKoferensi.header')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title mb-0">Form Gedung <i class="fa fa-building"></i></h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('simpanData') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kelas">Kelas <i class="fa fa-tag"></i></label>
                    <input type="text" class="form-control" name="kelas" required>
                </div>
                <div class="form-group">
                    <label for="fasilitas">Fasilitas <i class="fa fa-wrench"></i></label>
                    <input type="text" class="form-control" name="fasilitas" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga <i class="fa fa-money"></i></label>
                    <input type="text" class="form-control" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar <i class="fa fa-image"></i></label>
                    <input type="file" class="form-control-file" name="gambar" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
