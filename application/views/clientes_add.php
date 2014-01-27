<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:28
 */


// Load Menu
$this->template->menu('clientes');
?>

<div id="content" class="container_16 clearfix">
    <?php echo form_open('cliente/save'); ?>
    <table>
        <tr>
            <div class="grid_4">
                <td>
                    <?php echo form_label('Nome', 'nome'); ?>
                </td>
                <td>
                    <?php echo form_input('nome', $nome); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('CPF', 'cpf'); ?>
                </td>
                <td>
                    <?php echo form_input('cpf', $cpf); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Telefone', 'tel'); ?>
                </td>
                <td>
                    <?php echo form_input('tel', $tel); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Telefone Comercial', 'tel2'); ?>
                </td>
                <td>
                    <?php echo form_input('tel2', $tel2); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Celular', 'cel'); ?>
                </td>
                <td>
                    <?php echo form_input('cel', $cel); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Data de Nascimento', 'data_nasc'); ?>
                </td>
                <td>
                    <?php echo form_input('data_nasc', $data_nasc); ?>
                </td>
            </div>
        </tr>
        <tr>
            <td>
                <?php echo form_label('Processos', 'tipos_processo'); ?>
            </td>
            <td>
                <?php echo form_dropdown('tipos_processo', $tipos_processo, 'Civil'); ?>
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