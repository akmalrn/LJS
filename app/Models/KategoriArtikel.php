<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    use HasFactory;
    protected $table = 'kategori_artikels';
    protected $fillable = ['nama_kategori'];

    public function artikels()
    {
        return $this->hasMany(Artikels::class);
    }
}
