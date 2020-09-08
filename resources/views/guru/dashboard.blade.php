@extends('layouts.guru-master')
@section ('content')
<center><h4>PENJADWALAN UPACARA SMKS MAHAPUTRA</h4></center>

<center><div class="row">
	
	@foreach($schedule as $data)
	<div class="col-lg-4">
		<div class="card card-primary">
			<img src="{{URL::to('assets/images/gallery/MAHPPUT.JFIF')}}" style="width: 100px"  class="card-img-top" alt="Card image cap">
			<div class="card-body col-lg-12">
				<h5 class="card-title text-primary">Petugas : {{$data->class_name}}</h5>
				<p class="card-text">Pembina : {{$data->teacher_name}}</p>
				<p>Waktu : {{date('l, d F Y || H:i', strtotime($data->created_schedule))}}</p>

				<hr>
			</div>
		</div>	
	</div>
	@endforeach
</div>
</center>
@endsection