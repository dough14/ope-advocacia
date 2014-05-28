<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 16:03
 */
?>

<div class="container">
    <div class="row">
    <div class="main-login col-sm-4 col-sm-offset-4">
        <!-- start: LOGIN BOX -->
        <div class="box-login">
            <h3>Login</h3>
            <p>
                Por favor coloque seu login e senha abaixo.
            </p>
            <?php if(isset($already_installed) && !$already_installed) { echo form_open('install/run', 'class="form-login"'); }
            else { echo form_open('login/validate', 'class="form-login"'); } ?>
            <?php $url = current_url(); ?>
            <?php if(strpos($url, 'login/validate') !== FALSE): ?>
                <div class="errorHandler alert alert-danger">
                    <i class="fa fa-remove-sign"></i> Usuário ou senha inválidos.
                </div>
            <?php endif ?>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control login" name="username" placeholder="Login" required>
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Senha" required>
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <?php if(isset($already_installed) && !$already_installed) { echo form_submit('install', 'Install'); }
                    else { echo form_submit('btnSubmit', ' Login'); } ?>

                    <?php echo form_close(); ?>

                </fieldset>
            </form>
        </div>
        <!-- end: LOGIN BOX -->
        <!-- end: REGISTER BOX -->
        <!-- start: COPYRIGHT -->
        <div class="copyright">
            2014 &copy; Douglas Leandro.
        </div>
        <!-- end: COPYRIGHT -->
    </div>
    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/plugins/respond.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/excanvas.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min1.10.2.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!--<![endif]-->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
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
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });
    </script>
    </div>
</div>
</body>
