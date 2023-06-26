<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_distributor',
        'alamat_distributor',
        'no_telp_distributor',
        'status_distributor',
    ];

    public function produsen()
    {
        return $this->belongsTo(Produsen::class);
    }

    public function pengiriman()
    {
        return $this->hasMany(Pengiriman::class);
    }

}
