<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BenefitController extends Controller
{
    public function benefit(){
        $benefit = Benefit::all();
        return view('admin/tampilan/view-benefit', compact('benefit'));
    }

    public function createbenefit()
    {
        return view('admin/benefit/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storebenefit(Request $request)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'urutan' => 'required|integer|min:0',
        'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
    ]);

    // Menyimpan data ke database
    $benefit = new Benefit();
    $benefit->title = $request->input('title');
    $benefit->description = $request->input('description');
    $benefit->urutan = $request->input('urutan');

    // Menyimpan gambar
    if ($request->hasFile('path')) {
        $path = $request->file('path')->store('images/benefits', 'public'); // Sesuaikan direktori penyimpanan
        $benefit->path = $path;
    }

    $benefit->save();

    return redirect()->route('benefit')->with('success', 'Benefit Berhasil Ditambahkan!');
}

// Edit Benefit
public function editbenefit($id)
{
    $benefit = Benefit::find($id);

    if (!$benefit) {
        return redirect()->route('benefit')->with('error', 'Benefit not found.');
    }

    return view('admin.benefit.edit', compact('benefit'));
}

// Update Benefit
public function updatebenefit(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'urutan' => 'required|integer|min:0',
        'path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
    ]);

    // Update data di database
    $benefit = Benefit::find($id);
    if (!$benefit) {
        return redirect()->route('benefit')->with('error', 'Benefit not found.');
    }

    $benefit->title = $request->input('title');
    $benefit->description = $request->input('description');
    $benefit->urutan = $request->input('urutan');

    // Menyimpan gambar jika ada
    if ($request->hasFile('path')) {
        $path = $request->file('path')->store('images/benefits', 'public'); // Sesuaikan direktori penyimpanan
        $benefit->path = $path;
    }

    $benefit->save();

    return redirect()->route('benefit')->with('success', 'Benefit Berhasil Diperbarui.');
}

// Delete Benefit
public function destroybenefit($id)
{
    $benefit = Benefit::find($id);

    if (!$benefit) {
        return redirect()->route('benefit')->with('error', 'Benefit not found.');
    }

    $benefit->delete();

    return redirect()->route('benefit')->with('success', 'Benefit Berhasil Dihapus.');
}

}

