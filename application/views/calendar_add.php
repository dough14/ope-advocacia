<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:28
 */


// Load Menu
$this->template->menu('calendar');
?>

<div id="content" class="container_16 clearfix">
    <?php echo form_open('calendar/save'); ?>
    <table>
        <tr>
            <div class="grid_4">
                <td>
                    <?php echo form_label('Data de início', 'startDate'); ?>
                </td>
                <td>
                    <?php echo form_input('startDate', $startDate); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Data de término', 'endDate'); ?>
                </td>
                <td>
                    <?php echo form_input('endDate', $endDate); ?>
                </td>
            </div>
            <div class="grid_5">
                <td style="display: none">
                    <?php echo form_input('user_fk', $user_fk); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Título do evento', 'title'); ?>
                </td>
                <td>
                    <?php echo form_input('title', $title); ?>
                </td>
            </div>
        </tr>
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