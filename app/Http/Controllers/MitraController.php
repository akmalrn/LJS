<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    public function mitra(){
        $mitra = Mitra::all();
        return view('admin/tampilan/view-mitra', compact('mitra'));
    }

    public function createmitra()
    {
        return view('admin/mitra/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storemitra(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        $imagePath = $request->file('path')->store('mitras', 'public');
        $mitra = new Mitra();
        $mitra->path = $imagePath;
        $mitra->save();

        return redirect()->route('mitra')->with('success', 'Berhasil Di Upload!');
    }
    public function editmitra($id)
    {
        $mitra = Mitra::find($id);
        return view('admin/mitra/edit', compact('mitra'));
    }

    public function updatemitra(Request $request, $id)
    {
        $request->validate([
            'path' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048|nullable',
        ]);

        $mitra = mitra::findOrFail($id);
        if ($request->hasFile('path')) {
            // Delete old image
            Storage::disk('public')->delete($mitra->path);
            // Store new image
            $imagePath = $request->file('path')->store('mitras', 'public');
            $mitra->path = $imagePath;
        }

        $mitra->save();

        return redirect()->route('mitra')->with('success', 'Berhasil Di Update.');
    }

    public function destroymitra($id)
    {
        $mitra = mitra::findOrFail($id);
        // Delete image from storage
        Storage::disk('mitra')->delete($mitra->path);
        // Delete mitra from database
        $mitra->delete();

        return redirect()->route('mitra')->with('success', 'Berhasil Di Hapus.');
    }

    public function allmitra()
    {
        $konfigurasi = Konfigurasi::first();
        $mitra = Mitra::all();
        return view('admin/all/mitra', compact('mitra', 'konfigurasi'));
    }
}
