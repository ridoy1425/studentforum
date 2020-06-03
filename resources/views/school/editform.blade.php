@extends('welcome')
@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="form_head">
			<h2>Student Form</h2>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="s_form">
					<form action=" {{route('school.update',[$data->id])}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input value="{{$data->s_name}}" type="text" class="form-control" name="s_name">
						</div>
						<div class="form-group">
							<label for="">Permanent Address</label>
							<input value="{{$data->s_add}}" type="text" class="form-control" name="s_add">
						</div>
						<div class="form-group">
							<label for="">Profession</label>
							<input value="{{$data->s_prof}}" type="text" class="form-control" name="s_prof">
						</div>
						<div class="form-group">
							<label for="">Paasing Year</label>
							<input value="{{$data->s_pass}}" type="text" class="form-control" name="s_pass">
						</div>
						<div class="form-group">
							<label for="">Image</label>
							<input value="{{$data->s_img }}" type="file" class="form-control" name="s_img">
						</div>
						<div class="form-group">
							<label for="">Mobail Number</label>
							<input value="{{$data->s_num}}" type="text" class="form-control" name="s_num">
						</div>
						<div class="form-group ">
							<button type="submit" class="btn btn-danger">Update</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
@endsection