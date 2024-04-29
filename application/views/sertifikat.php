<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Sertifikat | PERDAMI | Resertifikasi Dokter Spesialis Mata</title>

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

    <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <div>
                            <!-- <small>coming soon</small> -->
                            <button class="btn btn-sm btn btn-primary" onclick="myFunction()"><i class="si si-printer mr-5"></i> Cetak</button>                       
                            <!-- <small>coming soon</small> -->
                            <?php echo '<a href="'.base_url().'index.php/dashboard/terverifikasi"class="btn btn-sm btn btn-secondary" title="kembali" class="si si-printer"><i class="si si-slick-prev mr-5"></i> Kembali</a>'?>
                        </div>
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

    <body class="sertifikat-body">

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
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container" class="uppercase">

                <!-- Page Content -->
                <div class="content">
                    <div class="block">
                        <div class="block-content">
                            <div class="row">
                                	<div class="col-md-3">
                                		<!-- <div class="left-box">
                                			Resertifikasi
                                		</div> -->
                                	</div>
                                	<div class="col-md-6">
	                                	<center>
		                                	<div style="margin-bottom: -30px;margin-top:-40px;">
		                                		<img src="<?php echo base_url() ?>assets/media/logo-idi.png" class="img-logo">
		                                		<img src="<?php echo base_url() ?>assets/media/logo-perdami.png" class="img-logo" style="width: 38%;">
		                                	</div>
		                                </center>
	                            	</div>
                                    <div class="col-md-3">
                                        <!-- <div class="right-box">
                                            <?php
                                            if(!empty($dokter))
                                                foreach ($dokter as $row){ ?>
                                                   01012019<?php echo $row->id_user; ?>
                                        </div> -->
                                        <div class="right-box" style="position: absolute;top: 100%;padding: 1px 1px;">
                                            <img src="http://resertifikasi.perdami.id/Upload/foto/<?php echo $row->foto; ?>" alt="Foto" style="height: 270px;width: 180px;object-fit: cover;">
                                        </div>
                                    </div>
	                            <div class="col-md-12">
	                            	<center>
	                                	<div style="padding-bottom: 12px;">
		                                	<h4>Kolegium Oftalmologi Indonesia</h4>
		                                	<p class="italic">Indonesian College of Ophtalmology</p>
		                                	<h4>Persatuan Dokter Spesialis Mata Indonesia</h4>
		                                	<p class="italic">Indonesia Ophthalmologist Association</p>
	                                	</div>
	                                	<div style="padding-bottom: 12px;">
		                                	<h4>SERTIFIKAT KOMPETENSI</h4>
		                                	<p class="italic">CERTIFICATE OF COMPETENCE</p>
		                                	<h4><b>NO. 01012019<?php echo $row->id_user; ?></h4></b>
	                                	</div>
	                                	<div style="padding-bottom: 12px;">
		                                	<h5>Dengan Ini menyatakan bahwa</h5>
		                                	<p class="italic">This is to certify</p>
	                                	</div>
	                                	<div style="padding-bottom: 12px;">
		                                	<h2><b>dr. <?php echo $row->nama_user; ?></b></h2>
	                                	</div>
	                                	<div style="padding-bottom: 12px;">
		                                	<h5>Lahir di <?php echo $row->tempat_lahir; ?></h5>
		                                	<p class="italic">Born in <?php echo $row->tempat_lahir; ?></p>
	                                	</div>
	                                	<div style="padding-bottom: 12px;">
		                                	<h5>Universitas: <?php echo $row->universitas; ?></h5>
		                                	<p class="italic">University : <?php echo $row->universitas; ?></p>
	                                	</div>
	                                	<div style="padding-bottom: 12px;">
		                                	<p class="normal">Telah dinyatakan berkompeten melalui program Pengembangan Pendidikan<br/>Keprofesian Berkelanjutan (P2KB) untuk menjalankan praktik kedokteran<br/>sebagai :</p>
		                                	<p class="italic">is declared competent through continuing professional development program (CDP) and<br/>competent to practices medicine as :</p>
	                                	</div>
	                                	<div style="padding-bottom: 12px;">
		                                	<h3>Dokter Spesialis Mata</h3>
		                                	<h5><b>Ophthalmologist</b></h5>
	                                	</div>
	                                	<div style="padding-bottom: 10px;">
		                                	<h5><b>Sertifikat ini berlaku hingga : 
                                                <?php
                                                $date=date_create($row->str); 
                                                echo date_format($date,"d/m/Y");  
                                                ?> 
                                            </b></h5>
		                                	<p class="italic">This certificate  is valid up to : 
                                                <?php
                                                $date=date_create($row->str); 
                                                echo date_format($date,"d/m/Y");  
                                                ?></p> 
	                                	</div>
                                        <?php 
                                        if(!empty($cek_terverifikasi))
                                        foreach ($cek_terverifikasi as $row){ ?>
	                                	<div style="padding-bottom: 10px;">
		                                	<p class="normal">Bandung, <?php 
                                                $date=date_create($row->tanggal);
                                                date_add($date,date_interval_create_from_date_string("0 days"));
                                                echo date_format($date,"d F Y"); 
                                                ?></p>
	                                	</div>
                                        <?php } else { ?>

                                        <?php } ?>
	                                	<div style="padding-bottom: 12px;">
		                                	<h5><b>Kolegium Oftalmologi Indonesia</b></h5>
		                                	<p class="italic">Indonesian College of Ophtalmology</p>
	                                	</div>
	                                	<div style="padding-bottom: 12px;">
		                                	<h5 style="padding-bottom: 10px;border-bottom: 1px #333333 solid;width: 35%;"><b>DR. dr. Iwan Sovani, SpM(K)., M.Kes. MM</b></h5>
		                                	<h5><b>Ketua Umum</b></h5>
		                                	<p class="italic">Chairman</p>
	                                	</div>
                                	</center>
                                </div>
                                <?php } else { ?>

                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
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
        <script>
            function myFunction() {
              window.print();
          }
        </script>
    </body>
</html>