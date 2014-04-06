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
                                    Formulário de processos
                                </div>
                                <div class="panel-body">
                                    <h2><i class="fa fa-pencil-square teal"></i>
                                        <?php if (isset($id)){
                                            echo 'Editar Processo';
                                        }else{
                                            echo 'Adicionar um novo processo';
                                        }?>
                                    </h2>
                                    <?php echo form_open('lawsuit/save', 'id = "form"'); ?>
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
                                                    NB Nº <span class="symbol required"></span>
                                                </label>
                                                <?php echo form_input('code'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Cliente <span class="symbol required"></span>
                                                </label>
                                                <?php echo form_dropdown('cliente_id', $customers) ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Procuração <span class="symbol required"></span>
                                                </label>
                                                <?php echo form_dropdown('user_id', $lawyers) ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    ESP <span class="symbol required"></span>
                                                </label>
                                                <?php echo form_input('type') ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    DER <span class="symbol required"></span>
                                                </label>
                                                <?php echo form_input('start_date') ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Observações <span class="symbol required"></span>
                                                </label>
                                                <?php echo form_textarea('note') ?>
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
                                            <?php
                                                if(isset($id)) echo form_hidden('id', $id);

                                                if(isset($created_at)) echo form_hidden('created_at', $created_at);
                                                else echo form_hidden('created_at', date('Y-m-d H:i:s'));

                                                echo form_hidden('updated_at', date('Y-m-d H:i:s'));
                                            ?>
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