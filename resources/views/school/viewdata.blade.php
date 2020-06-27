@extends('welcome')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="viewdata">
			<img src="{{ asset('public/uploads/s_image/'.$data->s_img) }}" style="height: 200px; width:220px;">
		<h3>{{$data->s_name}}</h3>
		<h5>{{$data->s_prof}}</h5>
		<p>passing year: {{$data->s_pass}}</p>
		<p>Address: {{$data->s_add}}</p>	
		<p>Mobail Number: {{$data->s_num}}</p>		
						
		</div>
			</div>
			<div class="col-md-4"></div>
		</div>
		
					
					
</div>
@endsection