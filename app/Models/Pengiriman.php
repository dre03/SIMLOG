<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_distributor',
        'id_produk',
        'id_toko',
        'tanggal_pengiriman',
        'jumlah_produk_pengiriman',
        'status_pengiriman',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function distributor()
    {
        return $this->belongsTo(Distributor::class);
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
