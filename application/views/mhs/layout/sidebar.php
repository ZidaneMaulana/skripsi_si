        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="<?php echo base_url('mhs/dasbor') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad-2"></i>
                            <span class="nav-text">Pendaftaran</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('mhs/pendaftaran/daftar_skripsi') ?>">
                                    Daftar Skripsi
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('mhs/pendaftaran/daftar_seminar') ?>">
                                    Daftar Seminar
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('mhs/pendaftaran/daftar_sidang') ?>">
                                    Daftar Sidang
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('mhs/jadwal/bimbingan') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-calendar-5"></i>
                            <span class="nav-text">Jadwal Bimbingan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('mhs/bimbingan') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-notebook-2"></i>
                            <span class="nav-text">Bimbingan</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-star-1"></i>
                            <span class="nav-text">Nilai Sidang</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url('mhs/nilai/seminar') ?>">
                                    Seminar Proposal
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('mhs/nilai/sidang') ?>">
                                    Sidang Skripsi
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('mhs/nilai/nilai_akhir') ?>">
                                    Nilai Akhir
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('mhs/skripsi/judul_skripsi') ?>" class="ai-icon"
                            aria-expanded="false">
                            <i class="flaticon-381-send-2"></i>
                            <span class="nav-text">Judul Skripsi</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('mhs/skripsi/bebas_prodi') ?>" class="ai-icon"
                            aria-expanded="false">
                            <i class="flaticon-381-folder-12"></i>
                            <span class="nav-text">Bebas Prodi</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('mhs/profil') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-id-card-5"></i>
                            <span class="nav-text">Profil</span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1><?php echo $title ?></h1>
                </div>
                <div class="section-body">
                    <?php if ($this->session->flashdata('simpan')) 
{ echo $this->session->flashdata('simpan'); }?>

                    <?php if ($this->session->flashdata('edit')) 
{ echo $this->session->flashdata('edit'); }?>

                    <?php if ($this->session->flashdata('hapus')) 
{ echo $this->session->flashdata('hapus'); }?>

                    <?php if (validation_errors()) 
{ echo validation_errors(); }?>