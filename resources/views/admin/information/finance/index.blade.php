@extends('_layout.admin.master')

@section('css-content')

@endsection

@section('page-content')
<!-- Page content Wrapper start-->
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Anggaran Desa</a></li>
                            <li class="breadcrumb-item active">anggaran desa</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Anggaran Desa </h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row mb-4 mt-1">
            <div class="col-md-6">
                <a href="{{ url('admin/information/announcement/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Pengumuman Baru</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Anggaran Desa</h2>

                    </div>
                </div>
            </div>
        </div>

    </div><!-- container -->

</div>
<!-- Page content Wrapper end-->
@endsection
