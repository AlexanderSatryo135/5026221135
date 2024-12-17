<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'karyawan';

    // Primary key
    protected $primaryKey = 'kodepegawai';

    // Kolom yang dapat diisi
    protected $fillable = [
        'kodepegawai',
        'namalengkap',
        'divisi',
        'departemen',
    ];
}
