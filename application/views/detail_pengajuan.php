<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Profil Admin | PERDAMI | Resertifikasi Dokter Spesialis Mata</title>

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
                                        <a href="<?php echo base_url() ?>index.php/dashboard/profil"><i class="si si-feed"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>index.php/dashboard/admin"><i class="si si-key"></i><span class="sidebar-mini-hide">Admin</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>index.php/dashboard/dokter"><i class="fa fa-stethoscope"></i><span class="sidebar-mini-hide">Dokter</span></a>
                                    </li>
                                    <li>
                                        <a class="active" href="<?php echo base_url() ?>index.php/dashboard/pengajuan"><i class="si si-book-open"></i><span class="sidebar-mini-hide">Pengajuan</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>index.php/dashboard/terverifikasi"><i class="si si-check"></i><span class="sidebar-mini-hide">Terverifikasi</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>index.php/dashboard/pengaturan"><i class="si si-settings"></i><span class="sidebar-mini-hide">Pengaturan</span></a>
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
                                    <a class="dropdown-item" href="<?php echo base_url() ?>index.php/dashboard/admin">
                                        <i class="si si-user mr-5"></i> Profile
                                    </a>
                                <!-- <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a> -->
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/dashboard/pengaturan" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/dashboard/logout">
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
                        <h2 class="content-heading">Detail Pengajuan</h2>
                        <div class="block">
                            <div class="block-content">
                                <div class="row">

                                    <div class="col-md-10">
                                        <div class="block">
                                            <div class="block-content block-content-full clearfix">
                                                <div class="text-left">
                                                    <ul class="nav-users">
                                                    <?php
                                                     if(!empty($dokter))
                                                        foreach ($dokter as $row) { ?>
                                                            <?php echo form_open_multipart('dashboard/approve');?>
                                                            <li>
                                                                <h4><label class="label-horizontal">Nama Dokter : </label><b><?php echo $row->nama_user; ?></b></h4>
                                                            </li>
                                                    <?php } ?>
                                                    <?php
                                                            if(!empty($nama_status))
                                                                foreach ($nama_status as $row) { ?>
                                                                    <li>
                                                                        <h4><label class="label-horizontal">Kelompok Pengajuan : </label><b> Kelompok <?php echo $row->kelompok; ?></b></h4>
                                                                    </li>
                                                    <?php } ?>
                                                    <?php
                                                     if(!empty($dokter))
                                                        foreach ($dokter as $row) { ?>
                                                            <li>
                                                                <label class="label-horizontal">ID Dokter : </label>                                 
                                                                <select class="form-control" id="material-select2" name="id_user">
                                                                    <option value="<?php echo $row->id_user; ?>"><?php echo $row->id_user; ?></option>
                                                                </select>
                                                                <small class="text-danger"><?=form_error('id_user')?></small>
                                                                <!-- <input type="text" class="form-control" id="detail-status" name="status" placeholder="Pilih Status"> -->
                                                            </li>
                                                            <li>
                                                                <p></p>
                                                            </li>
                                                            <li>
                                                                <label class="label-horizontal">Email : </label>                                 
                                                                <select class="form-control" id="material-select2" name="email">
                                                                    <option value="<?php echo $row->email; ?>"><?php echo $row->email; ?></option>
                                                                </select>
                                                                <small class="text-danger"><?=form_error('email')?></small>
                                                                <!-- <input type="text" class="form-control" id="detail-status" name="status" placeholder="Pilih Status"> -->
                                                            </li>
                                                            <li>
                                                                <p></p>
                                                            </li>  
                                                            <li>
                                                                <label class="label-horizontal">Status Pengajuan : </label>                                 
                                                                <select class="form-control" id="material-select2" name="status" required>
                                                                    <option>Pilih Status Pengajuan</option>
                                                                    <option value="verified">Verified</option>
                                                                    <option value="not-verified">Not-Verified</option>
                                                                </select>
                                                                <small class="text-danger"><?=form_error('status')?></small>
                                                                <!-- <input type="text" class="form-control" id="detail-status" name="status" placeholder="Pilih Status"> -->
                                                            </li>
                                                            <li>
                                                                <p></p>
                                                            </li>                                                    
                                                            <li>
                                                                <label class="label-horizontal">Deskripsi Keterangan pengajuan : </label>
                                                                <input type="text" class="form-control" id="detail-keterangan" name="keterangan" placeholder="Masukkan Deskripsi Keterangan">
                                                            </li>
                                                            <li>
                                                                <p></p>
                                                            </li>
                                                            <li>
                                                                <label class="label-horizontal">Deskripsi Kelengkapan file : </label>
                                                                <input type="text" class="form-control" id="kelengkapan" name="kelengkapan" placeholder="Masukkan Deskripsi mengenai kekurangan file , jika tidak ada kosongkan form ini">
                                                            </li> 
                                                            <small>*Keterangan : Ubah status pengajuan untuk update status pengajuan yang diajukan oleh Dokter</small>
                                                        </ul>
                                                        <button class="btn btn-sm btn btn-primary" type="submit" name="submit" value="submit">Simpan Perubahan</button>
                                                        <?php echo form_close();?> 
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="content-heading">Data file yang di unggah Kelompok 1</h2>
                        <div class="block">
                            <div class="block-content tab-content">
                                 <div style="overflow-y:hidden; overflow-x:scroll; padding:0px; width:100%; height:auto; background-color: rgb(255, 255, 255); border:1px solid #ccc;">
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sudah sesuai</th>
                                            <th style="width: 25%;">Nama File</th>
                                            <th class="d-none d-sm-table-cell">Waktu Unggah</th>
                                            <th class="d-none d-sm-table-cell">Ukuran File</th>
                                            <th class="d-none d-sm-table-cell">Jenis Form</th>
                                            <th class="d-none d-sm-table-cell">Kelompok Sertifikasi</th>
                                            <th class="d-none d-sm-table-cell">pernah dibaca oleh</th>
                                            <th class="d-none d-sm-table-cell">Tanda</th>
                                            <th class="text-center" style="width: 15%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($file_satu))
                                            foreach ($file_satu as $row){ ?> 
                                            <tr>
                                                <?php echo form_open_multipart('dashboard/cekbox');?>
                                                <th class="text-center" scope="row">
                                                    <?php echo '<a href="'.base_url().'index.php/dashboard/mark_file/'.$row->id_row.'"class="btn btn-sm btn-primary si si-check" title="Tandai sebagai berkas telah sesuai" class="si si-check"> Tandai</a>'?>
                                                </th>
                                                <?php echo form_close();?>
                                                <td class="font-w600"><?php echo $row->nama_file; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $row->waktu_unggah; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $row->ukuran; ?></td>
                                                <td class="d-none d-sm-table-cell">Formulir <?php echo $row->jenis; ?></td>
                                                <td class="d-none d-sm-table-cell">Kelompok <?php echo $row->kelompok; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $row->pernah_baca; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $row->tandai; ?></td>
                                                <td class="text-center">
                                                    <div>
                                                        <?php echo '<a href="http://resertifikasi.perdami.id/Upload/user/'.$row->nama_file.'"class="btn btn-sm btn-secondary" title="Download File" class="fa fa-times">Unduh</a>'?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } else { ?>
                                            <td><small>#</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                                <small><b class="text-left">
                                    <td>Keterangan Form :</td></br>
                                    <td>Formulir 1 : Sertifikat kompetensi lama  </td></br>
                                    <td>Formulir 2 : Ijazah </td></br>
                                    <td>Formulir 3 : Rekomdendasi KADEP </td></br>  
                                    <td>Formulir 9 : Bukti Pembayaran untuk Kelompok 1 </td></br>
                                    <th>Gunakan tombol tandai untuk memberikan tanda bahwa file sudah benar</th>
                                </b></small>

                            </div>
                        </div>               


                        <h2 class="content-heading">Data file yang di unggah Kelompok 2</h2>
                        <div class="block">
                            <div class="block-content tab-content">
                                 <div style="overflow-y:hidden; overflow-x:scroll; padding:0px; width:100%; height:auto; background-color: rgb(255, 255, 255); border:1px solid #ccc;">
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sudah sesuai</th>
                                            <th style="width: 25%;">Nama File</th>
                                            <th class="d-none d-sm-table-cell">Waktu Unggah</th>
                                            <th class="d-none d-sm-table-cell">Ukuran File</th>
                                            <th class="d-none d-sm-table-cell">Jenis Form</th>
                                            <th class="d-none d-sm-table-cell">Skore tiap Dokumen</th>
                                            <th class="d-none d-sm-table-cell">Pernah dibaca oleh</th>
                                            <th class="d-none d-sm-table-cell">Tanda Cek</th>
                                            <th class="text-center" style="width: 15%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                     if(!empty($file_dua))
                                        foreach ($file_dua as $row){ ?>
                                            <tr>
                                                <?php echo form_open_multipart('dashboard/cekbox');?>
                                                <th class="text-center" scope="row">
                                                    <?php echo '<a href="'.base_url().'index.php/dashboard/mark_file/'.$row->id_row.'"class="btn btn-sm btn-primary si si-check" title="Tandai sebagai berkas telah sesuai" class="fa fa-times"> Tandai</a>'?>
                                                </th>
                                                <?php echo form_close();?> 
                                                <td class="font-w600"><?php echo $row->nama_file; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $row->waktu_unggah; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $row->ukuran; ?></td>
                                                <td class="d-none d-sm-table-cell">Formulir <?php echo $row->jenis; ?></td>
                                                <td class="d-none d-sm-table-cell">Skore <?php echo $row->skore; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $row->pernah_baca; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $row->tandai; ?></td>
                                                <td class="text-center">
                                                    <div>
                                                        <?php echo '<a href="http://resertifikasi.perdami.id/Upload/user/'.$row->nama_file.'"class="btn btn-sm btn-secondary" title="Download File" class="fa fa-times">Unduh</a>'?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } else { ?>
                                            <td><small>#</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                            <td><small>data masih kosong</small></td>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                                <small><b class="text-left">
                                    <td>Keterangan Form Kelompok 2 :</td></br>
                                    <th>Formulir 4 : Rekomendasi ketua cabang </th></br>
                                    <th>Formulir 5 : Kursus/pelatihan </th></br>
                                    <th>Formulir 6 : Karya Ilmiah </th></br>
                                    <th>Formulir 7 : Jumlah operasi </th></br>
                                    <th>Formulir 8 : Frekuensi Komplikasi dan Komplain </th></br>
                                    <th>Formulir 10 : Bukti pembayaran kelompok 2 </th></br>
                                    <th>Gunakan tombol tandai untuk memberikan tanda bahwa file sudah benar</th>
                                </b></small>

                            </div>
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

        <!-- Page JS Plugins -->
        <script src="<?php echo base_url() ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url() ?>assets/js/pages/be_tables_datatables.js"></script>
    </body>
    </html>