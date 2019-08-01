<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['judul','noisbn','penulis','penerbit',
    'tahun','stok','harga_produk','harga_jual','diskon'];
    public $timestamps = true;
    public function pasok()
    {
        return $this->hasMany('App\pasok', 'id_buku');
    }
    public function penjualan()
    {
        return $this->hasMany('App\penjualan', 'id_buku');
    }
}
