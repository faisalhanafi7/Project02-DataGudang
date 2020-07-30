<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class GudangController extends Controller
{
    public function gudang($id)
    {
    	$gudang = Gudang::find($id);

    	return view('toko.profile',['gudang' => $gudang]);
    }
}
