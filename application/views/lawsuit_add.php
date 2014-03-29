<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:28
 */


// Load Menu
$this->template->menu('lawsuits');
?>

<div id="content" class="container_16 clearfix">
    <?php echo form_open('lawsuit/save'); ?>
    <table>
        <tr>
            <div class="grid_4">
                <td>
                    <?php echo form_label('NB Nº', 'code'); ?>
                </td>
                <td>
                    <?php echo form_input('code'); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Cliente', 'cliente_id'); ?>
                </td>
                <td>
                    <?php echo form_dropdown('cliente_id', $customers) ?>
                </td>
            </div>
        </tr>
		<tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Procuração', 'user_id'); ?>
                </td>
                <td>
                    <?php echo form_dropdown('user_id', $lawyers) ?>
                </td>
            </div>
        </tr>
		<tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('ESP', 'type'); ?>
                </td>
                <td>
                    <?php echo form_input('type') ?>
                </td>
            </div>
        </tr>
		<tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('DER', 'start_date'); ?>
                </td>
                <td>
                    <?php echo form_input('start_date') ?>
                </td>
            </div>
        </tr>
		<tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Observações', 'note'); ?>
                </td>
                <td>
                    <?php echo form_textarea('note') ?>
                </td>
            </div>
        </tr>
        <tr>
            <td colspan="2">
                <?php
					if(isset($id)) echo form_hidden('id', $id);
					
					if(isset($created_at)) echo form_hidden('created_at', $created_at);
					else echo form_hidden('created_at', date('Y-m-d H:i:s'));
					
					echo form_hidden('updated_at', date('Y-m-d H:i:s'));
				?>
                <div class="form-save-buttons">
                    <?php echo form_submit('save', 'Salvar', 'class="btn-blue"'); ?>
                    <?php echo form_button('cancel', 'Cancelar', 'class="btn-blue" onClick="history.go(-1)"'); ?>
                </div>
            </td>
        </tr>
    </table>

    <?php echo form_close(); ?>

</div>