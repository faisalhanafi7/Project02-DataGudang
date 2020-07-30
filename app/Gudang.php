<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'gudangs';

    protected $fillable = ['nama', 'kode', 'lokasi'];

    public function toko()
    {
    	return $this->belongsTo(Toko::class);
    }

    public function item()
    {
    	return $this->belongsToMany(Item::class);
    }
}
