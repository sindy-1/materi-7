@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
					<div class="card">
						<div class="card-header">
						Edit Data
					</div>
					<div class="card-body">
				    <form action="{{url('user')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="" class="control-label">Username</label>
						<input type="text"  class="form-control" name="username" value="{{$user->username}}">
					</div>
						<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="nama"  class="form-control" name="nama" value="{{$user->emaill}}">>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Email</label>
						<input type="email"  class="form-control" name="email" value="{{$user->email}}"> 
					</div>
					<div class="form-group">
						<label for="" class="control-label">Password</label>
						<input type="password"  class="form-control" name="password"> 
					</div>
					<div class="form-group">
						<label for="" class="control-label">No HP</label>
						<input type="text"  class="form-control" name="no_hp"> 
					</div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection