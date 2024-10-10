<?php

namespace App\Http\Controllers;

use App\Models\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WhyUsController extends Controller
{
    public function WhyUs($id = null)
    {
        $whyUs = WhyUs::first() ?? new WhyUs();
        return view('admin/whyus/create', compact('whyUs'));
    }

    public function store(Request $request, $id = null)
    {
         // Validasi
         $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Ambil data konfigurasi pertama atau buat objek baru
        $WhyUs = WhyUs::first() ?? new WhyUs();

        $data['description'] = strip_tags($request->description, '<p><a><strong><em><ul><li><ol><br>');


        $WhyUs->title = $request->title;
        $WhyUs->description = $request->description;

        $WhyUs->save();

        return redirect()->route('WhyUs')->with('success', 'Data berhasil disimpan!');
    }
}
