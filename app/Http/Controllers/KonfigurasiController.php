<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use Illuminate\Support\Facades\Storage;

class KonfigurasiController extends Controller
{
    public function createOrUpdate($id = null)
    {
        $konfigurasi = Konfigurasi::first() ?? new Konfigurasi();
        return view('admin/konfigurasi/create', compact('konfigurasi'));
    }
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'title_img' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'judul_logo' => 'string|max:255',
            'title' => 'string|max:255',
            'map' => 'string',
            'alamat' => 'string|max:255',
            'email' => 'string|max:255',
            'link_email' => 'string|max:255',
            'instagram' => 'string|max:255',
            'facebook' => 'string|max:255',
            'telepon' => 'string|max:255',
            'footer_name' => 'string|max:255',
        ]);

        // Ambil data konfigurasi pertama atau buat objek baru
        $konfigurasi = Konfigurasi::first() ?? new Konfigurasi();

        // Mengupload logo jika ada
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $konfigurasi->logo = basename($logoPath);
        } else {
            $konfigurasi->logo = $request->input('logo_lama', $konfigurasi->logo); // Simpan nama file lama jika tidak ada yang diupload
        }

        // Mengupload title_img jika ada
        if ($request->hasFile('title_img')) {
            $titleImgPath = $request->file('title_img')->store('public/title_images');
            $konfigurasi->title_img = basename($titleImgPath);
        } else {
            $konfigurasi->title_img = $request->input('title_img_lama', $konfigurasi->title_img); // Simpan nama file lama jika tidak ada yang diupload
        }

        // Update atau simpan data
        $konfigurasi->judul_logo = $request->judul_logo;
        $konfigurasi->title = $request->title;
        $konfigurasi->map = $request->map;
        $konfigurasi->email = $request->email;
        $konfigurasi->link_email = $request->link_email;
        $konfigurasi->alamat = $request->alamat;
        $konfigurasi->instagram = $request->instagram;
        $konfigurasi->facebook = $request->facebook;
        $konfigurasi->telepon = $request->telepon;
        $konfigurasi->footer_name = $request->footer_name;

        $konfigurasi->save();

        return redirect()->route('konfigurasi')->with('success', 'Data berhasil disimpan!');
    }
}
