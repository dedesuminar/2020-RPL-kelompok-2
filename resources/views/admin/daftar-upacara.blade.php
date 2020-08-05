@extends('layouts.admin-master')
@section ('content')
<div class="row">
	<div class="col-lg-4">
		<div class="card card-primary">
			<img src="{{URL::to('assets/images/gallery/1.jpg')}}" class="card-img-top" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title text-primary">Card Sample Title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<hr>
				
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="card card-primary">
			<img src="{{URL::to('assets/images/gallery/1.jpg')}}" class="card-img-top" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title text-primary">Card Sample Title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<hr>
				
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="card card-primary">
			<img src="{{URL::to('assets/images/gallery/1.jpg')}}" class="card-img-top" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title text-primary">Card Sample Title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<hr>
				
			</div>
		</div>
	</div>

	

</div>
@endsection