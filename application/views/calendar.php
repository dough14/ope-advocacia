<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:08
 */

// Load Menu
$this->template->menu('calendar');
?>
<!-- start: MAIN CONTAINER -->
<div class="main-container">
<div class="navbar-content">

</div>
<!-- start: PAGE -->
<div class="main-content">
<!-- start: PANEL CONFIGURATION MODAL FORM -->
<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">Panel Configuration</h4>
            </div>
            <div class="modal-body">
                Here will be a configuration form
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- end: SPANEL CONFIGURATION MODAL FORM -->
<div class="container">
<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
		<ol class="breadcrumb">
			<?php if( isset($breadcrumbs) ) echo $breadcrumbs ?>
            <?php if( isset($search) ) echo $search ?>
        </ol>
        <div class="page-header">
            <h1>Calendário</h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<!-- start: PAGE CONTENT -->

<div class="row">
    <div class="col-md-12">
    <!-- start: RESPONSIVE TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                Eventos
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                    </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-expand" href="#">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-close" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <?php if(isset($events)) : ?>
					<div class="table-responsive">
						<table class="table table-bordered table-hover" id="sample-table-1">
							<thead>
								<tr>
									<th class="center"></th>
									<th>Título</th>
									<th>Data Inicial</th>
									<th>Data Final</th>
									<th>Status</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($events as $event) : ?>
									<tr  id="appointment_<?php echo $event->id; ?>">
										<td class="center">
											<div class="checkbox-table">
												<label>
													<input type="checkbox" class="flat-grey">
												</label>
											</div>
										</td>
										<td>
											<a href="<?php echo base_url('calendar/edit/'.$event->id) ?>">
												<?php echo $event->title; ?>
											</a>
										</td>
										<td><?php echo date("d/m/Y h:i:s", strtotime($event->startDate)); ?></td>
										<td><?php echo date("d/m/Y h:i:s", strtotime($event->endDate)); ?></td>
										<td><?php echo $event->status ? 'Ativo' : 'Inativo' ?></td>
										<td class="center">
											<div class="visible-md visible-lg hidden-sm hidden-xs">
												<a href="<?php echo base_url('calendar/edit/'.$event->id) ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
												<a href="<?php echo base_url('calendar/remove/'.$event->id) ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remover"><i class="fa fa-times fa fa-white"></i></a>
											</div>
											<div class="visible-xs visible-sm hidden-md hidden-lg">
												<div class="btn-group">
													<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
														<i class="fa fa-cog"></i> <span class="caret"></span>
													</a>
													<ul role="menu" class="dropdown-menu pull-right">
														<li role="presentation">
															<a role="menuitem" tabindex="-1" href="<?php echo base_url('calendar/edit/'.$event->id) ?>">
																<i class="fa fa-edit"></i> Editar
															</a>
														</li>
														<li role="presentation">
															<a role="menuitem" tabindex="-1" href="<?php echo base_url('calendar/remove/'.$event->id) ?>">
																<i class="fa fa-times"></i> Remover
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				<?php endif ?>
            </div>
        </div>
    <!-- end: RESPONSIVE TABLE PANEL -->
    </div>
</div>
<!-- end: PAGE CONTENT-->


</div>
</div>
<!-- end: PAGE -->
</div>
</body>