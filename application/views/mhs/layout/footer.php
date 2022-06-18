<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020
        </p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->

</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->

<!-- Required vendors -->
<!-- <script src="<?=base_url()?>vendor/adminpanel/vendor/global/global.min.js"></script> -->
<!-- <script src="<?=base_url()?>vendor/adminpanel/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script> -->
<!-- <script src="<?=base_url()?>vendor/adminpanel/vendor/chart.js/Chart.bundle.min.js"></script> -->
<!-- <script src="<?=base_url()?>vendor/adminpanel/js/custom.min.js"></script> -->
<!-- <script src="<?=base_url()?>vendor/adminpanel/js/deznav-init.js"></script> -->
<script src="<?=base_url()?>vendor/adminpanel/vendor/owl-carousel/owl.carousel.js"></script>

<script src="<?=base_url()?>vendor/adminpanel/js/dashboard/dashboard-1.js"></script>

<!-- Required vendors -->
<script src="<?=base_url()?>vendor/adminpanel/vendor/global/global.min.js"></script>
<script src="<?=base_url()?>vendor/adminpanel/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?=base_url()?>vendor/adminpanel/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?=base_url()?>vendor/adminpanel/vendor/bootstrap-datetimepicker/js/moment.js"></script>
<script src="<?=base_url()?>vendor/adminpanel/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js">
</script>
<script src="<?=base_url()?>vendor/adminpanel/js/custom.min.js"></script>
<script src="<?=base_url()?>vendor/adminpanel/js/deznav-init.js"></script>
<!-- Toastr -->
<script src="<?=base_url()?>vendor/adminpanel/vendor/toastr/js/toastr.min.js"></script>
<!-- All init script -->
<script src="<?=base_url()?>vendor/adminpanel/js/plugins-init/toastr-init.js"></script>
<script src="<?php echo base_url() ?>assets/dist/iziToast.min.js"></script>
<script>
$(function() {
    $('#datetimepicker1').datetimepicker({
        inline: true,
    });
});
</script>

<script>
function carouselReview() {
    /*  testimonial one function by = owl.carousel.js */
    jQuery('.testimonial-one').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 30,
        nav: false,
        dots: false,
        left: true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>',
            '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            484: {
                items: 2
            },
            882: {
                items: 3
            },
            1200: {
                items: 2
            },

            1540: {
                items: 3
            },
            1740: {
                items: 4
            }
        }
    })
}
jQuery(window).on('load', function() {
    setTimeout(function() {
        carouselReview();
    }, 1000);
});
</script>
<!-- data tables -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#tabelku').DataTable();
});
</script>

<script>
// untuk file input
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
</script>

<!-- toastr -->
<script type="text/javascript">
function exit_toast() {

    iziToast.show({
        theme: 'dark',
        icon: 'icon-person',
        title: 'Hallo',
        message: 'Apakah Kamu Ingin Pergi Sekarang ?',
        position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
        progressBarColor: 'rgb(0, 255, 184)',
        buttons: [
            ['<button>YA</button>', function(instance, toast) {
                window.location.href = "<?php echo base_url('s_logout') ?>";
            }], // true to focus
            ['<button>TIDAK</button>', function(instance, toast) {
                instance.hide({
                    transitionOut: 'fadeOutUp',
                    onClosing: function(instance, toast, closedBy) {
                        console.info('closedBy: ' +
                            closedBy); // The return will be: 'closedBy: buttonName'
                    }
                }, toast, 'buttonName');
            }, true]
        ],
        onOpening: function(instance, toast) {
            console.info('callback abriu!');
        },
        onClosing: function(instance, toast, closedBy) {
            console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
        }
    });

}
</script>

</div>
</body>

</html>