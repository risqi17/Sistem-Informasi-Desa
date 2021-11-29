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
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kategori Artikel</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row mb-4 mt-1">
            <div class="col-md-6">
                <a href="{{ url('admin/master/category_article/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($category as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->name_cat }}</td>
                                        <td>
                                            <a href="{{ url('admin/master/category_article/edit/'.$c->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ url('admin/master/category_article/delete/'.$c->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Oops.. belum ada data :(</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- container -->

</div>
<!-- Page content Wrapper end-->
@endsection
