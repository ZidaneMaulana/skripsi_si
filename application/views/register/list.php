<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Daftar | Sistem Monitoring Skripsi - SI UMK</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>vendor/adminpanel/images/favicon.png">
    <link href="<?=base_url()?>vendor/adminpanel/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100" id="app">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-12">

                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12 col-lg-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="<?=base_url()?>vendor/collections/logo-white.png"
                                                alt="" class=" w-25"></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Pendaftaran Akun</h4>
                                    <?php if ($this->session->flashdata('simpan')) {
    echo $this->session->flashdata('simpan');
  } ?>

                                    <?php if ($this->session->flashdata('edit')) {
    echo $this->session->flashdata('edit');
  } ?>

                                    <?php if ($this->session->flashdata('hapus')) {
    echo $this->session->flashdata('hapus');
  } ?>

                                    <?php if (validation_errors()) {
    echo validation_errors();
  } ?>
                                    <form name="fdaftar" action="<?= base_url('home/register'); ?>"
                                        onsubmit="return daftar_form()" method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Nama Lengkap</strong></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukkan nama lengkap" name="nama">
                                                </div>

                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Email Aktif</strong></label>
                                                    <input type="email" class="form-control"
                                                        placeholder="Masukkan email yang valid" name="email">
                                                </div>

                                                <div class="form-group">

                                                    <label class="mb-1 text-white"><strong>Password</strong></label>
                                                    <div class="input-group ">
                                                        <div class="input-group mb-3">
                                                            <input id="password1" type="password"
                                                                class="form-control pwstrength"
                                                                data-indicator="pwindicator" name="password"
                                                                placeholder="Masukkan password">
                                                            <div class="input-group-append">
                                                                <i onclick="showPassword1()" id="icon1"
                                                                    class="btn btn-warning fa fa-eye-slash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>NIM</strong></label>
                                                    <input type="number" class="form-control" name="nim"
                                                        placeholder="Masukkan NIM anda">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Nomor
                                                            Whatsapp</strong></label>
                                                    <input min="12" type="number" class="form-control" name="nohp"
                                                        onchange="changeNumber(this)"
                                                        onkeypress="return event.charCode >=48 && event.charCode <=57"
                                                        maxlength="13" placeholder="Masukkan Nomor Whatsapp aktif">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Alamat</strong></label>
                                                    <input type="text" name="alamat" class="form-control"
                                                        placeholder="Masukkan alamat lengkap">
                                                </div>
                                                <div class="new-account mt-3">
                                                    <p class="text-white">Sudah punya akun? <a class="text-white"
                                                            href="<?=base_url()?>login">Login</a></p>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-xxl-12 text-center mt-4">
                                                <button type="submit"
                                                    class="btn bg-white text-primary btn-block">Daftar</button>
                                            </div>

                                        </div>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="<?=base_url()?>vendor/adminpanel/vendor/global/global.min.js"></script>
    <script src="<?=base_url()?>vendor/adminpanel/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?=base_url()?>vendor/adminpanel/js/custom.min.js"></script>
    <script src="<?=base_url()?>vendor/adminpanel/js/deznav-init.js"></script>



    <script>
    function changeNumber(param) {
        let val = param.value;
        let explode = val.split('');
        explode[0] = '62';
        let imp = explode.join('');
        param.value = imp;
    }
    </script>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url() ?>vendor/stisla/node_modules/jquery-pwstrength/jquery.pwstrength.min.js">
    </script>
    <script src="<?php echo base_url() ?>vendor/stisla/node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/sweetalert2.all.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo base_url() ?>assets/js/page/auth-register.js"></script>

</body>

</html>