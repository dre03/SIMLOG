<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produsen extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_produsen',
        'jk_produsen',
        'no_telp_produsen',
        'alamat_produsen',
        'status_produsen',
    ];

     public function produk()
    {
        return $this->hasMany(Produk::class);
    }

    public function distributor()
    {
        return $this->hasMany(Distributor::class);
    }


}
