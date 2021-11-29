@extends('_layout.admin.master')

@section('css-content')
    <style type="text/css">
        .pagination li{
            float: right;
            list-style-type: none;
        }
    </style>
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
                            <li class="breadcrumb-item"><a href="#">Pengumuman</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Pengumuman</h4>
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
                        <table class="table table-borderless">
                            <thead>
                                <th>No.</th>
                                <th>Judul Pengumuman</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($data as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->desc }}</td>
                                        <td>
                                            @if ($value->status == 0)
                                                <span class="badge badge-danger">Tidak Aktif</span>
                                            @else
                                                <span class="badge badge-success">Aktif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/information/announcement/edit/'.$value->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ url('admin/information/announcement/delete/'.$value->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Oops.. belum ada data :(</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <br/>
                        Halaman : {{ $data->currentPage() }} <br/>
                        Jumlah Data : {{ $data->total() }} <br/>
                        Data Per Halaman : {{ $data->perPage() }} <br/>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div><!-- container -->

</div>
<!-- Page content Wrapper end-->
@endsection
