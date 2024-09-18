<?php

namespace App\Http\Controllers\Admin;
use App\Models\Pengguna;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdashboardController extends Controller
{
    function index (){
        $data ['pengguna'] = Pengguna::all();
        $data ['total_pengguna'] = Pengguna::count();
        return view("admin/dashbroad",$data);
    }
}
