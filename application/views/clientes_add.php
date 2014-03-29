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
body>
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
    <?php echo anchor('dashboard', 'LOGO', 'class="navbar-brand"'); ?>
    <!-- end: LOGO -->
</div>
<div class="navbar-tools">
<!-- start: TOP NAVIGATION MENU -->
<ul class="nav navbar-right">
<!-- start: TO-DO DROPDOWN -->
<li class="dropdown">
    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
        <i class="clip-list-5"></i>
        <span class="badge"> 12</span>
    </a>
    <ul class="dropdown-menu todo">
        <li>
            <span class="dropdown-menu-title"> You have 12 pending tasks</span>
        </li>
        <li>
            <div class="drop-down-wrapper">
                <ul>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                            <span class="label label-danger" style="opacity: 1;"> today</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                            <span class="label label-danger" style="opacity: 1;"> today</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc"> Hire developers</span>
                            <span class="label label-warning"> tommorow</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc">Staff Meeting</span>
                            <span class="label label-warning"> tommorow</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc"> New frontend layout</span>
                            <span class="label label-success"> this week</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc"> Hire developers</span>
                            <span class="label label-success"> this week</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc"> New frontend layout</span>
                            <span class="label label-info"> this month</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc"> Hire developers</span>
                            <span class="label label-info"> this month</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                            <span class="label label-danger" style="opacity: 1;"> today</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                            <span class="label label-danger" style="opacity: 1;"> today</span>
                        </a>
                    </li>
                    <li>
                        <a class="todo-actions" href="javascript:void(0)">
                            <i class="fa fa-square-o"></i>
                            <span class="desc"> Hire developers</span>
                            <span class="label label-warning"> tommorow</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="view-all">
            <a href="javascript:void(0)">
                See all tasks <i class="fa fa-arrow-circle-o-right"></i>
            </a>
        </li>
    </ul>
</li>
<!-- end: TO-DO DROPDOWN-->
<!-- start: NOTIFICATION DROPDOWN -->
<li class="dropdown">
    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
        <i class="clip-notification-2"></i>
        <span class="badge"> 11</span>
    </a>
    <ul class="dropdown-menu notifications">
        <li>
            <span class="dropdown-menu-title"> You have 11 notifications</span>
        </li>
        <li>
            <div class="drop-down-wrapper">
                <ul>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-primary"><i class="fa fa-user"></i></span>
                            <span class="message"> New user registration</span>
                            <span class="time"> 1 min</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                            <span class="message"> New comment</span>
                            <span class="time"> 7 min</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                            <span class="message"> New comment</span>
                            <span class="time"> 8 min</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                            <span class="message"> New comment</span>
                            <span class="time"> 16 min</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-primary"><i class="fa fa-user"></i></span>
                            <span class="message"> New user registration</span>
                            <span class="time"> 36 min</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-warning"><i class="fa fa-shopping-cart"></i></span>
                            <span class="message"> 2 items sold</span>
                            <span class="time"> 1 hour</span>
                        </a>
                    </li>
                    <li class="warning">
                        <a href="javascript:void(0)">
                            <span class="label label-danger"><i class="fa fa-user"></i></span>
                            <span class="message"> User deleted account</span>
                            <span class="time"> 2 hour</span>
                        </a>
                    </li>
                    <li class="warning">
                        <a href="javascript:void(0)">
                            <span class="label label-danger"><i class="fa fa-shopping-cart"></i></span>
                            <span class="message"> Transaction was canceled</span>
                            <span class="time"> 6 hour</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                            <span class="message"> New comment</span>
                            <span class="time"> yesterday</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-primary"><i class="fa fa-user"></i></span>
                            <span class="message"> New user registration</span>
                            <span class="time"> yesterday</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-primary"><i class="fa fa-user"></i></span>
                            <span class="message"> New user registration</span>
                            <span class="time"> yesterday</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                            <span class="message"> New comment</span>
                            <span class="time"> yesterday</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                            <span class="message"> New comment</span>
                            <span class="time"> yesterday</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="view-all">
            <a href="javascript:void(0)">
                See all notifications <i class="fa fa-arrow-circle-o-right"></i>
            </a>
        </li>
    </ul>
</li>
<!-- end: NOTIFICATION DROPDOWN -->
<!-- start: MESSAGE DROPDOWN -->
<li class="dropdown">
    <a class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown" href="#">
        <i class="clip-bubble-3"></i>
        <span class="badge"> 9</span>
    </a>
    <ul class="dropdown-menu posts">
        <li>
            <span class="dropdown-menu-title"> You have 9 messages</span>
        </li>
        <li>
            <div class="drop-down-wrapper">
                <ul>
                    <li>
                        <a href="javascript:;">
                            <div class="clearfix">
                                <div class="thread-image">
                                    <img alt="" src="./assets/images/avatar-2.jpg">
                                </div>
                                <div class="thread-content">
                                    <span class="author">Nicole Bell</span>
                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                    <span class="time"> Just Now</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="clearfix">
                                <div class="thread-image">
                                    <img alt="" src="./assets/images/avatar-1.jpg">
                                </div>
                                <div class="thread-content">
                                    <span class="author">Peter Clark</span>
                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                    <span class="time">2 mins</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="clearfix">
                                <div class="thread-image">
                                    <img alt="" src="./assets/images/avatar-3.jpg">
                                </div>
                                <div class="thread-content">
                                    <span class="author">Steven Thompson</span>
                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                    <span class="time">8 hrs</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="clearfix">
                                <div class="thread-image">
                                    <img alt="" src="./assets/images/avatar-1.jpg">
                                </div>
                                <div class="thread-content">
                                    <span class="author">Peter Clark</span>
                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                    <span class="time">9 hrs</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="clearfix">
                                <div class="thread-image">
                                    <img alt="" src="./assets/images/avatar-5.jpg">
                                </div>
                                <div class="thread-content">
                                    <span class="author">Kenneth Ross</span>
                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                    <span class="time">14 hrs</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="view-all">
            <a href="pages_messages.html">
                See all messages <i class="fa fa-arrow-circle-o-right"></i>
            </a>
        </li>
    </ul>
</li>
<!-- end: MESSAGE DROPDOWN -->
<!-- start: USER DROPDOWN -->
<li class="dropdown current-user">
    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
        <img src="assets/images/avatar-1-small.jpg" class="circle-img" alt="">
        <span class="username">Peter Clark</span>
        <i class="clip-chevron-down"></i>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="pages_user_profile.html">
                <i class="clip-user-2"></i>
                &nbsp;My Profile
            </a>
        </li>
        <li>
            <a href="pages_calendar.html">
                <i class="clip-calendar"></i>
                &nbsp;My Calendar
            </a>
        <li>
            <a href="pages_messages.html">
                <i class="clip-bubble-4"></i>
                &nbsp;My Messages (3)
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="utility_lock_screen.html"><i class="clip-locked"></i>
                &nbsp;Lock Screen </a>
        </li>
        <li>
            <a href="login_example1.html">
                <i class="clip-exit"></i>
                &nbsp;Log Out
            </a>
        </li>
    </ul>
</li>
<!-- end: USER DROPDOWN -->
</ul>
<!-- end: TOP NAVIGATION MENU -->
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

<div id="content" class="container_16 clearfix">
    <?php echo form_open('cliente/save'); ?>
    <table>
        <tr>
            <div class="grid_4">
                <td>
                    <?php echo form_label('Nome', 'nome'); ?>
                </td>
                <td>
                    <?php echo form_input('nome', $nome); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('CPF', 'cpf'); ?>
                </td>
                <td>
                    <?php echo form_input('cpf', $cpf); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Data de Nascimento', 'data_nasc'); ?>
                </td>
                <td>
                    <?php echo form_input('data_nasc', $data_nasc); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Telefone', 'tel'); ?>
                </td>
                <td>
                    <?php echo form_input('tel', $tel); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Telefone Comercial', 'tel2'); ?>
                </td>
                <td>
                    <?php echo form_input('tel2', $tel2); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Celular', 'cel'); ?>
                </td>
                <td>
                    <?php echo form_input('cel', $cel); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('Endereço', 'endereco'); ?>
                </td>
                <td>
                    <?php echo form_input('endereco', $endereco); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('CEP', 'cep'); ?>
                </td>
                <td>
                    <?php echo form_input('cep', $cep); ?>
                </td>
            </div>
        </tr>
        <tr>
            <div class="grid_5">
                <td>
                    <?php echo form_label('UF', 'uf'); ?>
                </td>
                <td>
                    <?php echo form_input('uf', $uf); ?>
                </td>
            </div>
        </tr>
        <tr>
            <td>
                <?php echo form_label('Processos', 'tipos_processo'); ?>
            </td>
            <td>
                <?php echo form_dropdown('tipos_processo', $tipos_processo, 'Civil'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php if (isset($id)){
                    echo form_hidden('id', $id);
                } ?>
                <div class="form-save-buttons">
                    <?php echo form_submit('save', 'Salvar', 'class="btn-blue"'); ?>
                    <?php echo form_button('cancel', 'Cancelar', 'class="btn-blue" onClick="history.go(-1)"'); ?>
                </div>
            </td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</div>