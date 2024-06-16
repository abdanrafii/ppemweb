<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $fillable = [
        'merk',
        'model',
        'tahun',
        'nomor_polisi',
        'warna',
    ];

    public $timestamps = false;
}

