<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_toko',
        'alamat_toko',
        'no_telp_toko',
        'status_toko'
    ];

    public function pengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }
}
