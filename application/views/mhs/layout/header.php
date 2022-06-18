<?php 
$periode = $this->db->query("SELECT * FROM tperiodes Where PeriodesStatusaktif =1")->row_array();
$tanggal = $periode['PeriodesSelesai'];
$tanggal = new DateTime($tanggal); 
$sekarang = new DateTime();
$perbedaan = $tanggal->diff($sekarang);
// echo $perbedaan->y.' selisih tahun.';
// echo $perbedaan->m.' selisih bulan.';
// echo $perbedaan->d.' selisih hari.';
// echo $perbedaan->h.' selisih jam.';
// echo $perbedaan->i.' selisih menit.';
 ?>

<body>
    <!-- <div id="app"> -->

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <input type="hidden" id="base" value="<?php echo base_url(); ?>">
            <a href="<?=base_url('mhs/dasbor')?>" class="brand-logo">
                <img class="logo-abbr" src="<?=base_url()?>vendor/collections/icon.png" alt="">
                <img class="logo-compact" src="<?=base_url()?>vendor/collections/icon-txt.png" alt="">
                <img class="brand-title" src="<?=base_url()?>vendor/collections/icon-txt.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger pb-5 pt-1">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>



        <!--**********************************
            Header start
        ***********************************-->
        <div class="header" style="height: 75px;">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <!-- Dashboard -->
                                <a href="<?=base_url('mhs/pendaftaran/daftar_skripsi')?>" class="btn btn-primary">
                                    Pendaftaran Skripsi
                                </a>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img class="rounded mr-1"
                                        src="<?=base_url()?>vendor/adminpanel/images/profile/17.jpg" width="20"
                                        alt="" />
                                    <div class="header-info">
                                        <span
                                            class="text-black"><strong><?php echo $this->session->userdata('MhsNama'); ?></strong></span>
                                        <p class="fs-12 mb-0">Mahasiswa</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo base_url('secure/profil') ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="<?=base_url()?>vendor/adminpanel/email-inbox.html"
                                        class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="<?=base_url('home/mhs_logout')?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->