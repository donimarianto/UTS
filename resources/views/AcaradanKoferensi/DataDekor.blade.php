@extends('AcaradanKoferensi.header')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Data Dekor</h2>
    <div class="row">
        @foreach ($data_dekor as $DataDekor)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Dekor: {{ $DataDekor->dekor }}</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th class="w-25">Nama</th>
                                <td>{{ $DataDekor->nama }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>{{ $DataDekor->nomor_telepon }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $DataDekor->alamat }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('hapusDekor', $DataDekor->id) }}" class="btn btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
