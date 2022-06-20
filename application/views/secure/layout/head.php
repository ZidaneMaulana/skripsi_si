<?php
  if($this->session->userdata('UserLevelAktif') == null && $this->session->userdata('MhsNim') != null) { // Ada Login Mahasiswa
    redirect('mhs/dasbor');
  } else if($this->session->userdata('UserLevelAktif') == null) { // belum login samsek
    redirect('home/secure');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sistem Monitoring Skripsi - SI UMK</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>vendor/adminpanel/images/favicon.png">
    <link rel="stylesheet" href="<?=base_url()?>vendor/adminpanel/vendor/chartist/css/chartist.min.css">
    <link href="<?=base_url()?>vendor/adminpanel/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
        rel="stylesheet">
    <link href="<?=base_url()?>vendor/adminpanel/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link href="<?=base_url()?>vendor/adminpanel/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url()?>vendor/adminpanel/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?=base_url()?>vendor/adminpanel/vendor/toastr/css/toastr.min.css">
    <script src="<?php echo base_url() ?>assets/dist/iziToast.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/iziToast.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

</head>