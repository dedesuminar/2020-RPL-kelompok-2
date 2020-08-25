@extends('layouts.admin-master')
@section ('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
			<div class="card-header">
				<button class="btn btn-primary m-1" data-toggle="modal" data-target="#largesizemodal">Tambah Data</button>
				<!-- Modal -->

			</div>
			
			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Kelas</th>
								<th>Jurusan</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						@foreach($kelas as $data)
						<tbody>
							
							
							<th>{{$data->id_class}}</th>
							<th>{{$data->class_name}}</th>
							<th>{{$data->major}}</th> 
							<th class="text-center">
								<form method="post" action="{{URL::to('admin/delete')}}">
									@csrf
									<button type="button" class="btn btn-primary m-1 btn-sm" data-toggle="modal" data-target="#edit{{$data->id_class}}">Edit</button>
									<input type="hidden" value="{{$data->id_class}}" name="id_class">
									<input type="submit" class="btn btn-danger btn-sm btn-rounded" value="Delete" >
							</form>
						</tbody>
						<div class="modal fade" id="edit{{$data->id_class}}">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"><i class="fa fa-star"></i> Edit Kelas</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<div class="modal-body">
										<form method="post" action="{{URL::to('/admin/update/class',$data->id_class)}}">
											@csrf
											<div class="form-group row">
												<label for="input-6" class="col-sm-2 col-form-label" >kelas</label>
												<div class="col-sm-10">
														<input class="col-sm-10" type="text" name="class_name" value="{{$data->class_name}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="input-6" class="col-sm-2 col-form-label" >Jurusan</label>
												<div class="col-sm-10">		
												<input class="col-sm-10" type="text" name="major" value="{{$data->major}}">
												</div>
											</div>	
												
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
												<button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Row-->

	<div class="modal fade" id="largesizemodal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><i class="fa fa-star"></i> Tambah Kelas</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post">
						@csrf
						<div class="form-group row">
							<label for="input-6" class="col-sm-2 col-form-label" name="class_name">Kelas</label>
							<div class="col-sm-10">
								<input type="text" class="form-control valid" id="input-6" name="class_name" required="" aria-invalid="false">
							</div>

						</div>
						<div class="form-group row">
							<label for="input-6" class="col-sm-2 col-form-label" name="class_name">Jurusan</label>
							<div class="col-sm-10">
								<input type="text" class="form-control valid" id="input-6" name="major" required="" aria-invalid="false">
							</div>

						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
							<button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		@endsection