<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use App\Models\PaketWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketWisataController extends Controller
{
    public function paketWisata(){
        $paketWisata = PaketWisata::all();
        return view('admin/tampilan/view-paketwisata', compact('paketWisata'));
    }
    public function createPaketWisata()
    {
        return view('admin/paketwisata/create');
    }

    public function storePaketWisata(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        // Simpan gambar
        $imagePath = $request->file('path')->store('paketwisata', 'public');

        // Buat entitas baru dan simpan ke database
        $atraksi = new PaketWisata();
        $atraksi->path = $imagePath;
        $atraksi->title = $request->title;
        $atraksi->description = $request->description;
        $atraksi->price = $request->price;
        $atraksi->save();

        return redirect()->route('paketwisata')
                         ->with('success', 'Atraksi Wisata created successfully.');
    }


    public function editPaketWisata($id)
    {
        $paketWisata = PaketWisata::find($id);
        return view('admin/PaketWisata/edit', compact('paketWisata'));
    }

    public function updatePaketWisata(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'path' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
        ]);

        // Temukan entitas PaketWisata berdasarkan ID
        $atraksi = PaketWisata::findOrFail($id);

        // Jika ada file gambar baru yang diunggah
        if ($request->hasFile('path')) {
            // Hapus gambar lama dari penyimpanan jika ada
            if ($atraksi->path) {
                Storage::disk('public')->delete($atraksi->path);
            }
            // Simpan gambar baru
            $imagePath = $request->file('path')->store('paketwisata', 'public');
            $atraksi->path = $imagePath;
        }

        // Perbarui deskripsi dan harga
        $atraksi->description = $request->description;
        $atraksi->title = $request->title;
        $atraksi->price = $request->price;
        $atraksi->save();

        return redirect()->route('paketwisata')
                         ->with('success', 'Atraksi Wisata updated successfully.');
    }

    public function destroyPaketWisata($id){
        $PaketWisata = PaketWisata::findOrFail($id);
        // Delete image from storage
        Storage::disk('paketwisata')->delete($PaketWisata->path);
        // Delete paket from database
        $PaketWisata->delete();

        return redirect()->route('paketwisata')
                         ->with('success', 'Atraksi Wisata deleted successfully.');
    }
    public function showPaketWisata($id){
        $konfigurasi = Konfigurasi::first();
        $paketwisata = PaketWisata::findOrFail($id);
        return view('admin/show/paketwisata', compact('paketwisata', 'konfigurasi'));
    }

    public function allPaketWisata()
    {
        $konfigurasi = Konfigurasi::first();
        $paketWisata = PaketWisata::all();
        return view('admin/all/paketwisata', compact('paketWisata', 'konfigurasi'));
    }
}
