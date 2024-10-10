<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function galery(){
        $Galery = Galery::all();
        return view('admin/tampilan/view-Galery', compact('Galery'));
    }
    public function createGalery()
    {
        return view('admin/galery/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeGalery(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $imagePath = $request->file('path')->store('Galerys', 'public');
        $Galery = new Galery();
        $Galery->path = $imagePath;
        $Galery->save();

        return redirect()->route('Galery')->with('success', 'Berhasil Diupload');
    }
    public function editGalery($id)
    {
        $Galery = Galery::find($id);
        return view('admin/Galery/edit', compact('Galery'));
    }

    public function updateGalery(Request $request, $id)
    {
        $request->validate([
            'path' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
        ]);

        $Galery = Galery::findOrFail($id);
        if ($request->hasFile('path')) {
            // Delete old image
            Storage::disk('public')->delete($Galery->path);
            // Store new image
            $imagePath = $request->file('path')->store('Galerys', 'public');
            $Galery->path = $imagePath;
        }

        $Galery->save();

        return redirect()->route('Galery')->with('success', 'Berhasil Diperbarui');
    }

    public function destroyGalery($id)
    {
        $Galery = Galery::findOrFail($id);
        // Delete image from storage
        Storage::disk('Galery')->delete($Galery->path);
        // Delete Galery from database
        $Galery->delete();

        return redirect()->route('Galery')->with('success', 'Berhasil Dihapus');
    }

    public function allGaleri()
    {
        $konfigurasi = Konfigurasi::first();
        $galery = Galery::all();
        return view('admin/all/galeri', compact('galery', 'konfigurasi'));
    }
}
