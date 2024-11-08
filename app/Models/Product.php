<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Add 'kode_produk' to the fillable array
    protected $fillable = [
        'kode_produk',          // Added field
        'nama_produk',
        'jenis_pola',
        'total_harga_spesifikasi',
        'jenis_print',
        'total_harga_print',
        'harga_produksi',
        'harga_jual',
        'laba',
        'foto'
    ];

    // Additional model methods and properties can go here
}
