<!-- default -->
<div class="content-body pt-4 mt-4">
    <!-- row -->
    <div class="container-fluid pt-4 mt-4">



        <?php if ($lulus) { ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="lulus-tab5" data-toggle="tab" href="#lulus" role="tab"
                                    aria-controls="lulus" aria-selected="true">
                                    <i class="fas fa-lulus"></i>File Pendaftaran</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent5">
                            <div class="tab-pane fade show active" id="lulus" role="tabpanel"
                                aria-labelledby="lulus-tab5">
                                <br>
                                <div class="row" align="center">
                                    <div class="col-4">
                                        <h6 style="color: #718eef;">KRS</h6>
                                        <?php if ($lulus['DaftarsFileKrs'] == null) : ?>
                                        <span style="color: red">kosong</span>
                                        <?php else : ?>
                                        <a target="_blank"
                                            href="<?php echo base_url('assets/upload/pendaftaran/skripsi/' . $lulus['DaftarsFileKrs']) ?>"><img
                                                class="img-responsive"
                                                src="<?php echo base_url('assets/img/umk/pdf.png') ?>" alt="KRS"
                                                style="width:70px;height:70px; "></a>
                                        <?php endif ?>
                                    </div>

                                    <div class="col-4">
                                        <h6 style="color: #718eef;">Transkrip Nilai</h6>
                                        <?php if ($lulus['DaftarsFileTranskrip'] == null) : ?>
                                        <span style="color: red">kosong</span>
                                        <?php else : ?>
                                        <a target="_blank"
                                            href="<?php echo base_url('assets/upload/pendaftaran/skripsi/' . $lulus['DaftarsFileTranskrip']) ?>"><img
                                                class="img-responsive"
                                                src="<?php echo base_url('assets/img/umk/pdf.png') ?>" alt="Transkrip"
                                                style="width:70px;height:70px;"></a>
                                        <?php endif ?>
                                    </div>

                                    <div class="col-4">
                                        <h6 style="color: #718eef;">Bukti Pembayaran</h6>
                                        <?php if ($lulus['DaftarsFileSlip'] == null) : ?>
                                        <span style="color: red">kosong</span>
                                        <?php else : ?>
                                        <a target="_blank"
                                            href="<?php echo base_url('assets/upload/pendaftaran/skripsi/' . $lulus['DaftarsFileSlip']) ?>"><img
                                                class="img-responsive"
                                                src="<?php echo base_url('assets/img/umk/pdf.png') ?>" alt="Bukti Bayar"
                                                style="width:70px;height:70px;"></a>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } elseif ($akun['MhsStatus'] == 1) {  ?>
        <div class="row">
            <div class="col-12">
                <?php if ($daftar_skripsi['DaftarsStatus'] == 1) { ?>
                <div class="row">
                    <div class="col-xl-12 p-4 overflow-hidden h-100 mx-auto">
                        <div class="text-center">
                            <img class="w-50" src="<?php echo base_url() ?>vendor/collections/selamat.png?>"
                                alt="image">
                            <h2 class="mt-0">Selamat!</h2>
                            <p class="lead">
                                Pendaftaran skripsi kamu berhasil, silakan lanjutkan ke langkah
                                selanjutnya</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>



        <?php }
                                elseif ($daftar_skripsi['DaftarsStatus'] == null || $daftar_skripsi['DaftarsStatus'] == 2) { ?>

        <div class="row">
            <div class="col-xl-8">
                <div class="card overflow-hidden h-100 mx-auto">
                    <div class="card-header">
                        <h5 class="card-title"><i class="flaticon-381-notepad-2"></i>
                            Formulir Pendaftaran</h5>
                    </div>
                    <div class="card-body p-4 mr-0">

                        <form action="<?php echo $submit_daftar_skripsi ?>" enctype="multipart/form-data" method="post"
                            accept-charset="utf-8" class="form-horizontal">

                            <!-- upload KRS -->
                            <label>Upload file KRS</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input name="filekrs" type="file" id="cek" class="custom-file-input">
                                    <label class="custom-file-label">
                                        lampirkan file berformat
                                        .pdf</label>
                                </div>
                            </div>
                            <!-- upload Transkrip Nilai -->
                            <label>Upload file Transkrip Nilai</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input name="fileskrip" type="file" class="custom-file-input">
                                    <label class="custom-file-label">
                                        lampirkan file berformat
                                        .pdf</label>
                                </div>
                            </div>
                            <!-- upload Bukti Pembayaran-->
                            <label>Upload Bukti Pembayaran</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input name="fileslip" type="file" class="custom-file-input">
                                    <label class="custom-file-label">
                                        lampirkan file berformat
                                        .png</label>
                                </div>
                            </div>
                            <!-- Tgl Bukti Bayar -->
                            <label>Tanggal Pembayaran</label>
                            <div class="form-group mb-3">
                                <div class="">
                                    <input type="date" class="form-control input-default ">
                                </div>
                            </div>

                            <div class="card-body d-sm-flex justify-content-end">
                                <button class="btn tp-btn btn-primary" type="submit" id="submit" name="submit">
                                    Kirim
                                    Formulir
                                    Pendaftaran</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h5 class="card-title"><i class="flaticon-381-notebook-3"></i>
                            Keterangan</h5>
                    </div>

                    <div class="card-body p-4 mr-0 text-center">
                        <p>
                            Sebelum mengisi formulir, disarankan untuk menyiapkan dan mengecek kembali dokumen yang
                            dibutuhkan supaya data yang diinputkan benar dan lengkap
                        </p>
                        <ul class="border-bottom mb-3 justify-content-between"></ul>
                        <p>
                            Pastikan dokumen yang kamu upload sesuai dengan formulir
                        </p>
                        <ul class="border-bottom mb-3 justify-content-between"></ul>
                        <p>
                            Formulir yang kamu kirim akan diverifikasi oleh koordinator
                        </p>





                    </div>
                </div>
            </div>

            <?php } elseif ($daftar_skripsi['DaftarsStatus'] == 0) { ?>

            <div class="card text-center overflow-hidden h-100 mx-auto">
                <div class="card-body p-0 mr-0">
                    <img src="<?=base_url()?>vendor/collections/waiting.png" class="card-img" alt="...">
                    <div class="card-body p-4">
                        <p class="card-text text-dark">
                            Berkas pendaftaran sedang diperiksa, harap menunggu ...
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--  -->
        <div class="tab-pane fade" id="ket" role="tabpanel" aria-labelledby="ket-tab5">

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Status
                        <?php if ($daftar_skripsi) { 
                   if ($daftar_skripsi['DaftarsStatus'] == 0) {
                     $statushasil = 'Menunggu';
                     $panelstatus ='warning';
                      } else if ($daftar_skripsi['DaftarsStatus'] == 1) {
                      $statushasil = 'Disetujui';
                      $panelstatus ='success';
                      } else {
                        $statushasil = 'Diperbaiki';
                        $panelstatus ='danger';
                      } ?>
                        <span class="badge badge-<?= $panelstatus;?> badge-pill"><?= $statushasil;?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Keterangan
                        <?php if ($daftar_skripsi['DaftarsKeterangan'] != NULL) { ?>
                        <span class="badge badge-primary badge-pill"><?= $daftar_skripsi['DaftarsKeterangan']; ?></span>
                        <?php }else{ ?>
                        <span class="badge badge-danger badge-pill">Kosong</span>
                        <?php } ?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Lampiran File
                        <div class="card-body">
                            <!-- <h2 class="section-title mt-1">File </h2> -->
                            <div class="row" align="center">
                                <div class="col-4">
                                    <h6 style="color: #718eef;">KRS</h6>
                                    <?php if ($daftar_skripsi['DaftarsFileKrs'] == null) : ?>
                                    <span style="color: red">kosong</span>
                                    <?php else : ?>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#kknkjdnv"
                                        onclick="readURL('assets/upload/pendaftaran/skripsi/<?php echo $daftar_skripsi['DaftarsFileKrs'] ?>')"><img
                                            class="img-responsive"
                                            src="<?php echo base_url('assets/img/umk/pdf.png') ?>" alt="KRS"
                                            style="width:70px;height:70px; "></a>
                                    <?php endif ?>
                                </div>

                                <div class="col-4">
                                    <h6 style="color: #718eef;">Transkrip Nilai</h6>
                                    <?php if ($daftar_skripsi['DaftarsFileTranskrip'] == null) : ?>
                                    <span style="color: red">kosong</span>
                                    <?php else : ?>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#kknkjdnv"
                                        onclick="readURL('assets/upload/pendaftaran/skripsi/<?php echo $daftar_skripsi['DaftarsFileTranskrip'] ?>')"><img
                                            class="img-responsive"
                                            src="<?php echo base_url('assets/img/umk/pdf.png') ?>" alt="Transkrip"
                                            style="width:70px;height:70px;"></a>
                                    <?php endif ?>
                                </div>

                                <div class="col-4">
                                    <h6 style="color: #718eef;">Bukti Pembayaran</h6>
                                    <?php if ($daftar_skripsi['DaftarsFileSlip'] == null) : ?>
                                    <span style="color: red">kosong</span>
                                    <?php else : ?>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#kknkjdnv"
                                        onclick="readURL('assets/upload/pendaftaran/skripsi/<?php echo $daftar_skripsi['DaftarsFileSlip'] ?>')"><img
                                            class="img-responsive"
                                            src="<?php echo base_url('assets/img/umk/pdf.png') ?>" alt="Bukti Bayar"
                                            style="width:70px;height:70px;"></a>
                                    <?php endif ?>
                                </div>
                            </div>
                            <!--  -->
                            <?php } else { ?>
                            <p align="center">Belum Ada Data</p>
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </div>




            <?php } else { ?>
            <div align="center">
                <img src="<?php echo base_url() ?>vendor/collections/pendaftaran.png?>" alt=""
                    class="img img-responsive img-thumbnail">
            </div>
            <?php  } ?>
        </div>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="kknkjdnv" data-backdrop="false" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="cuok">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>

<script>
function readURL(link) {
    var base_url = $('#base').val();
    let expLink = link.split("/");
    let lastItem = expLink[expLink.length - 1]
    let getTypes = lastItem.split(".");

    let validImageTypes = ['jpg', 'jpeg', 'png'];

    if (link) {
        if (!validImageTypes.includes(getTypes[1])) {
            $('#cuok').html(`<iframe src="${base_url + link}" height="580px" width="460px"></iframe>`);
        } else {
            $('#cuok').html(`<img id="blah" src="${base_url + link}" width="460px" height="350px" />`);
        }
    }
}
</script>

</div>
</div>

<script>
function readURL(link) {
    var base_url = $('#base').val();
    let expLink = link.split("/");
    let lastItem = expLink[expLink.length - 1]
    let getTypes = lastItem.split(".");

    let validImageTypes = ['jpg', 'jpeg', 'png'];

    if (link) {
        if (!validImageTypes.includes(getTypes[1])) {
            $('#cuok').html(`<iframe src="${base_url + link}" height="580px" width="460px"></iframe>`);
        } else {
            $('#cuok').html(`<img id="blah" src="${base_url + link}" width="460px" height="350px" />`);
        }
    }
}
</script>