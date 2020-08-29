@extends('layouts.admin-master')
@section ('content')
<div class="row">
	@foreach($schedule as $data)
	<div class="col-lg-3">
		<div class="card card-primary">
			<img src="{{URL::to('assets/images/gallery/MAHPPUT.JFIF')}}" class="card-img-top" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title text-primary">{{$data->class_name}}</h5>
				<p class="card-text">{{$data->teacher_name}}</p>
				<hr>
			</div>
		</div>	
	</div>
	@endforeach
</div>
@endsection