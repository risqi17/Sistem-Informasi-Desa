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
                            <li class="breadcrumb-item"><a href="#">Agenda</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Agenda</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row mb-4 mt-1">
            <div class="col-md-6">
                <a href="{{ url('admin/information/agenda/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Agenda Baru</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <th>No.</th>
                                <th>Nama Agenda</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Tempat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($agenda as $a)
                                    <tr>
                                        <td>{{ $a->id }}</td>
                                        <td>{{ $a->name_agenda }}</td>
                                        <td>{{ $a->date }}</td>
                                        <td>{{ $a->time }}</td>
                                        <td>{{ $a->place }}</td>
                                        <td>
                                            <button type="button" onclick="tampil()" id="btTampil" class="btn btn-sm btn-outline-primary waves-effect waves-light">
                                                <?php
                                                if ($a->status == 0) {
                                                ?>
                                                    Tidak tampil
                                                <?php
                                                } else {
                                                ?>
                                                    Tampil
                                                <?php
                                                }
                                                ?>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/information/agenda/edit/'.$a->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="{{ url('admin/information/agenda/delete/'.$a->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
@section('js-content')
    <script type="text/javascript">
        function tampil(){
            if ($('#btTampil').text() == 'Tampil') {
                $('#btTampil').text('Tidak tampil');
                console.log('tampil pressed');
            } else {
                $('#btTampil').text('Tampil');
                console.log('Tidak tampil pressed');
            }

        }
    </script>
@endsection
