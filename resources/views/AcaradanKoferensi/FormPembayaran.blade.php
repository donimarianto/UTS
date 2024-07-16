@extends('AcaradanKoferensi.header')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title mb-0">Form Pembayaran <i class="fa fa-credit-card"></i></h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('simpanPembayaran') }}">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama <i class="fa fa-user"></i></label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon <i class="fa fa-phone"></i></label>
                    <input type="text" class="form-control" name="nomor_telepon" required>
                </div>
                <div class="form-group">
                    <label for="kelas_gedung">Kelas Gedung <i class="fa fa-building"></i></label>
                    <select class="form-control" id="fasilitas" name="fasilitas" onchange="updateHarga()" required>
                        <option value="">Pilih Fasilitas</option>
                        @foreach($gedung as $lihat)
                        <option value="{{ $lihat->fasilitas }}" data-harga="{{ $lihat->harga }}">{{ $lihat->fasilitas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_acara">Tanggal Acara <i class="fa fa-calendar"></i></label>
                    <input type="date" class="form-control" id="tanggal_acara" name="tanggal_acara" onchange="updateHarga()" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai <i class="fa fa-calendar"></i></label>
                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" onchange="updateHarga()" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga <i class="fa fa-money"></i></label>
                    <input type="number" class="form-control" id="harga" name="harga" readonly>
                </div>
                <div class="form-group">
                    <label for="bayar">Bayar <i class="fa fa-money"></i></label>
                    <input type="text" class="form-control" name="bayar" id="bayar" onchange="hitungNominal()" required>
                </div>
                <div class="form-group">
                    <label for="kembalian">Kembalian <i class="fa fa-money"></i></label>
                    <input type="number" class="form-control" name="kembalian" id="kembalian" readonly>
                </div>
                <div class="form-group">
                    <label for="diskon">Diskon <i class="fa fa-percent"></i></label>
                    <input type="number" class="form-control" name="diskon" id="diskon" readonly>
                </div>
                <div class="form-group">
                    <label for="total">Total <i class="fa fa-money"></i></label>
                    <input type="number" class="form-control" name="total" id="total" readonly>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>

<script>
    function updateHarga() {
        var select = document.getElementById('fasilitas');
        var harga = select.options[select.selectedIndex].getAttribute('data-harga');
        document.getElementById('harga').value = harga;
        hitungNominal();
    }

    function hitungNominal() {
        var bayar = parseFloat(document.getElementById('bayar').value);
        var harga = parseFloat(document.getElementById('harga').value);

        var tanggal_acara = new Date(document.getElementById('tanggal_acara').value);
        var tanggal_selesai = new Date(document.getElementById('tanggal_selesai').value);
        var selisihHari = Math.ceil((tanggal_selesai - tanggal_acara) / (1000 * 60 * 60 * 24));

        var diskon = 0;
        if (selisihHari > 5) {
            diskon = harga * 0.05;
        }
        var total = harga - diskon;
        var kembalian = bayar - total;

        document.getElementById('diskon').value = diskon.toFixed(2);
        document.getElementById('total').value = total.toFixed(2);
        document.getElementById('kembalian').value = kembalian.toFixed(2);
    }

    window.onload = updateHarga;
</script>
@endsection
