<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'paket_wisata';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['path', 'title', 'description', 'price'];
}
