@extends('_layout.admin.master')

@section('css-content')

    <link href="{{ asset('assets/plugins/timepicker/tempusdominus-bootstrap-4.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/clockpicker/jquery-clockpicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/colorpicker/asColorPicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
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
                            <li class="breadcrumb-item active">Tambah Pengumuman</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Pengumuman</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row mb-4 mt-1">
            <div class="col-md-6">
                <a href="{{ url('admin/information/announcement') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Masukkan Pengumuman </h4>
                        <p class="text-muted m-b-30 font-14">Pengumuman merupakan kegiatan yang diselenggarakan oleh desa.</p>

                        <form action="{{ url('admin/information/announcement/save') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Judul Pengumuman</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="judul" placeholder="Contoh : Gerak Jalan Desa, Karnaval Kemerdekaan, DLLs" id="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="deskripsi"></textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            <i class="fa fa-download"></i> Simpan
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
    <!-- wysiwyg-->
    {{-- <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height:300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script> --}}
@endsection

