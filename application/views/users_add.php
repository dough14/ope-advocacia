<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:28
 */


// Load Menu
$this->template->menu('users');
?>

<div id="content" class="container_16 clearfix">
    <?php echo form_open('user/save'); ?>
    <table>
        <tr>
            <div class="grid_4">
                <td>
                    <?php echo form_label('Login', 'login'); ?>
                </td>
                <td>
                    <?php echo form_input('login', $login); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Password', 'password'); ?>
                </td>
                <td>
                    <?php if (isset($id)) { ?>
                        <?php echo form_password('password', $password, 'id="password" disabled'); ?>
                        <?php echo form_checkbox('reset_password', 1, false, 'id="reset_password" title="Edit Password"'); ?>
                    <?php } else { ?>
                        <?php echo form_password('password', $password, 'id="password"'); ?>
                        <?php echo form_hidden('reset_password', 1); ?>
                    <?php } ?>
                </td>
            </div>
        </tr>
        <tr>
            <td>
                <?php echo form_label('Level', 'level'); ?>
            </td>
            <td>
                <?php echo form_dropdown('level', $level_list, $level); ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php if (isset($id)){
                    echo form_hidden('id', $id);
                } ?>
                <div class="form-save-buttons">
                    <?php echo form_submit('save', 'Salvar', 'class="btn-blue"'); ?>
                    <?php echo form_button('cancel', 'Cancelar', 'class="btn-blue" onClick="history.go(-1)"'); ?>
                </div>
            </td>
        </tr>
    </table>

    <?php echo form_close(); ?>

</div>