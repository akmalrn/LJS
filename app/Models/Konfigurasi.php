<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi';

    protected $fillable = [
        'logo',
        'judul_logo',
        'title_img',
        'title',
        'map',
        'alamat',
        'email',
        'link_email',
        'instagram',
        'facebook',
        'telepon',
        'footer_name',
    ];
}
