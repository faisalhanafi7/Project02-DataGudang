<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable =['nama','qty'];

    public function toko()
    {
    	return $this->belongsToMany(Toko::class);
    }
    public function gudang()
    {
    	return $this->belongsToMany(Gudang::class);
    }
}
