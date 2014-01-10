<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:08
 */

// Load Menu
$this->template->menu('users');
?>

<div id="content" class="container_16 clearfix">
    <div class="grid_4">
        <p>
            <label>Cliente <small>nome ou CPF/CNPJ</small></label>
            <input type="text" />
        </p>
    </div>
    <div class="grid_5">
        <p>
            <label>Endereço de email</label>
            <input type="text" />
        </p>
    </div>
    <div class="grid_5">
        <p>
            <label>Tipo de processo</label>
            <select>
                <option>Judiciário</option>
                <option>Previdenciário</option>
                <option>Cívil</option>
                <option>Trabalhista</option>
            </select>
        </p>
    </div>
    <div class="grid_2">
        <p>
            <label>&nbsp;</label>
            <input type="submit" value="Search" />
        </p>
    </div>
    <div class="grid_16">
        <?php if(isset($users)) : ?>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Login</th>
                <th>Nível de acesso</th>
                <th>Data de cadastro</th>
                <th colspan="2" width="10%">Ações</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="5" class="pagination">
                    <span class="active curved">1</span><a href="#" class="curved">2</a><a href="#" class="curved">3</a><a href="#" class="curved">4</a> ... <a href="#" class="curved">10 million</a>
                </td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($users as $user) : ?>
                <tr id="user_<?php echo $user['id']; ?>">
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['login']; ?></td>
                    <td><?php echo $level_list[$user['level']]; ?></td>
                    <td><?php echo date("j/M/Y, g:i a", strtotime($user['date_created'])); ?></td>
                    <td>
                        <?php echo anchor('user/edit/'.$user['id'],'Editar', 'class="edit"'); ?>
                        <?php echo anchor('user/remove/'.$user['id'], 'Deletar', 'class="remove-user-event delete"'); ?>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <?php endif ?>
    </div>
</div>
