<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use App\Models\KategoriArtikel;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function kategoriartikel()
    {
        $kategoriartikels = KategoriArtikel::all();
        return view('admin/tampilan/view-kategoriartikel', compact('kategoriartikels'));
    }

    public function createkategoriartikel()
    {
        return view('admin\artikel\createkategoriartikel');
    }

    public function storekategoriartikel(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        KategoriArtikel::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategoriartikel');
    }

    public function editkategoriartikel($id)
    {
        $kategoriartikel = KategoriArtikel::findOrFail($id);
        return view('admin/artikel/editkategori', compact('kategoriartikel'));
    }

    public function updatekategoriartikel(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategoriartikel = KategoriArtikel::findOrFail($id);
        $kategoriartikel->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategoriartikel');
    }

    public function destroykategoriartikel($id)
    {
        $kategoriartikel = KategoriArtikel::findOrFail($id);
        $kategoriartikel->delete();

        return redirect()->route('kategoriartikel');
    }

    public function artikels()
    {
        $artikels = Artikels::all();
        $kategoriartikels = KategoriArtikel::all();
        return view('admin/tampilan/view-artikels', compact('kategoriartikels', 'artikels'));
    }

    public function createartikels()
    {
        $kategoriartikels = KategoriArtikel::all();
        return view('admin/artikel/createartikels', compact('kategoriartikels'));
    }

    public function storeartikels(Request $request)
    {
        $request->validate([
            'kategori_artikel_id' => 'required|exists:kategori_artikels,id',
            'title' => 'required|string|max:255',
            'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096', // Validasi gambar
            'short_description' => 'nullable|string|max:255',
            'description' => 'required|string',
        ]);

        $path = $request->file('path')->store('artikels', 'public');

        Artikels::create([
            'kategori_artikel_id' => $request->kategori_artikel_id,
            'title' => $request->title,
            'path' => $path,
            'short_description' => $request->short_description,
            'description' => $request->description,
        ]);
        return redirect()->route('artikels')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function editartikels($id)
    {
        $artikel = Artikels::findOrFail($id);
        $kategoriartikels = KategoriArtikel::all();
        return view('admin/artikel/editartikel', compact('artikel', 'kategoriartikels'));
    }

    // Fungsi untuk update artikel di database
    public function updateartikels(Request $request, $id)
    {
        $request->validate([
            'kategori_artikel_id' => 'required|exists:kategori_artikels,id',
            'title' => 'required|string|max:255',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096', // Validasi gambar
            'short_description' => 'nullable|string|max:255',
            'description' => 'required|string',
        ]);

        $artikel = Artikels::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('path')) {
            // Delete old image if exists
            if ($artikel->path && Storage::disk('public')->exists($artikel->path)) {
                Storage::disk('public')->delete($artikel->path);
            }
            $path = $request->file('path')->store('artikels', 'public');
        } else {
            $path = $artikel->path;
        }

        $artikel->update([
            'kategori_artikel_id' => $request->kategori_artikel_id,
            'title' => $request->title,
            'path' => $path,
            'short_description' => $request->short_description,
            'description' => $request->description,
        ]);


        return redirect()->route('artikels')->with('success', 'Artikel berhasil diupdate.');
    }

    // Fungsi untuk menghapus artikel dari database
    public function destroyartikels($id)
    {
        $artikel = Artikels::findOrFail($id);
        // Delete image from storage
        Storage::disk('artikels')->delete($artikel->path);
        // Delete artikel from database
        $artikel->delete();

        return redirect()->route('artikels')->with('success', 'Artikel berhasil dihapus.');
    }
    public function showArtikel($id)
    {
        $konfigurasi = Konfigurasi::first();
        $artikel = Artikels::find($id);
        return view('admin/show/artikel', compact('artikel', 'konfigurasi'));
    }

    public function allArtikel()
    {
        $konfigurasi = Konfigurasi::first();
        $artikel = Artikels::all();
        return view('admin/all/artikel', compact('artikel', 'konfigurasi'));
    }
}
