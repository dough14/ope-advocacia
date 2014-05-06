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
                        <?php if( isset($breadcrumbs) ) echo $breadcrumbs ?>
                        <?php if( isset($search) ) echo $search ?>
                    </ol>


                    <div class="row">
                        <div class="col-md-12">
                            <!-- start: FORM VALIDATION 1 PANEL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-external-link-square"></i>
                                    Formulário de evento
                                </div>
                                <div class="panel-body">
                                    <h2><i class="fa fa-pencil-square teal"></i>
                                        <?php if (isset($id)){
                                            echo 'Editar Evento';
                                        }else{
                                            echo 'Adicionar um novo evento';
                                        }?>
                                    </h2>
                                    <?php echo form_open('calendar/save', 'id="form" class="form-horizontal"'); ?>
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
                                                <label class="col-sm-4 control-label">
                                                    Data de início <span class="symbol required"></span>
                                                </label>
                                                <div class="col-sm-8">
													<?php echo form_input(array('name'=>'startDate', 'value'=>date('d/m/Y h:i:s', strtotime($startDate)), 'class'=>'form-control', 'data-mask'=>'date-time', 'required'=>'')); ?>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">
                                                    Data de término <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-8">
													<?php echo form_input(array('name' => 'endDate', 'value' => date('d/m/Y h:i:s', strtotime($endDate)), 'class' => 'form-control', 'data-mask' => 'date-time', 'required'=>'')); ?>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">
                                                    Título do evento <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-8">
													<?php echo form_input(array('name'=>'title', 'value'=>$title, 'class'=>'form-control', 'required'=>'')); ?>
												</div>
                                            </div>
                                        </div>
                                        <td class="hide"><?php echo form_input('user_fk', $user_fk, 'class="hide"'); ?></td>
                                        <?php if (isset($id)){
                                            echo form_hidden('id', $id);
                                        } ?>
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