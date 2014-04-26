<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:08
 */

// Load Menu
$this->template->menu('clientes');
?>
<body>
<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
<!-- start: TOP NAVIGATION CONTAINER -->
<div class="container">
<div class="navbar-header">
    <!-- start: RESPONSIVE MENU TOGGLER -->
    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
        <span class="clip-list-2"></span>
    </button>
    <!-- end: RESPONSIVE MENU TOGGLER -->
    <!-- start: LOGO -->
    <!-- end: LOGO -->
</div>
<div class="navbar-tools">
</div>
</div>
<!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->
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
            <h1>Clientes</h1>
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
                Lista de clientes
            </div>
            <div class="panel-body">
                <?php if(isset($clientes)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="sample-table-1">
                        <thead>
                            <tr>
                                <th class="center"></th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Data de Nascimento</th>
                                <th>Data de Cadastro</th>
                                <th>Ultima Atualização</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($clientes as $cliente) : ?>
                            <tr  id="cliente_<?php echo $cliente['id']; ?>">
                                <td class="center">
                                    <div class="checkbox-table">
                                        <label>
                                            <input type="checkbox" class="flat-grey">
                                        </label>
                                    </div></td>
                                <td>
                                    <a href="<?php echo base_url('cliente/edit/'.$cliente['id']) ?>">
                                        <?php echo $cliente['nome']; ?>
                                    </a></td>
                                <td><?php echo $cliente['cpf']; ?></td>
                                <td><?php echo date("d/m/Y", strtotime($cliente['data_nasc'])); ?></td>
                                <td><?php echo date("d/m/Y, g:i a", strtotime($cliente['date_created'])); ?></td>
                                <td><?php echo date("d/m/Y, g:i a", strtotime($cliente['updated_at'])); ?></td>
                                <td class="center">
                                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                                        <a href="<?php echo base_url('cliente/edit/'.$cliente['id']) ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
                                        <?php if($this->session->userdata('user') == 5): ?>
                                            <a href="<?php echo base_url('cliente/remove/'.$cliente['id']) ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remover"><i class="fa fa-times fa fa-white"></i></a>
                                        <?php endif ?>
                                    </div>
                                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                                        <div class="btn-group">
                                            <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                <i class="fa fa-cog"></i> <span class="caret"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-menu pull-right">
                                                <li role="presentation">
                                                    <a role="menuitem" tabindex="-1" href="<?php echo base_url('cliente/edit/'.$cliente['id']) ?>">
                                                        <i class="fa fa-edit"></i> Editar
                                                    </a>
                                                </li>
                                                <?php if($this->session->userdata('user') == 5): ?>
                                                <li role="presentation">
                                                    <a role="menuitem" tabindex="-1" href="<?php echo base_url('cliente/remove/'.$cliente['id']) ?>">
                                                        <i class="fa fa-times"></i> Remover
                                                    </a>
                                                </li>
                                                <?php endif ?>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                    <?php endif ?>
                </div>
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