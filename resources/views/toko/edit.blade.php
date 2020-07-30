@extends('layouts.master')

@section('content')
 <div class="main">
 	<div class="main-content">
 	  <div class="container-fluid">
 	  	<div class="row">
 	  	  <div class="col-md-12">
 	  	  
 	  	  <div class="panel">
			<div class="panel-heading">
			   <h3 class="panel-title">Inputs</h3>
			</div>
			<div class="panel-body">
			      <form action="/toko/{{$toko->id}}/update" method="POST">
		 	    	{{csrf_field()}}
					<div class="form-group">
					  <label for="exampleInputEmail1">Nama</label>
					   <input name="nama_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Toko" value="{{$toko->nama_toko}}">    
					</div>
					<div class="form-group">
					  <label for="exampleInputEmail1">Alamat</label>
					   <input name="alamat_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="{{$toko->alamat_toko}}">    
					</div>
					<div class="form-group">
					  <label for="exampleInputEmail1">Email</label>
					   <input name="email_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$toko->email_toko}}">    
					</div>
				
				   <button type="submit" class="btn btn-success">Update</button>
				</form>
		      </div>
			</div>
 	  	  </div>
 	  	</div>
 	  </div>
    </div>
  </div>

@stop