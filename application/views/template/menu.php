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
    <?php echo $page_title.'<br> templates/menu.php'; ?>
</div>

<div id="menu">
    <ul id="navigation">
        <!--<li><span class="active">Login</span></li>-->
        <li><a href="dashboard.html">Home</a></li>
        <li><a href="cliente.html">Clientes</a></li>
        <li><a href="cadastro.html">Cadastro</a></li>
        <?php echo anchor('user', 'Funcionários', 'class="btn btn_logout"'); ?>
        <?php echo anchor('login/logout', 'Logout', 'class="btn btn_logout"'); ?>
    </ul>
</div>