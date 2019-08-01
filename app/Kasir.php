<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $fillable = ['nama','alamat','telpon','status','username','password','akses'];
    public $timestamps = true;
    public function kasir()
    {
        return $this->hasMany('App\penjualan', 'id_kasir');
    }
}
