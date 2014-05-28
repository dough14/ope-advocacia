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
                        Formulário de clientes<?php if(isset($_GET["view"])): ?>
                                                     - Pessoa Jurídica
                                                <?php else: ?>
                                                     - Pessoa Física
                                                <?php endif ?>
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h2><i class="fa fa-pencil-square teal"></i>
                            <?php if (isset($id)){
                               echo 'Editar Cliente';
                            }else{
                               echo 'Adicionar um novo cliente';
                            }?>
                        </h2>
                        <?php echo form_open('cliente/save','id="form" class="form-horizontal"'); ?>
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
                                            Nome <?php if(isset($_GET["view"])) echo ' Fantasia';?><span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-9">
											<?php echo form_input(array('name'=>'nome','value'=>$nome,'class'=>'form-control', 'required'=>'', 'size'=>'200')); ?>
										</div>
                                    </div>
                                    <?php if(isset($_GET["view"])): ?>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                CNPJ <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-9">
                                                <?php echo form_input(array('name'=>'cnpj','value'=>$cnpj,'class'=>'form-control','data-mask'=>'cnpj', 'required'=>'')); ?>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                CPF <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-9">
                                                <?php echo form_input(array('name'=>'cpf','value'=>$cpf,'class'=>'form-control','data-mask'=>'taxvat', 'required'=>'')); ?>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                    <?php if(isset($_GET["view"])): ?>
                                    <?php else: ?>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                RG <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-9">
                                                <?php echo form_input(array('name'=>'rg','value'=>$rg,'class'=>'form-control','data-mask'=>'rg', 'required'=>'')); ?>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                    <?php if(isset($_GET["view"])): ?>
                                    <?php else: ?>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Data de Nascimento <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-9">
                                                <?php $data_nasc = str_replace('-', '/', $data_nasc); ?>
                                                <?php echo form_input(array('name'=>'data_nasc','value'=>$data_nasc,'class'=>'form-control','data-mask'=>'dob', 'required'=>'')); ?>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Telefone <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-9">
											<?php echo form_input(array('name'=>'tel','value'=>$tel,'class'=>'form-control','data-mask'=>'phone', 'required'=>'')); ?>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Telefone comercial
                                        </label>
                                        <div class="col-sm-9">
											<?php echo form_input(array('name'=>'tel2','value'=>$tel2,'class'=>'form-control','data-mask'=>'phone')); ?>
										</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Celular
                                        </label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('name'=>'cel','value'=>$cel,'class'=>'form-control','data-mask'=>'phone')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Telefone alternativo
                                        </label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('name'=>'tel_alt','value'=>$tel_alt,'class'=>'form-control','data-mask'=>'phone')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Contatar:
                                        </label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('name'=>'contatar','value'=>$contatar,'class'=>'form-control', 'size'=>'100')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Endereço <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-9">
											<?php echo form_input(array('name'=>'endereco','value'=>$endereco,'class'=>'form-control', 'required'=>'', 'size'=>'400')); ?>
										</div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            CEP <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-9">
											<?php echo form_input(array('name'=>'cep','value'=>$cep,'class'=>'form-control','data-mask'=>'postcode', 'required'=>'')); ?>
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