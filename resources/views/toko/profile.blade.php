@extends('layouts.master')

@section('content')

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
										<h3 class="name">{{$toko->nama_toko}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-12 stat-item">
												{{$toko->gudang->count()}} <span>Gudang</span>
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
											<li>Nama Toko <span>{{$toko->nama_toko}}</span></li>
											<li>Alamat <span>{{$toko->alamat_toko}}</span></li>
											<li>Email <span>{{$toko->email_toko}}</span></li>
										</ul>
									</div>
									<div class="text-center"><a href="/toko/{{$toko->id}}/edit" class="btn btn-primary">Edit Profile</a></div>
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
										  @foreach($toko->gudang as $gd)
											<tr>
												<td>{{$gd->id}}</td>
												<td>{{$gd->nama}}</td>
												<td>{{$gd->kode}}</td>
												<td>{{$gd->lokasi}}</td>
											</tr>
										@endforeach
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
										  @foreach($toko->item as $gh)
											<tr>
												<td>{{$gh->id}}</td>
												<td>{{$gh->nama}}</td>
												<td>{{$gh->qty}}</td>
												 @foreach($toko->gudang as $gh)
												<td>{{$gh->nama}}</td>
												@endforeach
											</tr>
										@endforeach
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

@stop