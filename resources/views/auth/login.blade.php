@extends('_layout.auth.master')

@section('content')
<p class="text-center">Silahkan masuk menggunakan akun anda</p>

<form class="form-horizontal m-t-20" action="{{ url('auth/dologin') }}" method="POST">
    @csrf
    
    <div class="form-group row">
        <div class="col-12">
            <input class="form-control" type="text" required="" placeholder="Username" name="username">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12">
            <input class="form-control" type="password" required="" placeholder="Password" name="password">
        </div>
    </div>
  
    <div class="form-group text-center row m-t-20">
        <div class="col-12">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">MASUK</button>
        </div>
    </div>

    <div class="form-group m-t-10 mb-0 row">
        <div class="col-sm-7 m-t-20">
            <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> <small>Lupa Password</small></a>
        </div>
        <div class="col-sm-5 m-t-20">
            <a href="pages-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> <small>Belum Punya Akun</small></a>
        </div>
    </div>
</form>
@endsection