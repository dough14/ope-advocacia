<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:28
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


                    <div class="row">
                        <div class="col-md-12">
                            <!-- start: FORM VALIDATION 1 PANEL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-external-link-square"></i>
                                    Formulário de funcionários
                                </div>
                                <div class="panel-body">
                                    <h2><i class="fa fa-pencil-square teal"></i>
                                        <?php if (isset($id)){
                                            echo 'Editar Funcionário';
                                        }else{
                                            echo 'Adicionar um novo funcionário';
                                        }?>
                                    </h2>
                                    <?php echo form_open('user/save', 'id="form" class="form-horizontal"'); ?>
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
                                                <label class="col-sm-3 control-label">
                                                    Nome <span class="symbol required"></span>
                                                </label>
                                                <div class="col-sm-9">
                                                    <?php echo form_input(array('name'=>'nome','value'=>$nome,'class'=>'form-control', 'required'=>'')); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Telefone para contato
                                                </label>
                                                <div class="col-sm-9">
                                                    <?php echo form_input(array('name'=>'telefone','value'=>$telefone,'class'=>'form-control','data-mask'=>'phone', 'required'=>'')); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Email
                                                </label>
                                                <div class="col-sm-9">
                                                    <?php echo form_input(array('name'=>'email','value'=>$email,'class'=>'form-control', 'required'=>'')); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Cor de evento
                                                </label>
                                                <!-- COLORPICKER @FIXIT -->
                                                <div class="col-sm-9">
                                                    <?php echo form_input(array('type'=>'color','name'=>'color','value'=>$color,'class'=>'form-control color', 'required'=>'')); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Login <span class="symbol required"></span>
                                                </label>
                                                <div class="col-sm-9">
                                                    <?php echo form_input(array('name'=>'login','value'=>$login,'class'=>'form-control', 'required'=>'')); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Senha <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-9">
													<?php if (isset($id)) { ?>
														<?php echo form_password(array('name'=>'password', 'value'=>$password, 'id'=>'password','disabled'=>'disabled','class'=>'form-control')); ?>
														<?php echo form_checkbox(array('name'=>'reset_password','value'=>1,'id'=>'reset_password','title'=>'Edit Password','class'=>'form-control')); ?>
													<?php } else { ?>
														<?php echo form_password(array('name'=>'password','value'=>$password,'id'=>'password','class'=>'form-control', 'required'=>'')); ?>
														<?php echo form_hidden('reset_password', 1); ?>
													<?php } ?>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">
                                                    Nível de usuário <span class="symbol required"></span>
                                                </label>
												<div class="col-sm-9">
													<?php echo form_dropdown('level', $level_list, $level, 'class="form-control"'); ?>
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
<?php endif ?>