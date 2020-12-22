<?php $__env->startSection('content'); ?>
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
			      <form action="/toko/<?php echo e($toko->id); ?>/update" method="POST">
		 	    	<?php echo e(csrf_field()); ?>

					<div class="form-group">
					  <label for="exampleInputEmail1">Nama</label>
					   <input name="nama_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Toko" value="<?php echo e($toko->nama_toko); ?>">    
					</div>
					<div class="form-group">
					  <label for="exampleInputEmail1">Alamat</label>
					   <input name="alamat_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="<?php echo e($toko->alamat_toko); ?>">    
					</div>
					<div class="form-group">
					  <label for="exampleInputEmail1">Email</label>
					   <input name="email_toko" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="<?php echo e($toko->email_toko); ?>">    
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>