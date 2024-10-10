<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;

class FooterController extends Controller
{
    public function footer(){
    $konfigurasi = Konfigurasi::first();
    return view('footer', compact('konfigurasi'));
    }
}
