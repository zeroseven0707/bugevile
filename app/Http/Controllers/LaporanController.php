<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $data['pemesanan'] = Pemesanan::all();
        return view('laporan',$data);
    }
}
