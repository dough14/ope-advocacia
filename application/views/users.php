<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:08
 */

// Load Menu

?>
<?php if($this->session->userdata('user') == 5):
    $this->template->menu('users');
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
                        <h1>Funcionários</h1>
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
                            Lista de Funcionários
                        </div>
                        <div class="panel-body">
                            <?php if(isset($users)) : ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="sample-table-1">
                                    <thead>
                                    <tr>
                                        <th class="center"></th>
                                        <th>Nome</th>
                                        <th>Login</th>
                                        <!-- <th>Foto</th> -->
                                        <th>Nível de Acesso</th>
                                        <th>Data de Cadastro</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($users as $user) : ?>
                                        <tr id="user_<?php echo $user['id']; ?>">
                                            <td class="center">
                                                <div class="checkbox-table">
                                                    <label>
                                                        <input type="checkbox" class="flat-grey">
                                                    </label>
                                                </div></td>
                                            <td>
                                                <a href="<?php echo base_url('user/edit/'.$user['id']) ?>">
                                                    <?php echo $user['nome']; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('user/edit/'.$user['id']) ?>">
                                                    <?php echo $user['login']; ?>
                                                </a>
                                            </td>
                                            <!-- <td>FOTO</td> -->
                                            <td><?php echo $level_list[$user['level']]; ?></td>
                                            <td><?php echo date("d/m/Y, g:i a", strtotime($user['date_created'])); ?></td>
                                            <td class="center">
                                                <div>
                                                    <a href="<?php echo base_url('user/edit/'.$user['id']) ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo base_url('user/remove/'.$user['id']) ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remover"><i class="fa fa-times fa fa-white"></i></a>
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
<?php endif ?>