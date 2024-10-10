<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function viewaboutus()
    {
        $aboutUs = AboutUs::all();
        return view('admin/tampilan/view-aboutus', compact('aboutUs'));
    }
    public function createaboutus()
    {
        return view('admin/aboutus/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAboutUs(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
            'description' => 'required|string',
            'short_description' => 'nullable|string',
        ]);

        $imagePath = $request->file('path')->store('aboutuss', 'public');
        $aboutus = new AboutUs();
        $aboutus->path = $imagePath;
        $aboutus->description = $request->description;
        $aboutus->short_description = $request->short_description;
        $aboutus->save();

        return redirect()->route('viewaboutus')->with('success', 'Berhasil Di Upload!');
    }

    public function editAboutUs($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        return view('admin/aboutus/edit', compact('aboutUs'));
    }

    // Fungsi untuk menyimpan perubahan
    public function updateAboutUs(Request $request, $id)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'description' => 'required|string',
            'short_description' => 'nullable|string',
        ]);

        $aboutus = AboutUs::findOrFail($id);

        if ($request->hasFile('path')) {
            // Jika ada file baru yang diupload, simpan dan ganti yang lama
            $imagePath = $request->file('path')->store('aboutuss', 'public');
            $aboutus->path = $imagePath;
        }

        $aboutus->description = $request->description;
        $aboutus->short_description = $request->short_description;
        $aboutus->save();

        return redirect()->route('viewaboutus')->with('success', 'Berhasil Di Update!');
    }

    public function destroyAboutUs($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        // Delete image from storage
        Storage::disk('aboutuss')->delete($aboutUs->path);
        // Delete aboutUs from database
        $aboutUs->delete();

        return redirect()->route('viewaboutus')->with('success', 'Berhasil Di Delete.');
    }
}
