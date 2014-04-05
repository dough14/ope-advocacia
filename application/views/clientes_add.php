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
<body>
<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
<!-- start: NOTIFICATION DROPDOWN -->
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
                        <li>
                            <i class="clip-grid-6"></i>
                            <a href="#">
                                Tables
                            </a>
                        </li>
                        <li class="active">
                            Static Tables
                        </li>
                        <li class="search-box">
                            <form class="sidebar-search">
                                <div class="form-group">
                                    <input type="text" placeholder="Start Searching...">
                                    <button class="submit">
                                        <i class="clip-search-3"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ol>


                    <div class="row">
                    <div class="col-md-12">
                    <!-- start: FORM VALIDATION 1 PANEL -->
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Formulário de clientes
                    </div>
                    <div class="panel-body">
                        <h2><i class="fa fa-pencil-square teal"></i>
                            <?php if (isset($id)){
                               echo 'Editar Cliente';
                            }else{
                               echo 'Adicionar um novo cliente';
                            }?>
                        </h2>
                        <?php echo form_open('cliente/save','id = "form"'); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="errorHandler alert alert-danger no-display">
                                        <i class="fa fa-times-sign"></i> Vejo que você possui alguns erros em seu fomulário. Por favor, confira abaixo.
                                    </div>
                                    <div class="successHandler alert alert-success no-display">
                                        <i class="fa fa-ok"></i> Seu formulário foi submetido com sucesso!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Nome <span class="symbol required"></span>
                                        </label>
                                        <?php echo form_input('nome', $nome); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            CPF <span class="symbol required"></span>
                                        </label>
                                        <?php echo form_input('cpf', $cpf); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Data de Nascimento <span class="symbol required"></span>
                                        </label>
                                        <?php echo form_input('data_nasc', $data_nasc); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Telefone <span class="symbol required"></span>
                                        </label>
                                        <?php echo form_input('tel', $tel); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Telefone comercial <span class="symbol required"></span>
                                        </label>
                                        <?php echo form_input('tel2', $tel2); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Celular <span class="symbol required"></span>
                                        </label>
                                        <?php echo form_input('cel', $cel); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Endereço <span class="symbol required"></span>
                                        </label>
                                        <?php echo form_input('endereco', $endereco); ?>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">
                                            CEP <span class="symbol required"></span>
                                        </label>
                                        <?php echo form_input('cep', $cep); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <span class="symbol required"></span>Campos Obrigatórios
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <?php if (isset($id)){
                                        echo form_hidden('id', $id);
                                    } ?>
                                    <?php echo form_submit('save', 'Salvar', 'class="btn btn-yellow btn-block"'); ?>
                                </div>
                                <div class="col-md-4">
                                    <?php echo form_button('cancel', 'Cancelar', 'class="btn btn-red btn-block" onClick="history.go(-1)"'); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                    <!-- end: FORM VALIDATION 1 PANEL -->
                    </div>
                    </div>
                </div>
                <!-- end: FORM VALIDATION 1 PANEL -->
            </div>
        </div>
    </div>
</div>
</body>