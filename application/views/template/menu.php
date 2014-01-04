<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:16
 */

?>


<div class="home-title blue-gradient">Simple Task Board</div>
<div id="menu">
    <?php echo anchor('login/logout', 'Logout', 'class="btn btn_logout"'); ?>
    <div class="clear"></div>
</div>
<div id="page-title">
    <?php echo $page_title; ?>
</div>

<div id="menu">
    <ul id="navigation">
        <?php echo anchor('login/logout', 'Logout', 'class="btn btn_logout"'); ?>
        <!--<li><span class="active">Login</span></li>-->
        <li><a href="dashboard.html">Home</a></li>
        <li><a href="cliente.html">Clientes</a></li>
        <li><a href="cadastro.html">Cadastro</a></li>
    </ul>
</div>