<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Artikels;
use App\Models\AtraksiWisata;
use App\Models\Benefit;
use App\Models\Galery;
use App\Models\KategoriArtikel;
use App\Models\Konfigurasi;
use App\Models\Mitra;
use App\Models\PaketWisata;
use App\Models\Slider;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class dashboardkbcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboardkbc()
    {
        $whyus = WhyUs::all();
        $konfigurasi = Konfigurasi::first();
        $artikel = Artikels::latest()->take(6)->get();
        $kategoriartikel = KategoriArtikel::all();
        $Galery = Galery::latest()->take(8)->get();
        $paketWisata = PaketWisata::latest()->take(6)->get();
        $atraksiWisata = AtraksiWisata::latest()->take(6)->get();
        $sliders = Slider::all(); // Mengambil semua data slider
        $aboutUs = AboutUs::latest()->take(1)->get();
        $benefit = Benefit::all();
        $mitra = Mitra::all();

        // Pastikan untuk memberikan nilai default jika konfigurasi null
        $konfigurasiTitle = $konfigurasi->title ?? ''; // Default to empty string if null

        return view('dashboardkbc', compact('sliders', 'aboutUs', 'atraksiWisata', 'paketWisata', 'Galery', 'kategoriartikel', 'artikel', 'konfigurasi', 'whyus', 'konfigurasiTitle', 'benefit', 'mitra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
