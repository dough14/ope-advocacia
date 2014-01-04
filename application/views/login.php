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
            <form method="post" action="http://localhost/ope-advocacia/login/validate">
                <div class="grid_4">
                    <label for="login">Login</label>
                    <input type="text" placeholder="Nome de usuario ou login" value="" name="login">
                </div>
                    <br>
                <div class="grid_6">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Senha" value="" name="password">
                    <input type="submit">
                </div>
            </form>
            <?php
           // var_dump($_POST);
           // exit;?>
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
