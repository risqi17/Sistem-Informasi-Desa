@extends('_layout.admin.master')

@section('css-content')
    <!-- Material datepicker-->
    <link href="{{ asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
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
                            <li class="breadcrumb-item"><a href="#">Agenda</a></li>
                            <li class="breadcrumb-item active">Edit Agenda</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Agenda</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row mb-4 mt-1">
            <div class="col-md-6">
                <a href="{{ url('admin/information/agenda') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Masukkan Agenda </h4>
                        <p class="text-muted m-b-30 font-14">Agenda merupakan kegiatan yang diselenggarakan oleh desa.</p>

                        <form action="{{ url('admin/information/agenda/update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}"> <br/>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Agenda</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $name_agenda }}" type="text" name="nama" placeholder="Contoh : Rapat Panitia Hari Kemerdekaan" id="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="{{ $date }}" name="tanggal" placeholder="2019-07-01" id="mdate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Jam</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" value="{{ $timeClock }}" name="jam1"  id="timepicker">
                                </div>
                                <label for="nama" class="col-sm-1 col-form-label">Sampai</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" value="{{ $timeDet }}" name="jam2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Tempat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" name="tempat" placeholder="Contoh : Kantor Desa, Aula, DLL">{{ $place }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            <i class="fa fa-download"></i>  Simpan
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

</div>
<!-- Page content Wrapper end-->
@endsection
@section('js-content')
    <!-- date time picker-->
    <script src="{{ asset('assets/plugins/timepicker/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/timepicker/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/pages/form-advanced.js') }}"></script>
@endsection

