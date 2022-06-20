<!-- ambil semua akses yg ada ditable -->
<?php
$sql = "SELECT * FROM tauth where Iduser =  " . $this->session->userdata('UserId');
$auth = $this->db->query($sql);
// echo "<pre>";
// print_r ($query->result());
// exit();
?>

<!-- ambil level yang aktif -->
<?php
$sql1 = "SELECT UserLevelAktif FROM tuser where UserId =  " . $this->session->userdata('UserId');
$level = $this->db->query($sql1)->row_array();
?>





<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="<?php echo base_url('secure/dasbor/' . $level['UserLevelAktif']) ?>" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <!-- Koordinator -->
            <?php if ($level['UserLevelAktif'] == 'koordinator') { ?>
                <li>
                    <a href="<?php echo base_url('secure/periode') ?>" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Periode</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad-2"></i>
                        <span class="nav-text">Database</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('secure/master/dosen') ?>">
                                Dosen
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/master/koordinator') ?>">
                                Koordinator
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/master/kaprodi') ?>">
                                Kaprodi
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/master/operator') ?>">
                                Operator
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/master/mahasiswa') ?>">
                                Mahasiswa
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad-2"></i>
                        <span class="nav-text">Cek Berkas</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('secure/pendaftaran/daftar_skripsi') ?>">
                                Pendaftaran Skripsi
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/pendaftaran/daftar_seminar') ?>">
                                Pendaftaran Seminar
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/pendaftaran/daftar_sidang') ?>">
                                Pendaftaran Sidang
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad-2"></i>
                        <span class="nav-text">Buat Jadwal</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('secure/jadwal/seminar') ?>">
                                Jadwal Seminar
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/jadwal/sidang') ?>">
                                Jadwal Sidang
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('secure/bimbingan/bagi_dosbing') ?>" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Bagi Pembimbing</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad-2"></i>
                        <span class="nav-text">Rekap Data</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="<?php echo base_url('secure/skripsi/judul') ?>">
                                Judul Skripsi
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/skripsi/nilai_seminar') ?>">
                                Hasil Seminar
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/skripsi/nilai_sidang') ?>">
                                Hasil Sidang
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/jadwal/sidang') ?>">
                                Nilai Akhir
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('secure/jadwal/sidang') ?>">
                                Kriteria Penilaian
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Dosen -->
            <?php } elseif ($level['UserLevelAktif'] == 'dosen') { ?>
                <li <?php echo $this->uri->segment(3) == 'bimbingan' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('secure/jadwal/bimbingan') ?>" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Jadwal Bimbingan</span>
                    </a>
                </li>

                <li <?php echo $this->uri->segment(3) == 'mahasiswa' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('secure/bimbingan/mahasiswa') ?>" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Mahasiswa Bimbingan</span>
                    </a>
                </li>

                <li <?php echo $this->uri->segment(3) == 'proses_bimbingan' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('secure/bimbingan/proses_bimbingan') ?>" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Bimbingan</span>
                    </a>
                </li>

                <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'nilai' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
                    <a href="" class="nav-link has-dropdown ai-icon" aria-expanded="false" data-toggle="dropdown">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Penilaian</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li <?php echo $this->uri->segment(3) == 'seminar' ? 'class="active"' : '' ?>>
                            <a class="nav-link" href="<?php echo base_url('secure/nilai/seminar') ?>"><i class="fas fa-font"></i>
                                <span>Seminar Proposal</span>
                            </a>
                        </li>
                        <li <?php echo $this->uri->segment(3) == 'sidang' ? 'class="active"' : '' ?>>
                            <a class="nav-link" href="<?php echo base_url('secure/nilai/sidang') ?>"><i class="fas fa-file-invoice"></i>
                                <span>Sidang Skripsi</span>
                            </a>
                        </li>
                        <li <?php echo $this->uri->segment(3) == 'nilai_akhir' ? 'class="active"' : '' ?>>
                            <a class="nav-link" href="<?php echo base_url('secure/nilai/nilai_akhir') ?>"><i class="fas fa-graduation-cap"></i>
                                <span>Nilai Akhir</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Kaprodi -->
            <?php } elseif ($level['UserLevelAktif'] == 'kaprodi') { ?>
                <li <?php echo $this->uri->segment(2) == 'monitoring' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('secure/monitoring') ?>" class="nav-link ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Monitoring</span>
                    </a>
                </li>

                <li <?php echo $this->uri->segment(2) == 'laporan' ? 'class="active"' : '' ?>>
                    <a href="<?php echo base_url('secure/laporan') ?>" class="nav-link ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Laporan</span>
                    </a>
                </li>
            <?php } elseif ($level['UserLevelAktif'] == 'operator') { ?>
                <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'pendaftaran' || $this->uri->segment(2) == '' ? 'active' : '' ?>">
                    <a href="" class="nav-link has-dropdown ai-icon" aria-expanded="false" data-toggle="dropdown">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Cek Berkas</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li <?php echo $this->uri->segment(3) == 'daftar_skripsi' ? 'class="active"' : '' ?>>
                            <a class="nav-link" href="<?php echo base_url('secure/pendaftaran/daftar_skripsi') ?>"><i class="fas fa-file"></i>
                                <span>Daftar Skripsi</span>
                            </a>
                        </li>
                        <li <?php echo $this->uri->segment(3) == 'daftar_seminar' ? 'class="active"' : '' ?>>
                            <a class="nav-link" href="<?php echo base_url('secure/pendaftaran/daftar_seminar') ?>"><i class="fas fa-file"></i>
                                <span>Daftar Seminar</span>
                            </a>
                        </li>
                        <li <?php echo $this->uri->segment(3) == 'daftar_sidang' ? 'class="active"' : '' ?>>
                            <a class="nav-link" href="<?php echo base_url('secure/pendaftaran/daftar_sidang') ?>"><i class="fas fa-file"></i>
                                <span>Daftar Sidang</span>
                            </a>
                        </li>
                        <li <?php echo $this->uri->segment(3) == 'bebas_skripsi' ? 'class="active"' : '' ?>>
                            <a class="nav-link" href="<?php echo base_url('secure/pendaftaran/bebas_prodi') ?>"><i class="fas fa-file"></i>
                                <span>Bebas Prodi</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php
            }
            ?>
            <ul class="border-bottom mb-3 justify-content-between"></ul>
            <?php
            if (count($auth->result()) > 1) { ?>
                <?php
                foreach ($auth->result() as $key => $akses) {
                    $active = $level['UserLevelAktif'] == $akses->Namalevel ? 'class="mm-active"' : '';
                ?>
                    <li <?php echo $active ?>>
                        <?php
                        if ($akses->Namalevel == 'dosen') {
                            $iconmenu = 'flaticon-381-networking';
                            $buttonicon = 'btn-secondary';
                        } elseif ($akses->Namalevel == 'koordinator') {
                            $iconmenu = 'flaticon-381-networking';
                        } elseif ($akses->Namalevel == 'kaprodi') {
                            $iconmenu = 'flaticon-381-networking';
                        } elseif ($akses->Namalevel == 'operator') {
                            $iconmenu = 'flaticon-381-networking';
                        }  ?>
                        <a href=" <?php echo base_url('secure/akses/auth/' . $akses->Namalevel) ?>" class="ai-icon" aria-expanded="false">
                            <i class="<?= $iconmenu; ?>"></i>
                            <span class="nav-text">Sebagai <?= $akses->Namalevel; ?></span>
                            </button></span>
                        </a>
                    <?php } ?>
                    </li>
                <?php } ?>
        </ul>

    </div>
</div>
<!--**********************************
            Sidebar end
***********************************-->




<div class="content-body pt-4 mt-4">
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="container">
                    <h1><?php echo $title ?></h1>
                </div>
            </div>
            <div class="section-body">
                <?php if ($this->session->flashdata('simpan')) {
                    echo $this->session->flashdata('simpan');
                } ?>
                <?php if ($this->session->flashdata('edit')) {
                    echo $this->session->flashdata('edit');
                } ?>
                <?php if ($this->session->flashdata('acc')) {
                    echo $this->session->flashdata('acc');
                } ?>
                <?php if ($this->session->flashdata('hapus')) {
                    echo $this->session->flashdata('hapus');
                } ?>
                <?php if (validation_errors()) {
                    echo validation_errors();
                } ?>

            </div>