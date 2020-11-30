@extends('template.base')

@section('content')
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Register</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Register</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- isi content -->

<div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Please fill in this form to create an account <span class="font-weight-bold text-info">registrasi</span></h5></div>
            <div class="card-body">
              @include('template.utils.notif')
              <form action="{{url('register')}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Tanggal lahir">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="repeat Password">
                </div>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <p>Already have an account? <a href="#">Sign in</a>.</p>
                </div>
                <div class="form-group">
                  <input type="submit" name="" value="save" class="btn btn-info btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- akhir isi content -->




@endsection