<div class="content-body pt-4 mt-4">
    <!-- row -->
    <div class="container-fluid pt-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <div>

                    <?php if ($status_akun->MhsStatus == 1) {
                        $akunstatus = 'Aktif';
                        $labelstatus = 'success';
                        $pesanstatus = 'Selamat!';
                        $isistatus = 'Pendaftaran akun kamu telah disetujui koordinator!';
                        $iconnotif = 'check';
                    } else {
                        $akunstatus = 'Menunggu';
                        $labelstatus = 'warning';
                        $pesanstatus = 'Perhatian!';
                        $isistatus = 'Akun sedang menunggu persetujuaan koordinator!';
                        $iconnotif = 'help';
                    } ?>

                    <div class="alert alert-<?= $labelstatus; ?> left-icon-big alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                        <div class="media">
                            <div class="alert-left-icon-big">
                                <span><i class="mdi mdi-<?= $iconnotif; ?>-circle-outline"></i></span>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-1 mb-2"><?= $pesanstatus; ?></h5>
                                <p class="mb-0"><?= $isistatus; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-12">
                <div class="card overflow-hidden w-1024 h-450">
                    <div class="card-body p-0">
                        <!-- <h4 class="card-intro-title">Slides only</h4> -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?= base_url() ?>vendor/collections/slide-1.png" alt="First slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url() ?>vendor/collections/slide-2.png" alt="Second slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url() ?>vendor/collections/slide-3.png" alt="Third slide">
                                </div>
                            </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="row">
            <div class="col-xl-6">


                <div class="card overflow-hidden w-100 h-75 mx-auto">
                    <div class="card-body p-0 text-center">
                        <img src="<?= base_url() ?>vendor/collections/bg.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay mt-4 p-4 text-white">
                            <div class="profile-photo pb-4">
                                <img src="<?= base_url() ?>vendor/adminpanel/images/profile/profile.png" width="100" class="img-fluid rounded mr-3" alt="">
                            </div>
                            <p class="card-text">Selamat datang
                                <strong><?php echo $this->session->userdata('MhsNama'); ?></strong>
                            </p>
                            <span>
                                Selamat datang di Aplikasi Pendaftaran Skripsi Program Studi Sistem Informasi
                                Universitas Muria Kudus
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-6">
                <div class="card overflow-hidden w-100 h-100 mx-auto">
                    <div class="card-body p-0 text-center">
                        <img </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-6">
                <div class="card text-center overflow-hidden h-100 mx-auto">
                    <div class="card-header">
                        <h5 class="card-title">Progress Bimbingan</h5>
                    </div>
                    <div class="card-body p-0 mr-0">
                        <img src="<?= base_url() ?>vendor/collections/no_data.png" class="card-img" alt="...">
                        <div class="card-body p-4">
                            <p class="card-text text-dark">Ini adalah panel informasi progress bimbingan anda, apabila
                                anda
                                belum melakukan pendaftaran skripsi silakan klik link dibawah</p>
                            <a href="<?= base_url('mhs/pendaftaran/daftar_skripsi') ?>" class="btn btn-primary">DAFTAR
                                SKRIPSI</a>
                        </div>
                    </div>
                </div>
            </div>










        </div>
    </div>
</div>