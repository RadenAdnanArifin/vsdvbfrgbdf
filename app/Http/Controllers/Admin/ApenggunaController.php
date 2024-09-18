<?php

namespace App\Http\Controllers\Admin;
use App\Models\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApenggunaController extends Controller
{
    function index(){
        $data_karyawan ['pengguna'] = pengguna::all();
        return view("admin/pengguna", $data_karyawan);
    }
}
