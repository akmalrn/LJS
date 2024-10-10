<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class ReadMoreController extends Controller
{
    public function ReadMore(){
        $about = AboutUs::first();
        $konfigurasi =Konfigurasi::first();
        return view('admin/show/readmore', compact('about', 'konfigurasi'));
    }
}
