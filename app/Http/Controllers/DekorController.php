<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DekorModel;
use Illuminate\Http\Request;

class DekorController extends Controller
{
    public function FormDekor(){
        return view('AcaradanKoferensi.FormDekor');
    }

    public function viewdekor(){
        $paket['judul'] = "Data Dekor";
        $paket['data_dekor'] = DekorModel::All();
        return view("AcaradanKoferensi.DataDekor", $paket);
    }

    public function simpanDekor(request $request){
        $data= new DekorModel;
        $data->dekor=$request->dekor;
        $data->nama=$request->nama;
        $data->nomor_telepon=$request->nomor_telepon;
        $data->alamat=$request->alamat;
        $data->save();
        return redirect()->route('FormDekor');
    }

    public function hapusDekor($id){
        $data=DekorModel::find($id);
        $data->delete();
        return redirect()->route('viewdekor');
    }
}
