<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function header()
    {
        $konfigurasi = Konfigurasi::first();
        dd($konfigurasi);
        return view('header', compact('konfigurasi'));
    }
}
