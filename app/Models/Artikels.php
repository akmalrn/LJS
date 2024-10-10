<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikels extends Model
{
    use HasFactory;
    protected $table = 'artikels';
    protected $fillable = [
        'kategori_artikel_id', 'title', 'path','short_description', 'description'
    ];

    public function kategoriartikel()
    {
        return $this->belongsTo(KategoriArtikel::class, 'kategori_artikel_id');
    }
}
