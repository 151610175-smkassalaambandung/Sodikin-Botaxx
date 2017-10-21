<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = ['nama','kode','kategori_id'];

    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }

    public function barangmasuk()
    {
    	return $this->hasMany('App\BarangMasuk');
    }

     public function penempatanbarang()
    {
        return $this->hasMany('App\PenempatanBarang');
    }
}
