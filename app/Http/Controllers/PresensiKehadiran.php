<?php

namespace App\Http\Controllers;
use App\Models\PresensiHarian as PresensiHarianModel;

use Illuminate\Http\Request;

class PresensiKehadiran extends Controller
{
    public function lihatData (){
        $r = PresensiHarianModel::get();
        return ['coun'=> $r-> count(), 'data'=> $r];
    }

    public function ambilData ($id='')
    {
        $r = PresensiHarianModel::get();
        return (new PresensiHarianModel())->find($id, ['id']);
    }

    public function simpanData (Request $request)
    {
        $r = PresensiHarianModel::UpdateOrCreate(['id'=> $request->id], $request->all());
        ;
    }

    public function hapusData($id) 
    {
        $r = PresensiHarianModel::whereRaw('id= ?', [$id])->delete();
        return ['result'=> $r];
    }
}
