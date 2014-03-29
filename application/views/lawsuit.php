<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:08
 */

// Load Menu
$this->template->menu('lawsuit');
?>

<div id="content" class="container_16 clearfix">
    <div class="grid_16">
        <table>
			<thead>
			<tr>
				<th>ID</th>
				<th>Registro nº</th>
				<th>Cliente</th>
				<th>ESP</th>
				<th>Procuração</th>
				<th>DER</th>
				<th>Ações</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<td colspan="6" class="pagination">
					<span class="active curved">1</span>
					<a href="#" class="curved">2</a>
					<a href="#" class="curved">3</a>
					<a href="#" class="curved">4</a>
					 ... 
					<a href="#" class="curved">10 million</a>
				</td>
			</tr>
			</tfoot>
			<tbody>
				<?php if(isset($lawsuits) && count($lawsuits) > 0) : ?>
					<?php foreach ($lawsuits as $lawsuit) : ?>
						<tr id="lawsuit_<?php echo $lawsuit['id']; ?>">
							<td><?php echo $lawsuit['id']; ?></td>
							<td><?php echo $lawsuit['code']; ?></td>
							<td><?php echo $lawsuit['customer']; ?></td>
							<td><?php echo $lawsuit['type']; ?></td>
							<td><?php echo $lawsuit['lawyer']; ?></td>
							<td><?php echo date("d/m/Y", strtotime($lawsuit['start_date'])); ?></td>
							<td>
								<?php echo anchor('lawsuit/edit/'.$lawsuit['id'],'Editar', 'class="edit"'); ?>
								<?php echo anchor('lawsuit/remove/'.$lawsuit['id'], 'Deletar', 'class="remove-lawsuit-event delete"'); ?>
							</td>
						</tr>
					<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td colspan="6">
							Não há processos cadastrados
						</td>
					</tr>
				<?php endif ?>
			</tbody>
		</table>
    </div>
</div>
