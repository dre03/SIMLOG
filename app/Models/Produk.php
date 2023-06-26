<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_produsen',
        'id_kategori',
        'nama_produk',
        'deskripsi_produk',
        'kode_produk',
        'harga_produk',
        'status_produk',
    ];

    public function produsen()
    {
        return $this->belongsTo(Produsen::class);
    }

    public function pengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
