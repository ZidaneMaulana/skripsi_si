<?php
  if($this->session->userdata('MhsNim') != null) { // Ada Login Mahasiswa
    redirect('mhs/dasbor');
  } else if($this->session->userdata('UserLevelAktif') != null) { // belum login samsek
    redirect('secure/dasbor/'.$this->session->userdata('UserLevelAktif'));
  }
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login | Sistem Monitoring Skripsi - SI UMK</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>vendor/adminpanel/images/favicon.png">
    <link href="<?=base_url()?>vendor/adminpanel/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="<?=base_url()?>"><img
                                                src="<?=base_url()?>vendor/collections/logo-white.png" alt=""
                                                class=" w-50"></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Silakan login</h4>
                                    <form name="mhs_login" action="<?= base_url('home/login'); ?>"
                                        onsubmit="return login_mhs()" method="POST">
                                        <?php
              // //notifikasi error
              // echo validation_errors('<div class="alert alert-warning">','</div>');

              //notifikasi gagal login
              if ($this->session->flashdata('salah')) {
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('salah');
                echo '</div>';
              }

              //notifikasi berhasil register
              if ($this->session->flashdata('login')) {
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('login');
                echo '</div>';
              }

              //notifikasi relog
              if ($this->session->flashdata('relog')) {
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('relog');
                echo '</div>';
              }


              ?>

                                        <?php
              if ($this->session->flashdata('logout')) { ?>
                                        <div class="alert alert-info alert-dismissible show fade">
                                            <div class="alert-body">
                                                <button class="close" data-dismiss="alert">
                                                    <span>&times;</span>
                                                </button>
                                                <?php
                    echo $this->session->flashdata('logout');
                    ?>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>NIM</strong></label>
                                            <input type="text" class="form-control" name="nim"
                                                placeholder="Masukkan NIM">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Masukkan Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <!-- <div class="custom-control custom-checkbox ml-1 text-white">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div> -->
                                            </div>
                                            <div class="form-group">
                                                <a class="text-white" href="page-forgot-password.html">Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-white text-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Belum punya akun? <a class="text-white"
                                                href="<?=base_url()?>register">DAFTAR SEKARANG</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?=base_url()?>vendor/adminpanel/vendor/global/global.min.js"></script>
    <script src="<?=base_url()?>vendor/adminpanel/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?=base_url()?>vendor/adminpanel/js/custom.min.js"></script>
    <script src="<?=base_url()?>vendor/adminpanel/js/deznav-init.js"></script>

</body>

</html>