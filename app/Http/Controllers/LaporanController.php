<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Penjualan;

class LaporanController extends Controller
{
    
    public function index()
    {
    	
    	return view('laporan');
    }
}
