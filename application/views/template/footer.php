<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 17:44
 */
?>
   <div class="container">
       <div class="row">
            <div id="dialog-confirm" style="display:none;" title="Are you sure?">
                <p><span></span>Esta ação não pode ser desfeita.</p>
                <p>Você tem certeza disso?</p>
            </div>
            <div class="footer clearfix">
                <div class="footer-inner">
                    <a href="#">SGC - Sistema de Gerenciamento de Clientes</a>
                    2014 Douglas Leandro &copy;.
                </div>
                <div class="footer-items">
                    <span class="go-top"><i class="clip-chevron-up"></i></span>
                </div>
            </div>

            <!-- start: MAIN JAVASCRIPTS -->
            <!--[if lt IE 9]>
            <script src="<?php echo base_url(); ?>assets/plugins/respond.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/excanvas.min.js"></script>
            <![endif]-->
            <!--[if gte IE 9]><!-->
            <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
            <!--<![endif]-->
            <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/masks.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/blockUI/jquery.blockUI.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/iCheck/jquery.icheck.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/less/less-1.5.0.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
            <!-- end: MAIN JAVASCRIPTS -->
            <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
            <script src="<?php echo base_url(); ?>assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
            <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
            <script>
                jQuery(document).ready(function() {
                    Main.init();
                    Index.init();
                });
            </script>
       </div>
    </div>
    </body>
    <!-- end: BODY -->
</html>