<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Dashboard | PERDAMI | Resertifikasi Dokter Spesialis Mata</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url() ?>assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url() ?>assets/css/codebase.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-inverse main-content-boxed">
            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index">
                                        <img class="img-logo-login" src="<?php echo base_url() ?>assets/media/logo-login.png">
                                        <span class="font-size-xl text-primary-dark">PERDAMI </span><br/>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="<?php echo base_url() ?>assets/media/avatars/avatar15.jpg" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="admin">
                                     <?php
                                        if(!empty($profil))
                                            foreach ($profil as $row){ ?>
                                                <img class="img-avatar" src="<?php echo base_url('Upload/foto/'.$row->foto)?>" alt="Foto">
                                            <?php } else { ?>
                                                <img class="img-avatar" src="<?php echo base_url() ?>assets/media/avatars/avatar-full.jpg" alt="Foto">
                                            <?php } ?>
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="admin"><?php echo $this->session->userdata("user_nama") ?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li>
                                    <a class="active" href="profil"><i class="si si-feed"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="admin"><i class="si si-key"></i><span class="sidebar-mini-hide">Admin</span></a>
                                </li>
                                <li>
                                    <a href="dokter"><i class="fa fa-stethoscope"></i><span class="sidebar-mini-hide">Dokter</span></a>
                                </li>
                                <li>
                                    <a href="pengajuan"><i class="si si-book-open"></i><span class="sidebar-mini-hide">Pengajuan</span></a>
                                </li>
                                <li>
                                    <a href="terverifikasi"><i class="si si-check"></i><span class="sidebar-mini-hide">Terverifikasi</span></a>
                                </li>
                                <li>
                                    <a href="pengaturan"><i class="si si-settings"></i><span class="sidebar-mini-hide">Pengaturan</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block"><?php echo $this->session->userdata("user_nama") ?></span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="admin">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="dropdown-item" href="pengaturan" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-flag"></i>
                                <span class="badge badge-danger badge-pill">
                                    <?php 
                                    $sesi =  $this->session->userdata("user_id");
                                    $condition = " status='menunggu' ";     
                                    $this->db->select('COUNT');
                                    $this->db->like('tanggal');
                                    $this->db->from('status');
                                    $this->db->where($condition);
                                    echo $this->db->count_all_results();
                                    ?></span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                                <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                                <ul class="list-unstyled my-20">
                                    <?php
                                    if(!empty($cek_notifikasi))
                                        foreach ($cek_notifikasi as $row){ ?> 
                                            <li>
                                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                                    <div class="ml-5 mr-15">
                                                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                                    </div>
                                                    <div class="media-body pr-10">
                                                        <b class="mb-0">Status Pengajuan</b>
                                                        <p class="mb-0"><?php echo $row->nama_user; ?></p>
                                                        <p class="mb-0"><?php echo $row->status; ?></p>
                                                        <div class="text-muted font-size-sm font-italic"><?php echo $row->tanggal; ?></div>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php } ?>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center mb-0" href="pengajuan">
                                    <i class="fa fa-flag mr-5"></i> View All
                                </a>
                            </div>
                        </div>
                        <!-- END Notifications -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">Dashboard</small></h2>

                    <div class="row gutters-tiny">
                        <!-- Row #1 -->
                        <div class="col-md-12 col-xl-4">
                            <a class="block block-link-shadow text-right" href="dokter">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-user fa-3x text-info"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600">
                                        <?php 
                                                $this->db->select('COUNT');
                                                $this->db->like('nama_user');
                                                $this->db->from('user');
                                                echo $this->db->count_all_results();
                                                ?>
                                    </div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">TOTAL MEMBER</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <a class="block block-link-shadow text-right" href="pengajuan">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-book-open fa-3x text-warning"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600">
                                        <!-- <?php   
                                                $this->db->distinct('status');
                                                // $this->db->select('COUNT');
                                                $this->db->like('id_row');
                                                $this->db->from('status');
                                                $this->db->where('status','=','menunggu','and','not-verified');
                                                echo $this->db->count_all_results();
                                                ?> -->
                                        <?php 
                                    $sesi =  $this->session->userdata("user_id");
                                    $condition = " status='menunggu' ";     
                                    $this->db->select('COUNT');
                                    $this->db->like('tanggal');
                                    $this->db->from('status');
                                    $this->db->where($condition);
                                    echo $this->db->count_all_results();
                                    ?>
                                    </div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">PENGAJUAN BELUM TERVERIFIKASI</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <a class="block block-link-shadow text-right" href="terverifikasi">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10">
                                        <i class="si si-check fa-3x text-primary"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600">
                                        <?php
                                        $this->db->select('id_status');     
                                        $this->db->distinct();
                                        $this->db->from('status');
                                        $this->db->where('status="verified"');
                                        echo $this->db->count_all_results();
                                        ?>
                                    </div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">TOTAL TERVERIFIKASI</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>

                    <h2 class="content-heading">Statistik per cabang <small>PERDAMI seluruh Indonesia</small></h2>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Block Tabs Alternative Style -->
                            <div class="block">
                                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#btabs1">Member</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs2">Pengajuan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs3">Terverifikasi</a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabs1" role="tabpanel">
                                        <div id="container1"></div>
                                    </div>
                                    <div class="tab-pane" id="btabs2" role="tabpanel">
                                        <div id="container2"></div>
                                    </div>
                                    <div class="tab-pane" id="btabs3" role="tabpanel">
                                        <div id="container3"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Block Tabs Alternative Style -->
                        </div>
                    </div>

                    <h2 class="content-heading">Statistik per kelompok <small>PERDAMI seluruh Indonesia</small></h2>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Block Tabs Alternative Style -->
                            <div class="block">
                                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#btabs4">Member</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs5">Pengajuan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs6">Terverifikasi</a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabs4" role="tabpanel">
                                        <div id="container4"></div>
                                    </div>
                                    <div class="tab-pane" id="btabs5" role="tabpanel">
                                        <div id="container5"></div>
                                    </div>
                                    <div class="tab-pane" id="btabs6" role="tabpanel">
                                        <div id="container6"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Block Tabs Alternative Style -->
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        <a class="font-w600" href="" target="_blank">Gamatechno</a> &copy; <span class="js-year-copy">2018</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery-scrollLock.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/codebase.js"></script>

        <!--online highchart-->
        <script src="<?php echo base_url() ?>assets/js/highcharts.js"></script>
        <script src="<?php echo base_url() ?>assets/js/exporting.js"></script>
        <script src="<?php echo base_url() ?>assets/js/export-data.js"></script>

        <!-- script js highchart-->
        <script type="text/javascript">

            Highcharts.chart('container1', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Statistik member per cabang'
                },
                subtitle: {
                    text: 'seluruh indonesia'
                },
                xAxis: {
                    categories: [
                    'Aceh',
                    'Sumut',
                    'Sumbar',
                    'Sumsel',
                    'Riau',
                    'Jakarta',
                    'Banten',
                    'Bekasi',
                    'Jabar',
                    'Jateng',
                    'DIY',
                    'Surakarta',
                    'Jatim',
                    'Malang',
                    'Bali',
                    'NTB',
                    'Kaltim',
                    'Sulut',
                    'Sulsel',
                    'Kalbar',
                    'Jambi',
                    'Lampung',
                    'Papua'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jml member'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'member',
                    data: [
                    <?php 
                    $condition = " cabang='Perdami Nangroe Aceh Darussalam' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //aceh
                    <?php 
                    $condition = " cabang='Perdami Sumatra Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //sumut
                    <?php 
                    $condition = " cabang='Perdami Sumatra Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //sumbar 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //sumsel 
                    <?php 
                    $condition = " cabang='Perdami Riau' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //riau 
                    <?php 
                    $condition = " cabang='Perdami DKI Jakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Jakarta 
                    <?php 
                    $condition = " cabang='Perdami Banten' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Banten 
                    <?php 
                    $condition = " cabang='Perdami Bekasi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Bekasi 
                    <?php 
                    $condition = " cabang='Perdami Jawa Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Jabar 
                    <?php 
                    $condition = " cabang='Perdami Jawa Tengah' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Jateng 
                    <?php 
                    $condition = " cabang='Perdami Yogyakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Yogyakarta 
                    <?php 
                    $condition = " cabang='Perdami Surakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Surakarta 
                    <?php 
                    $condition = " cabang='Perdami Jawa Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Jatim 
                    <?php 
                    $condition = " cabang='Perdami Malang' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Malang 
                    <?php 
                    $condition = " cabang='Perdami Bali' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Bali 
                    <?php 
                    $condition = " cabang='Perdami Nusa Tenggara Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //NTB 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Kaltim 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Sulut 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Sulsel 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Kalbar 
                    <?php 
                    $condition = " cabang='Perdami Jambi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Jambi 
                    <?php 
                    $condition = " cabang='Perdami Lampung' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>, //Lampung 
                    <?php 
                    $condition = " cabang='Perdami Papua' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('user');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?> //papua
                    ]

                }]
            });
        </script>

        <script type="text/javascript">
            
            Highcharts.chart('container2', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Statistik pengajuan per cabang'
                },
                subtitle: {
                    text: 'seluruh indonesia'
                },
                xAxis: {
                    categories: [
                    'Aceh',
                    'Sumut',
                    'Sumbar',
                    'Sumsel',
                    'Riau',
                    'Jakarta',
                    'Banten',
                    'Bekasi',
                    'Jabar',
                    'Jateng',
                    'DIY',
                    'Surakarta',
                    'Jatim',
                    'Malang',
                    'Bali',
                    'NTB',
                    'Kaltim',
                    'Sulut',
                    'Sulsel',
                    'Kalbar',
                    'Jambi',
                    'Lampung',
                    'Papua'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jml pengajuan'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'pengajuan',
                    data: [
                    <?php 
                    $condition = " cabang='Perdami Nangroe Aceh Darussalam' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //aceh 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //sumut 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //sumbar 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //sumsel 
                    <?php 
                    $condition = " cabang='Perdami Riau' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //riau 
                    <?php 
                    $condition = " cabang='Perdami DKI Jakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //jakarta 
                    <?php 
                    $condition = " cabang='Perdami Banten' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //banten 
                    <?php 
                    $condition = " cabang='Perdami Bekasi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //bekasi 
                    <?php 
                    $condition = " cabang='Perdami Jawa Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //jabar 
                    <?php 
                    $condition = " cabang='Perdami Jawa Tengah' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //jateng 
                    <?php 
                    $condition = " cabang='Perdami Yogyakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //yogyakarta 
                    <?php 
                    $condition = " cabang='Perdami Surakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //surakarta 
                    <?php 
                    $condition = " cabang='Perdami Jawa Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //jatim 
                    <?php 
                    $condition = " cabang='Perdami Malang' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //malang 
                    <?php 
                    $condition = " cabang='Perdami Bali' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //bali 
                    <?php 
                    $condition = " cabang='Perdami Nusa Tenggara Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //ntb 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //kaltim 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //sulut 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //sulsel 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //kalbar 
                    <?php 
                    $condition = " cabang='Perdami Jambi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //jambi 
                    <?php 
                    $condition = " cabang='Perdami Lampung' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>,  //lampung 
                    <?php 
                    $condition = " cabang='Perdami Papua' ";     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where($condition);
                    echo $this->db->count_all_results();
                    ?>  //papua
                    ]

                }]
            });
        </script>

        <script type="text/javascript">
            
            Highcharts.chart('container3', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Statistik pengajuan terverifikasi per cabang'
                },
                subtitle: {
                    text: 'seluruh indonesia'
                },
                xAxis: {
                    categories: [
                    'Aceh',
                    'Sumut',
                    'Sumbar',
                    'Sumsel',
                    'Riau',
                    'Jakarta',
                    'Banten',
                    'Bekasi',
                    'Jabar',
                    'Jateng',
                    'DIY',
                    'Surakarta',
                    'Jatim',
                    'Malang',
                    'Bali',
                    'NTB',
                    'Kaltim',
                    'Sulut',
                    'Sulsel',
                    'Kalbar',
                    'Jambi',
                    'Lampung',
                    'Papua'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jml pengajuan terverifikasi'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'pengajuan terverifikasi',
                    data: [
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Nangroe Aceh Darussalam');
                    echo $this->db->count_all_results();
                    ?>,  //aceh 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Sumatra Utara');
                    echo $this->db->count_all_results();
                    ?>,  //sumut  
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Sumatra Barat');
                    echo $this->db->count_all_results();
                    ?>,  //sumbar 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Sumatra Selatan');
                    echo $this->db->count_all_results();
                    ?>,  //sumsel  
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Riau');
                    echo $this->db->count_all_results();
                    ?>,  //riau 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami DKI Jakarta');
                    echo $this->db->count_all_results();
                    ?>,  //Jakarta , 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Banten');
                    echo $this->db->count_all_results();
                    ?>,  //banten 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Bekasi');
                    echo $this->db->count_all_results();
                    ?>,  //bekasi 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Jawa Barat');
                    echo $this->db->count_all_results();
                    ?>,  //jabar 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Jawa Tengah');
                    echo $this->db->count_all_results();
                    ?>,  //jateng 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Yogyakarta');
                    echo $this->db->count_all_results();
                    ?>,  //DIY 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Surakarta');
                    echo $this->db->count_all_results();
                    ?>,  //surakarta 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Jawa Timur');
                    echo $this->db->count_all_results();
                    ?>,  //jatim  
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Malang');
                    echo $this->db->count_all_results();
                    ?>,  //malang 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Bali');
                    echo $this->db->count_all_results();
                    ?>,  //bali  
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Nusa Tenggara Barat');
                    echo $this->db->count_all_results();
                    ?>,  //ntb  
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Kalimantan Timur');
                    echo $this->db->count_all_results();
                    ?>,  //kaltim 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Sulawesi Utara');
                    echo $this->db->count_all_results();
                    ?>,  //sulut  
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Sulawesi Selatan');
                    echo $this->db->count_all_results();
                    ?>,  //sulsel  
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Kalimantan Barat');
                    echo $this->db->count_all_results();
                    ?>,  //kalbar 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Jambi');
                    echo $this->db->count_all_results();
                    ?>,  //jambi 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Lampung');
                    echo $this->db->count_all_results();
                    ?>,  //lampung 
                    <?php     
                    $this->db->select('COUNT');
                    $this->db->like('id_row');
                    $this->db->from('status');
                    $this->db->where('status', 'verified');
                    $this->db->where('cabang', 'Perdami Papua');
                    echo $this->db->count_all_results();
                    ?>  //papua 
                    ]

                }]
            });
        </script>

        <script type="text/javascript">
                    Highcharts.chart('container4', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Statistik member per cabang'
                            },
                            subtitle: {
                                text: 'seluruh indonesia'
                            },
                            xAxis: {
                                categories: [
                                'Aceh',
                                'Sumut',
                                'Sumbar',
                                'Sumsel',
                                'Riau',
                                'Jakarta',
                                'Banten',
                                'Bekasi',
                                'Jabar',
                                'Jateng',
                                'DIY',
                                'Surakarta',
                                'Jatim',
                                'Malang',
                                'Bali',
                                'NTB',
                                'Kaltim',
                                'Sulut',
                                'Sulsel',
                                'Kalbar',
                                'Jambi',
                                'Lampung',
                                'Papua'
                                ],
                                crosshair: true
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Jml member'
                                }
                            },
                            tooltip: {
                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                                footerFormat: '</table>',
                                shared: true,
                                useHTML: true
                            },
                            plotOptions: {
                                column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0
                                }
                            },
                series: [{
                    name: 'Kelompok 1',
                    data: [
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Nangroe Aceh Darussalam');
                    echo $this->db->count_all_results();
                    ?>,  //aceh 
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Sumatra Utara');
                    echo $this->db->count_all_results();
                    ?>,  //sumut  
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Sumatra Barat');
                    echo $this->db->count_all_results();
                    ?>,  //sumbar                
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Sumatra Selatan');
                    echo $this->db->count_all_results();
                    ?>,  //sumsel
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Riau');
                    echo $this->db->count_all_results();
                    ?>,  //riau
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami DKI Jakarta');
                    echo $this->db->count_all_results();
                    ?>,  //jakarta
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Banten');
                    echo $this->db->count_all_results();
                    ?>,  //Banten
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Bekasi');
                    echo $this->db->count_all_results();
                    ?>,  //Bekasi
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Jawa Barat');
                    echo $this->db->count_all_results();
                    ?>,  //jabar
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Jawa tengah');
                    echo $this->db->count_all_results();
                    ?>,  //jateng
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Yogyakarta');
                    echo $this->db->count_all_results();
                    ?>,  //DIY
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Surakarta');
                    echo $this->db->count_all_results();
                    ?>,  //surakarta
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Jawa Timur');
                    echo $this->db->count_all_results();
                    ?>,  //jatim
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Malang');
                    echo $this->db->count_all_results();
                    ?>,  //malang
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Bali');
                    echo $this->db->count_all_results();
                    ?>,  //bali
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Nusa Tenggara Barat');
                    echo $this->db->count_all_results();
                    ?>,  //ntb
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Kalimantan Timur');
                    echo $this->db->count_all_results();
                    ?>,  //kaltim
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Sulawesi Utara');
                    echo $this->db->count_all_results();
                    ?>,  //sulut
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Sulawesi Selatan');
                    echo $this->db->count_all_results();
                    ?>,  //sulsel
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Kalimantan Barat');
                    echo $this->db->count_all_results();
                    ?>,  //kalbar
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Jambi');
                    echo $this->db->count_all_results();
                    ?>,  //jambi
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Lampung');
                    echo $this->db->count_all_results();
                    ?>,  //lampung
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',1);
                    $this->db->where('cabang','Perdami Papua');
                    echo $this->db->count_all_results();
                    ?>,  //papua
                    ]

                }, {
                    name: 'Kelompok 2',
                    data: [
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Nangroe Aceh Darussalam');
                    echo $this->db->count_all_results();
                    ?>,  //aceh 
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Sumatra Utara');
                    echo $this->db->count_all_results();
                    ?>,  //sumut  
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Sumatra Barat');
                    echo $this->db->count_all_results();
                    ?>,  //sumbar                
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Sumatra Selatan');
                    echo $this->db->count_all_results();
                    ?>,  //sumsel
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Riau');
                    echo $this->db->count_all_results();
                    ?>,  //riau
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami DKI Jakarta');
                    echo $this->db->count_all_results();
                    ?>,  //jakarta
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Banten');
                    echo $this->db->count_all_results();
                    ?>,  //Banten
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Bekasi');
                    echo $this->db->count_all_results();
                    ?>,  //Bekasi
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Jawa Barat');
                    echo $this->db->count_all_results();
                    ?>,  //jabar
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Jawa tengah');
                    echo $this->db->count_all_results();
                    ?>,  //jateng
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Yogyakarta');
                    echo $this->db->count_all_results();
                    ?>,  //DIY
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Surakarta');
                    echo $this->db->count_all_results();
                    ?>,  //surakarta
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Jawa Timur');
                    echo $this->db->count_all_results();
                    ?>,  //jatim
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Malang');
                    echo $this->db->count_all_results();
                    ?>,  //malang
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Bali');
                    echo $this->db->count_all_results();
                    ?>,  //bali
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Nusa Tenggara Barat');
                    echo $this->db->count_all_results();
                    ?>,  //ntb
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Kalimantan Timur');
                    echo $this->db->count_all_results();
                    ?>,  //kaltim
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Sulawesi Utara');
                    echo $this->db->count_all_results();
                    ?>,  //sulut
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Sulawesi Selatan');
                    echo $this->db->count_all_results();
                    ?>,  //sulsel
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Kalimantan Barat');
                    echo $this->db->count_all_results();
                    ?>,  //kalbar
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Jambi');
                    echo $this->db->count_all_results();
                    ?>,  //jambi
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Lampung');
                    echo $this->db->count_all_results();
                    ?>,  //lampung
                    <?php 
                    $this->db->distinct();     
                    $this->db->select('id_status');
                    $this->db->from('status');
                    $this->db->where('kelompok',2);
                    $this->db->where('cabang','Perdami Papua');
                    echo $this->db->count_all_results();
                    ?>,  //papua
                    ]

                }]
            });
        </script>

                <script type="text/javascript">
                    Highcharts.chart('container5', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Statistik pengajuan per cabang'
                            },
                            subtitle: {
                                text: 'seluruh indonesia'
                            },
                            xAxis: {
                                categories: [
                                'Aceh',
                                'Sumut',
                                'Sumbar',
                                'Sumsel',
                                'Riau',
                                'Jakarta',
                                'Banten',
                                'Bekasi',
                                'Jabar',
                                'Jateng',
                                'DIY',
                                'Surakarta',
                                'Jatim',
                                'Malang',
                                'Bali',
                                'NTB',
                                'Kaltim',
                                'Sulut',
                                'Sulsel',
                                'Kalbar',
                                'Jambi',
                                'Lampung',
                                'Papua'
                                ],
                                crosshair: true
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Jml pengajuan'
                                }
                            },
                            tooltip: {
                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                                footerFormat: '</table>',
                                shared: true,
                                useHTML: true
                            },
                            plotOptions: {
                                column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0
                                }
                            },
                series: [{
                    name: 'Kelompok 1',
                    data: [
                    <?php 
                    $condition = " cabang='Perdami Nangroe Aceh Darussalam' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,  //aceh 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sumut
                    <?php 
                    $condition = " cabang='Perdami Sumatra Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sumbar 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sumsel 
                    <?php 
                    $condition = " cabang='Perdami Riau' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //riau 
                    <?php 
                    $condition = " cabang='Perdami DKI Jakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //Jakarta 
                    <?php 
                    $condition = " cabang='Perdami Banten' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //banten 
                    <?php 
                    $condition = " cabang='Perdami Bekasi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //bekasi 
                    <?php 
                    $condition = " cabang='Perdami Jawa Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //jabar 
                    <?php 
                    $condition = " cabang='Perdami Jawa Tengah' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //jateng 
                    <?php 
                    $condition = " cabang='Perdami Yogyakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //diy 
                    <?php 
                    $condition = " cabang='Perdami Surakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //surakarta 
                    <?php 
                    $condition = " cabang='Perdami Jawa Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //jatim 
                    <?php 
                    $condition = " cabang='Perdami Malang' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //malang 
                    <?php 
                    $condition = " cabang='Perdami Bali' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //bali 
                    <?php 
                    $condition = " cabang='Perdami Nusa Tenggara Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //ntb 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //kaltim 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sulut 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sulsel 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //kalbar 
                    <?php 
                    $condition = " cabang='Perdami Jambi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //jambi 
                    <?php 
                    $condition = " cabang='Perdami Lampung' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //lampung 
                    <?php 
                    $condition = " cabang='Perdami Papua' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //Papua
                    ]

                }, {
                    name: 'Kelompok 2',
                    data: [
                    <?php 
                    $condition = " cabang='Perdami Nangroe Aceh Darussalam' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,  //aceh 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sumut 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sumbar 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sumsel 
                    <?php 
                    $condition = " cabang='Perdami Riau' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //riau 
                    <?php 
                    $condition = " cabang='Perdami DKI Jakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //Jakarta 
                    <?php 
                    $condition = " cabang='Perdami Banten' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //banten 
                    <?php 
                    $condition = " cabang='Perdami Bekasi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //bekasi 
                    <?php 
                    $condition = " cabang='Perdami Jawa Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //jabar 
                    <?php 
                    $condition = " cabang='Perdami Jawa Tengah' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //jateng 
                    <?php 
                    $condition = " cabang='Perdami Yogyakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //diy 
                    <?php 
                    $condition = " cabang='Perdami Surakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //surakarta 
                    <?php 
                    $condition = " cabang='Perdami Jawa Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //jatim 
                    <?php 
                    $condition = " cabang='Perdami Malang' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //malang 
                    <?php 
                    $condition = " cabang='Perdami Bali' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //bali 
                    <?php 
                    $condition = " cabang='Perdami Nusa Tenggara Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //ntb 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //kaltim 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sulut 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sulsel 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //kalbar 
                    <?php 
                    $condition = " cabang='Perdami Jambi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //jambi 
                    <?php 
                    $condition = " cabang='Perdami Lampung' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //lampung 
                    <?php 
                    $condition = " cabang='Perdami Papua' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>   //Papua
                    ]

                }]
            });
        </script>

                <script type="text/javascript">
                    Highcharts.chart('container6', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Statistik pengajuan terverifiksi per cabang'
                            },
                            subtitle: {
                                text: 'seluruh indonesia'
                            },
                            xAxis: {
                                categories: [
                                'Aceh',
                                'Sumut',
                                'Sumbar',
                                'Sumsel',
                                'Riau',
                                'Jakarta',
                                'Banten',
                                'Bekasi',
                                'Jabar',
                                'Jateng',
                                'DIY',
                                'Surakarta',
                                'Jatim',
                                'Malang',
                                'Bali',
                                'NTB',
                                'Kaltim',
                                'Sulut',
                                'Sulsel',
                                'Kalbar',
                                'Jambi',
                                'Lampung',
                                'Papua'
                                ],
                                crosshair: true
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Jml pengajuan terverifiksi'
                                }
                            },
                            tooltip: {
                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                                footerFormat: '</table>',
                                shared: true,
                                useHTML: true
                            },
                            plotOptions: {
                                column: {
                                    pointPadding: 0.2,
                                    borderWidth: 0
                                }
                            },
                series: [{
                    name: 'Kelompok 1',
                    data: [
                    <?php 
                    $condition = " cabang='Perdami Nangroe Aceh Darussalam' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,  //aceh 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sumut
                    <?php 
                    $condition = " cabang='Perdami Sumatra Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sumbar 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sumsel 
                    <?php 
                    $condition = " cabang='Perdami Riau' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //riau 
                    <?php 
                    $condition = " cabang='Perdami DKI Jakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //Jakarta 
                    <?php 
                    $condition = " cabang='Perdami Banten' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //banten 
                    <?php 
                    $condition = " cabang='Perdami Bekasi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //bekasi 
                    <?php 
                    $condition = " cabang='Perdami Jawa Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //jabar 
                    <?php 
                    $condition = " cabang='Perdami Jawa Tengah' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //jateng 
                    <?php 
                    $condition = " cabang='Perdami Yogyakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //diy 
                    <?php 
                    $condition = " cabang='Perdami Surakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //surakarta 
                    <?php 
                    $condition = " cabang='Perdami Jawa Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //jatim 
                    <?php 
                    $condition = " cabang='Perdami Malang' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //malang 
                    <?php 
                    $condition = " cabang='Perdami Bali' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //bali 
                    <?php 
                    $condition = " cabang='Perdami Nusa Tenggara Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //ntb 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //kaltim 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sulut 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //sulsel 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //kalbar 
                    <?php 
                    $condition = " cabang='Perdami Jambi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //jambi 
                    <?php 
                    $condition = " cabang='Perdami Lampung' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //lampung 
                    <?php 
                    $condition = " cabang='Perdami Papua' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','1');
                    echo $this->db->count_all_results();
                    ?>,   //Papua
                    ]

                }, {
                    name: 'Kelompok 2',
                    data: [
                    <?php 
                    $condition = " cabang='Perdami Nangroe Aceh Darussalam' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,  //aceh 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sumut 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sumbar 
                    <?php 
                    $condition = " cabang='Perdami Sumatra Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sumsel 
                    <?php 
                    $condition = " cabang='Perdami Riau' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //riau 
                    <?php 
                    $condition = " cabang='Perdami DKI Jakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //Jakarta 
                    <?php 
                    $condition = " cabang='Perdami Banten' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //banten 
                    <?php 
                    $condition = " cabang='Perdami Bekasi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //bekasi 
                    <?php 
                    $condition = " cabang='Perdami Jawa Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //jabar 
                    <?php 
                    $condition = " cabang='Perdami Jawa Tengah' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //jateng 
                    <?php 
                    $condition = " cabang='Perdami Yogyakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //diy 
                    <?php 
                    $condition = " cabang='Perdami Surakarta' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //surakarta 
                    <?php 
                    $condition = " cabang='Perdami Jawa Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //jatim 
                    <?php 
                    $condition = " cabang='Perdami Malang' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //malang 
                    <?php 
                    $condition = " cabang='Perdami Bali' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //bali 
                    <?php 
                    $condition = " cabang='Perdami Nusa Tenggara Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //ntb 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Timur' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //kaltim 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Utara' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sulut 
                    <?php 
                    $condition = " cabang='Perdami Sulawesi Selatan' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //sulsel 
                    <?php 
                    $condition = " cabang='Perdami Kalimantan Barat' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //kalbar 
                    <?php 
                    $condition = " cabang='Perdami Jambi' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //jambi 
                    <?php 
                    $condition = " cabang='Perdami Lampung' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>,   //lampung 
                    <?php 
                    $condition = " cabang='Perdami Papua' ";     
                    $this->db->select('COUNT');
                    $this->db->like('cabang');
                    $this->db->from('status');
                    $this->db->where('status','verified');
                    $this->db->where($condition);
                    $this->db->where('kelompok','2');
                    echo $this->db->count_all_results();
                    ?>   //Papua
                    ]

                }]
            });
        </script>

    </body>
</html>