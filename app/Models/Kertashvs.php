<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kertashvs extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'kertashvs';

    // Primary key
    protected $primaryKey = 'kode_kertashvs';

    // Kolom yang dapat diisi
    protected $fillable = [
        'merk_kertashvs',
        'stock_kertashvs',
        'tersedia'
    ];
}
