 <!-- ========== Left Sidebar Start ========== -->
 <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            {{-- <a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> SISDA</a> --}}
            <a href="index.html" class="logo"><img src="{{ asset('assets/images/example/logo-desa-dark.png') }}" height="40" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span> Dashboard <span class="badge badge-pill badge-primary float-right">7</span></span>
                    </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-hospital-building"></i><span> Profil Desa </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/profile/history') }}">Sejarah</a></li>
                        <li><a href="charts-chartist.html">Visi & Misi</a></li>
                        <li><a href="charts-chartjs.html">Geografi</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table"></i><span> Informasi </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/information/agenda') }}">Agenda</a></li>
                        <li><a href="{{ url('admin/information/announcement/') }}">Pengumuman</a></li>
                        <li><a href="charts-morris.html">Pembangunan</a></li>
                        <li><a href="charts-chartist.html">Anggaran Desa</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-card-details"></i><span> Layanan </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="charts-morris.html">Administrasi Surat</a></li>
                        <li><a href="charts-chartist.html">Pertanahan</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-file-document"></i><span> Artikel </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/master/category_article') }}">Kategori Artikel</a></li>
                        <li><a href="charts-chartist.html">Artikel</a></li>
                    </ul>
                </li>



                <li class="menu-title">Potensi Desa</li>
                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-shopping"></i>
                        <span> Toko Desa </span>
                    </a>
                </li>
                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-book-open-page-variant"></i>
                        <span> Perpustakaan Online</span></span>
                    </a>
                </li>

                <li class="menu-title">Pengaturan</li>
                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-account-settings-variant"></i>
                        <span> User </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
