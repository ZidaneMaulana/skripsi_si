<!-- ambil level yang aktif -->
<?php 
$sql1 ="SELECT UserLevelAktif FROM tuser where UserId =  ".$this->session->userdata('UserId'); 
$level = $this->db->query($sql1)->row_array();
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

                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img class="rounded mr-3"
                                        src="<?=base_url()?>vendor/adminpanel/images/profile/17.jpg" width="20"
                                        alt="" />
                                    <div class="header-info">
                                        <span
                                            class="text-black"><strong><?php echo $this->session->userdata('UserUsername'); ?></strong></span>
                                        <p class="fs-12 mb-0"><?php echo $level['UserLevelAktif'] ?></p>
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
                                    <a href="#" onclick="exit_toast()" class="dropdown-item ai-icon">
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


        <body>
            <div id="app">
                <div class="main-wrapper">
                    <div class="navbar-bg"></div>
                    <nav class="navbar navbar-expand-lg main-navbar">
                        <form class="form-inline mr-auto">
                            <ul class="navbar-nav mr-3">
                                <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                            class="fas fa-bars"></i></a></li>
                                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                            class="fas fa-search"></i></a></li>
                            </ul>
                            <b>
                                <p align="left" style="color: white; position: relative; top: 9px;">
                                    <?php echo date('D d M Y'); ?></p>
                            </b>
                        </form>
                        <ul class="navbar-nav navbar-right">
                            <li class="dropdown"><a href="#" data-toggle="dropdown"
                                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                    <div class="d-sm-none d-lg-inline-block">Hi,
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo base_url('secure/profil') ?>" class="dropdown-item has-icon"
                                        style="color: black;">
                                        <i class="far fa-user"></i>Profil
                                    </a>
                                    <button class="btn" onclick="exit_toast()"
                                        style="color: red; position: relative; left: 10px;"><i
                                            class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;&nbsp;Logout</button>
                                </div>
                            </li>
                        </ul>
                    </nav>