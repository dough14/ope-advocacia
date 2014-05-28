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
                                    <?php echo form_open('lawsuit/save', 'id="form" class="form-horizontal"'); ?>
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
                                                <label class="col-sm-6 control-label">
                                                    Número do Benefício/Processo <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-6">
													<?php echo form_input(array('name'=>'code','value'=>$code,'class'=>'form-control required', 'placeholder'=>'Digite o NB', 'required'=>'', 'size'=>'30')); ?>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Cliente <span class="symbol required"></span>
                                                </label>
                                                <div class="col-sm-9">
													<?php echo form_dropdown('cliente_id', $customers, $customer, 'class="form-control"') ?>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Procuração <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-9">
													<?php echo form_dropdown('user_id', $lawyers, $lawyer, 'class="form-control"') ?>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Espécie <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-9">
													<?php echo form_input(array('name'=>'type','value'=>$esp,'class'=>'form-control',  'placeholder'=>'Digite a ESP','required'=>'', 'size'=>'30')) ?>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-6 control-label">
                                                    Data de entrada do requerimento <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-6">
													<?php echo form_input(array('name'=>'start_date','value'=>$startDate,'class'=>'form-control','data-mask'=>'dob',  'placeholder'=>'Digite o DER', 'required'=>'')) ?>
												</div>
                                            </div>
											<div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Status <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-9">
													<?php echo form_dropdown('status_id', $status, $status_id, 'class="form-control"') ?>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Observações <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-9">
													<?php echo form_textarea(array('name'=>'note','value'=>$note,'class'=>'form-control')) ?>
												</div>
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