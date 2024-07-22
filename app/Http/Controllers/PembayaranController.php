<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PembayaranModel;
use App\Models\GedungModel;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function FormPembayaran(){
        $gedung=GedungModel::all();
        return view('AcaradanKoferensi.FormPembayaran',compact('gedung'));
    }

    public function viewpembayaran(){
        $paket['judul'] = "Data Pembayaran";
        $paket['data_pembayaran'] = PembayaranModel::All();
        return view("AcaradanKoferensi.DataPembayaran", $paket);
    }

    public function simpanPembayaran(Request $request) {
        // Validasi input secara manual
        $errors = [];
    
        if (empty($request->nama)) {
            $errors['nama'] = 'Nama diperlukan.';
        }
        if (empty($request->nomor_telepon)) {
            $errors['nomor_telepon'] = 'Nomor telepon diperlukan.';
        }
        if (empty($request->fasilitas)) {
            $errors['fasilitas'] = 'Fasilitas diperlukan.';
        }
        if (empty($request->tanggal_acara)) {
            $errors['tanggal_acara'] = 'Tanggal acara diperlukan.';
        }
        if (empty($request->tanggal_selesai)) {
            $errors['tanggal_selesai'] = 'Tanggal selesai diperlukan.';
        }
        if (empty($request->harga)) {
            $errors['harga'] = 'Harga diperlukan.';
        }
        if (empty($request->bayar)) {
            $errors['bayar'] = 'Bayar diperlukan.';
        }
        if (empty($request->kembalian)) {
            $errors['kembalian'] = 'Kembalian diperlukan.';
        }
        if (empty($request->total)) {
            $errors['total'] = 'Total diperlukan.';
        }
    
        // Periksa apakah tanggal acara dan tanggal selesai tidak sama
        if ($request->tanggal_acara === $request->tanggal_selesai) {
            $errors['tanggal_acara'] = 'Tanggal acara dan tanggal selesai tidak boleh sama.';
        }
    
        // Jika ada error, kembali ke halaman sebelumnya dengan error
        if (!empty($errors)) {
            return redirect()->back()->withInput()->withErrors($errors);
        }
        $existingAcara = PembayaranModel::where('tanggal_acara', $request->tanggal_acara)->first();
        $existingSelesai = PembayaranModel::where('tanggal_selesai', $request->tanggal_selesai)->first();
    
        if ($existingAcara || $existingSelesai) {
            return redirect()->route('error')->with('error', 'Tanggal acara atau tanggal selesai sudah ada.');
        }
    
        // Simpan data
        $data = new PembayaranModel;
        $data->nama = $request->nama;
        $data->nomor_telepon = $request->nomor_telepon;
        $data->kelas_gedung = $request->fasilitas;
        $data->tanggal_acara = $request->tanggal_acara;
        $data->tanggal_selesai = $request->tanggal_selesai;
        $data->harga = $request->harga;
        $data->bayar = $request->bayar;
        $data->kembalian = $request->kembalian;
        $data->diskon = $request->diskon;
        $data->total = $request->total;
        $data->save();
    
        return redirect()->route('FormPembayaran');
    }
    

    public function hapuspembayaran($id){
        $data=PembayaranModel::find($id);
        $data->delete();
        return redirect()->route('viewpembayaran');
    }


}
