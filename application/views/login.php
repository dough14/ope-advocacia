<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 16:03
 */
?>

<div id="content" class="container_16 clearfix">
    <div class="grid_11">
        <h2>Login</h2>
        <div id="login" class="grid_4">
            <?php if(isset($already_installed) && !$already_installed) { echo form_open('install/run'); }
            else { echo form_open('login/validate'); } ?>

                <?php echo form_label('Login', 'login'); ?>
                <?php echo form_input('login'); ?>
                <?php echo form_label('Senha', 'password'); ?>
                <?php echo form_password('password'); ?>

                <?php if(isset($error) && $error) { ?>
                    <p class="error">Confira se o seu login e senha estão corretos.</p>
                <?php } ?>

                <?php if(isset($already_installed) && !$already_installed) { echo form_submit('install', 'Install'); }
                else { echo form_submit('btnSubmit', 'Efetuar Login'); } ?>

            <?php echo form_close(); ?>
            <?php
            //var_dump($_POST);
            //exit;?>
        </div>
    </div>
    <div class="grid_4">
    </div>
</div>
<div id="foot">
    <div class="container_16 clearfix">
        <div class="grid_16">
            <a href="#">SGC - Sistema de Gerenciamento de Clientes</a>
        </div>
    </div>
</div>
