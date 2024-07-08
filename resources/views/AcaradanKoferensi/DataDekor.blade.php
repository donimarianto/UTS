<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataDekor</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table {
            margin-top: 20px;
        }
        thead {
            background-color: #f8f9fa;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
@extends('AcaradanKoferensi.header')
@section('content')
<div class="container">
    <h2 class="text-center my-4">Data Dekor</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">Dekor</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Nomor Telepon</th>
                <th class="text-center">Alamat</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data_dekor as $DataDekor)
            <tr>
                <td>{{ $DataDekor->dekor }}</td>
                <td>{{ $DataDekor->nama }}</td>
                <td>{{ $DataDekor->nomor_telepon }}</td>
                <td>{{ $DataDekor->alamat }}</td>
                <td><a href="{{ route('hapusDekor', $DataDekor->id) }}" class="btn btn-danger">Hapus</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
