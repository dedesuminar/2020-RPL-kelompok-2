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
								<th>Pembina</th>
								<th>Aksi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						@foreach($teacher as $data)
						<tbody>
							
							<th>{{$data->id_teacher}}</th>
							<th>{{$data->teacher_name}}</th>
							<th><button class="btn btn-primary m-1" data-toggle="modal" data-target="#edit{{$data->id_teacher}}">Edit</button></th>
							<th><a href="" class="btn btn-warning" btn-sm >DELETE</th>

							
						</tbody>

						<div class="modal fade" id="edit{{$data->id_teacher}}">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"><i class="fa fa-star"></i> Edit</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form method="post" action="{{URL::to('/admin/update/teacher',$data->id_teacher)}}">
											@csrf
											<div class="form-group row">
												<label for="input-6" class="col-sm-2 col-form-label" name="teacher_name">Pembina</label>
												<div class="col-sm-10">
													<input type="text" class="form-control valid" id="input-6" name="teacher_name" required="" aria-invalid="false" value="{{$data->teacher_name}}">

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
				<h5 class="modal-title"><i class="fa fa-star"></i> Modal title</h5>
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
                    <input type="text" class="form-control valid" id="input-6" name="teacher_name" required="" aria-invalid="false">
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