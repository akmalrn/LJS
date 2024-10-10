<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtraksiWisata extends Model
{
    use HasFactory;

    protected $table = 'atraksi_wisata';

    protected $fillable = ['path', 'title', 'description', 'price'];
}
