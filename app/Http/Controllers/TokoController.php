<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
	public function index()
	{
		$data_toko = \App\Toko::all();
		return view('toko.index',['data_toko' => $data_toko]);
	}
	
    public function create(Request $request)
    {
    	\App\Toko::create($request->all());
    	return redirect('/toko')->with('Sukses','Data berhasil dimasukkan');
    }

    public function edit($id)
    {
    	$toko = \App\Toko::find($id);
    	return view('toko/edit',['toko' => $toko]);
    }

    public function update(Request $request,$id)
    {
        $toko = \App\Toko::find($id);
        $toko->update($request->all());
        return redirect('/toko')->with('Sukses', 'Data berhasil Di edit');
    }

    public function delete($id)
    {
    	$toko = \App\Toko::find($id);
    	$toko->delete();
    	return redirect('/toko')->with('Berhasil dihapus');
    }

    public function profile($id)
    {
    	$toko = \App\Toko::find($id);
    	return view('toko.profile',['toko' => $toko]);
    }
}
