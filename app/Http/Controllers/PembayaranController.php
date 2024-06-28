<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PembayaranModel;
use App\Models\GedungModel;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function FormPembayaran(){
        return view('AcaradanKoferensi.FormPembayaran');
    }

    public function viewpembayaran(){
        $paket['judul'] = "Data Pembayaran";
        $paket['data_pembayaran'] = PembayaranModel::All();
        return view("AcaradanKoferensi.DataPembayaran", $paket);
    }

    public function simpanPembayaran(request $request){
        $data= new PembayaranModel;
        $data->nama=$request->nama;
        $data->nomor_telepon=$request->nomor_telepon;
        $data->kelas_gedung=$request->kelas_gedung;
        $data->tanggal_acara=$request->tanggal_acara;
        $data->harga=$request->harga;
        $data->bayar=$request->bayar;
        $data->save();
        return redirect()->route('FormPembayaran')->with('success', 'Berhasil melakukan pembayaran.');
    }

    public function hapuspembayaran($id){
        $data=PembayaranModel::find($id);
        $data->delete();
        return redirect()->route('viewpembayaran');
    }


}
