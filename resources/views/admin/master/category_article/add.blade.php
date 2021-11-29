@extends('_layout.admin.master')

@section('page-content')
<!-- Page content Wrapper start-->
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Kategori Artikel</a></li>
                            <li class="breadcrumb-item active">Tambah Data</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kategori Artikel</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row mb-4 mt-1">
            <div class="col-md-6">
                <a href="{{ url('admin/master/category_article') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ url('admin/master/category_article/save') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Kategori</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama" placeholder="Contoh : Edukasi, Pendidikan, Olahraga, dll." id="nama" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div><!-- container -->

</div>
<!-- Page content Wrapper end-->
@endsection
