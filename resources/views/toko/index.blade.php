@extends('layouts.master')

@section('content')
 <div class="main">
 	<div class="main-content">
 	  <div class="container-fluid">
 	  	<div class="row">
 	  	  <div class="col-md-12">
 	  	  	<div class="panel">
				<div class="panel-heading">
				  <h3 class="panel-title">Data Toko</h3>
					<div class="right">
					  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i>
  					</div>
				</div>
				 <div class="panel-body">
				   <table class="table table-hover">
      				  <thead>
      				  	<tr>
      				  		<td>NO</td>
      				  		<td>NAMA</td>
      				  		<td>ALAMAT</td>
      				  		<td>EMAIL</td>
      				  		<td>AKSI</td>
      				  	</tr>
      				  </thead>
      				  	<tbody>
      				  		@foreach($data_toko as $data)
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->nama_toko}}</td>
								<td>{{$data->alamat_toko}}</td>
								<td>{{$data->email_toko}}</td>
								<td>
									<a href="/toko/{{$data->id}}/profile" class="btn btn-success btn-sm">Profile</a>
								    <a href="/toko/{{$data->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Dihapus ?')">Hapus</a>
								</td>
							</tr>
							@endforeach
      				  	</tbody>
				   </table>
				</div>
			 </div>
 	  	  </div>
 	  	</div>
 	  </div>
 	</div>
 </div>
<!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
  	 <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
  		<button type="button" class="close" data-dimiss="modal" aria-label="Close">
  		  	<span aria-hidden="true">&times;</span>
  		 </button>  		
  	</div>
     <div class="modal-body">
 	    <form action="/toko/create" method="POST">
 	    	{{csrf_field()}}
			<div class="form-group">
			  <label for="exampleInputEmail1">Nama</label>
			   <input name="nama_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Toko">    
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Alamat</label>
			   <input name="alamat_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">    
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Email</label>
			   <input name="email_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">    
			</div>
			
		   <button type="submit" class="btn btn-primary">Submit</button>
		</form>
  	 </div>
    </div>
  </div>
</div>
@stop