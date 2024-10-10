<?php

namespace App\Http\Controllers;

use App\Models\AtraksiWisata;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AtraksiWisataController extends Controller
{
    public function atraksiwisata(){
        $atraksiWisata = AtraksiWisata::all();
        $konfigurasi = Konfigurasi::first();
        return view('admin/tampilan/view-atraksiwisata', compact('atraksiWisata', 'konfigurasi'));
    }
    public function createAtraksiWisata()
    {
        return view('admin/atraksiwisata/create');
    }

    public function storeAtraksiWisata(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
            'description' => 'required|string|max:1000',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        // Simpan gambar
        $imagePath = $request->file('path')->store('atraksiwisata', 'public');

        // Buat entitas baru dan simpan ke database
        $atraksi = new AtraksiWisata();
        $atraksi->path = $imagePath;
        $atraksi->title = $request->title;
        $atraksi->description = $request->description;
        $atraksi->price = $request->price;
        $atraksi->save();

        return redirect()->route('atraksiwisata')
                         ->with('success', 'Berhasil Di Tambahkan.');
    }


    public function editAtraksiWisata($id)
    {
        $atraksiWisata = atraksiwisata::find($id);
        return view('admin/atraksiwisata/edit', compact('atraksiWisata'));
    }

    public function updateAtraksiWisata(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'description' => 'required|string|max:1000',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'path' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
        ]);

        // Temukan entitas AtraksiWisata berdasarkan ID
        $atraksi = AtraksiWisata::findOrFail($id);

        // Jika ada file gambar baru yang diunggah
        if ($request->hasFile('path')) {
            // Hapus gambar lama dari penyimpanan jika ada
            if ($atraksi->path) {
                Storage::disk('public')->delete($atraksi->path);
            }
            // Simpan gambar baru
            $imagePath = $request->file('path')->store('atraksiwisata', 'public');
            $atraksi->path = $imagePath;
        }

        // Perbarui deskripsi dan harga
        $atraksi->description = $request->description;
        $atraksi->title = $request->title;
        $atraksi->price = $request->price;
        $atraksi->save();

        return redirect()->route('atraksiwisata')
                         ->with('success', 'Berhasil Diperbarui.');
    }

    public function destroyAtraksiWisata($id)
    {
        $atraksiWisata = AtraksiWisata::findOrFail($id);
        // Delete image from storage
        Storage::disk('atraksiwisata')->delete($atraksiWisata->path);
        // Delete paket from database
        $atraksiWisata->delete();

        return redirect()->route('atraksiwisata')
                         ->with('success', 'Berhasil Dihapus.');
    }

    public function showatraksi($id){
        $konfigurasi = Konfigurasi::first();
        $atraksi = AtraksiWisata::findOrFail($id);
        return view('admin/show/atraksi', compact('atraksi', 'konfigurasi'));
    }

    public function AllAtraksiWisata()
    {
        $konfigurasi = Konfigurasi::first();
        $atraksiWisata = AtraksiWisata::all();
        return view('admin/all/atraksiwisata', compact('atraksiWisata', 'konfigurasi'));
    }
}
