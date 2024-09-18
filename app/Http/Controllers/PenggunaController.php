<?php

namespace App\Http\Controllers;

use App\Models\Pengguna as PenggunaModel;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function lihatData()
    {
        $r = penggunaModel::get();
        return ['count'=> $r ->count(), 'data' => $r];
    }
    
    public function ambilData($nip= '')
    {
        $r = PenggunaModel::get();
        return (new PenggunaModel())->find($nip, ['nip','nama', 'level']);
    }

    public function create(){
        
    }

    public function simpanData()
    {
        $nip = request('nip');
        $r =(new PenggunaModel());
        if ($r == null || $nip == ''){
            $r = new PenggunaModel();
        }
        $r->nip = request('nip');
        $r->nama = request('nama');
        $r->level = request('level');
        $r->sandi = request('sandi');
        $ret = $r->save();
        return ['result'=> $ret];
    }

    public function hapusData($nipnip = '')
    {
    $r = PenggunaModel::whereRaw('nip = ?', [$nipnip])->delete();
    return ['result' => $r];
    }

}
