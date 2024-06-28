<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GedungModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function simpanData(request $request){
        $data= new GedungModel;
        $data->kelas=$request->kelas;
        $data->fasilitas=$request->fasilitas;
        $data->harga=$request->harga;
        $data->save();
        return redirect()->route('FormGedung');
    }
    public function FormGedung(){
        return view('AcaradanKoferensi.FormGedung');
    }
    public function viewgedung(){
        $paket['judul'] = "Data Gedung";
        $paket['data_gedung'] = GedungModel::All();
        return view("AcaradanKoferensi.DataGedung", $paket);
    }
    public function hapusGedung($id){
        $data=GedungModel::find($id);
        $data->delete();
        return redirect()->route('viewgedung');
    }
    public function DashboardGedung(){
        return view('AcaradanKoferensi.DashboardGedung');
    }


}
