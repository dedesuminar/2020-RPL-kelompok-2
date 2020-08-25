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
								<th>Tanggal</th>
								<th>Kelas</th>
								<th>Pembina</th>
								<th class="text-center">Aksi</th>
								
							</tr>
						</thead>
						@foreach($schedule as $data)
						<tbody>
							
							<th>{{$data->id_teacher}}</th>
							<th>{{date('l, d F Y || H:i', strtotime($data->created_schedule))}}</th>
							<th>{{$data->class_name}}</th>
							<th>{{$data->teacher_name}}</th>
							<th class="text-center">
								<form method="post" action="{{URL::to('admin/delete/schedule')}}">
									@csrf
									<button type="button" class="btn btn-primary m-1 btn-sm" data-toggle="modal" data-target="#edit{{$data->id}}">Edit</button>
									<input type="hidden" value="{{$data->id}}" name="id">
									<input type="submit" class="btn btn-danger btn-sm btn-rounded" value="Delete">

								</form>
							

						</tbody>
						<div class="modal fade" id="edit{{$data->id}}">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"><i class="fa fa-star"></i> Edit Petugas</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form method="post" action="{{URL::to('/admin/update/schedule', $data->id)}}">
											@csrf
											<div class="form-group row">
												<label for="input-6" class="col-sm-2 col-form-label">Pembina</label>
												<div class="col-sm-10">
													<select class="form-control valid" id="input-6" name="id_teacher" required="" aria-invalid="false">
														<option selected="false">Pilih Nama Guru</option>
														@foreach($guru as $data)
														<option value="{{$data->id_teacher}}">{{$data->teacher_name}}</option>
														@endforeach
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label for="input-6" class="col-sm-2 col-form-label">Petugas</label>
												<div class="col-sm-10">
													<select class="form-control valid" id="input-6" name="id_class" required="" aria-invalid="false">
														@foreach($kelas as $data)
														<option value="{{$data->id_class}}">{{$data->class_name .  '  ||  ' .  $data->major}}</option>
														@endforeach
													</select>
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
				<h5 class="modal-title"><i class="fa fa-star"></i> Tambah Petugas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">
					@csrf
					<div class="form-group row">
						<label for="input-6" class="col-sm-2 col-form-label">Pembina</label>
						<div class="col-sm-10">
							<select class="form-control valid" id="input-6" name="pembina" required="" aria-invalid="false">
								@foreach($guru as $data)
								<option value="{{$data->id_teacher}}">{{$data->teacher_name}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input-6" class="col-sm-2 col-form-label">Petugas</label>
						<div class="col-sm-10">
							<select class="form-control valid" id="input-6" name="petugas" required="" aria-invalid="false">
								@foreach($kelas as $data)
								<option value="{{$data->id_class}}">{{$data->class_name .  '  ||  ' .  $data->major}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="input-8" class="col-sm-2 col-form-label">Tanggal</label>
						<div class="col-sm-10">
							<input type="datetime-local" class="form-control" id="input-8" name="date" required="">
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
@endsection