<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:16
 */

?>

<div id="menu">
    <?php //echo anchor('login/logout', 'Logout', 'class="btn btn_logout"'); ?>
    <div class="clear"></div>
</div>
<div id="page-title">
    <?php //echo $page_title.'<br> templates/menu.php'; ?>
</div>

<div id="menu">
    <ul id="navigation">
        <!--<li><span class="active">Login</span></li>-->
        <?php //if($view == 'dashboard') { ?>
            <li><?php echo anchor('dashboard', 'Home'); ?></li>
            <li><?php echo anchor('cliente', 'Clientes'); ?></li>
            <li><?php echo anchor('cliente/add', 'Adicionar Cliente '); ?></li>
        <?php //} elseif($view == 'users') { ?>
            <li><?php echo anchor('user', 'Funcionários', 'class="btn btn_logout"'); ?></li>
            <li><?php echo anchor('user/add', 'Adicionar funcionario'); ?></li>
        <?php //} ?>
        <li><?php echo anchor('login/logout', 'Logout', 'class="btn btn_logout"'); ?></li>
    </ul>
</div>