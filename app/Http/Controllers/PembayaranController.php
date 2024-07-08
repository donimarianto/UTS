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

    public function simpanPembayaran(request $request){
        $data= new PembayaranModel;
        $data->nama=$request->nama;
        $data->nomor_telepon=$request->nomor_telepon;
        $data->kelas_gedung=$request->fasilitas;
        $data->tanggal_acara=$request->tanggal_acara;
        $data->harga=$request->harga;
        $data->bayar=$request->bayar;
        $data->kembalian=$request->kembalian;
        $data->save();
        return redirect()->route('FormPembayaran');
    }

    public function hapuspembayaran($id){
        $data=PembayaranModel::find($id);
        $data->delete();
        return redirect()->route('viewpembayaran');
    }


}
