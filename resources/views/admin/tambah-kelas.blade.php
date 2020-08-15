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
								<th>Aksi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						@foreach($kelas as $data)
						<tbody>
							
							<th>{{$no ++}}</th>
							<th>{{$data->class_name}}</th>
							<th>{{$data->major}}</th>
							<th><button type="submit" class="btn btn-danger">EDIT</button></th>
							<th><button type="submit" class="btn btn-success">DELETE</button></th>
							
						</tbody>
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
                  <label for="input-6" class="col-sm-2 col-form-label" name="class_name">Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control valid" id="input-6" name="class_name" required="" aria-invalid="false">
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