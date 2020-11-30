@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Tambah Data User
						<form action="{{url('user')}}" method="post">
							@csrf
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Username</label>
						<input type="username" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="nama" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Password</label>
						<input type="password" name="password" class="form-control">
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