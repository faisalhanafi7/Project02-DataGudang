<?php $__env->startSection('content'); ?>
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
      				  		<?php $__currentLoopData = $gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($gd->nama); ?></td>
								<!-- <td><?php echo e($data->gudang_id); ?></td>
								<td><?php echo e($data->item_id); ?></td> -->
								
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
 	    	<?php echo e(csrf_field()); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>