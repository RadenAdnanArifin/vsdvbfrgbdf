<?php

namespace App\Http\Controllers;
use App\Models\PetaKehadiran as PetaKehadiranModel;


use Illuminate\Http\Request;

class PetaKehadiran extends Controller
{
    public function lihatData (){
        $r = PetaKehadiranModel::get();
        return ['coun'=> $r-> count(), 'data'=> $r];
    }

    public function ambilData ($id='')
    {
        $r = PetaKehadiranModel::get();
        return (new PetaKehadiranModel())->find($id, ['id']);
    }

    public function simpanData (Request $request)
    {
        $r = PetaKehadiranModel::UpdateOrCreate(['id'=> $request->id], $request->all());
        ;
    }

    public function hapusData($id) 
    {
        $r = PetaKehadiranModel::whereRaw('id= ?', [$id])->delete();
        return ['result'=> $r];
    }
}
