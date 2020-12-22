<?php $__env->startSection('content'); ?>

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
										<h3 class="name"><?php echo e($toko->nama_toko); ?></h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-12 stat-item">
												<?php echo e($toko->gudang->count()); ?> <span>Gudang</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Nama Toko <span><?php echo e($toko->nama_toko); ?></span></li>
											<li>Alamat <span><?php echo e($toko->alamat_toko); ?></span></li>
											<li>Email <span><?php echo e($toko->email_toko); ?></span></li>
										</ul>
									</div>
									<div class="text-center"><a href="/toko/<?php echo e($toko->id); ?>/edit" class="btn btn-primary">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								<!-- END AWARDS -->
								<!-- TABBED CONTENT -->
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Gudang</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>NO</th>
												<th>NAMA</th>
												<th>KODE</th>
												<th>LOKASI</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
										  <?php $__currentLoopData = $toko->gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($gd->id); ?></td>
												<td><?php echo e($gd->nama); ?></td>
												<td><?php echo e($gd->kode); ?></td>
												<td><?php echo e($gd->lokasi); ?></td>
											</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
							</div>
								<!-- END TABBED CONTENT -->
							</div>

							<div class="profile-right">

							<div class="panel-heading">
									<h3 class="panel-title">Data Barang</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>NO</th>
												<th>NAMA</th>
												<th>JUMLAH</th>
											</tr>
										</thead>
										<tbody>
										  <?php $__currentLoopData = $toko->item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($gh->id); ?></td>
												<td><?php echo e($gh->nama); ?></td>
												<td><?php echo e($gh->qty); ?></td>
												 <?php $__currentLoopData = $toko->gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<td><?php echo e($gh->nama); ?></td>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
							</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>