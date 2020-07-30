<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'tokos';

    protected $fillable = ['nama_toko', 'alamat_toko', 'email_toko'];

    public function gudang()
    {
    	return $this->hasMany(Gudang::class);
    }

     public function item()
    {
    	return $this->belongsToMany(Item::class);
    }
}
