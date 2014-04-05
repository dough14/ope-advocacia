<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:13
 */
//load menu
$this->template->menu('dashboard');
//var_dump($events);exit;
//$this->model('calendar_model');
?>
<?php //var_dump($this->row);exit; ?>
<body class="footer-fixed">
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
                <i class="clip-home-3"></i>
                <a href="#">
                    Home
                </a>
            </li>
            <li class="active">
                Dashboard
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
        <div class="page-header">
            <h1>Dashboard <small>overview &amp; stats </small></h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-sm-4">
        <div class="core-box">
            <div class="heading">
                <i class="clip-user-4 circle-icon circle-green"></i>
                <h2>Manage Users</h2>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </div>
            <a class="view-more" href="#">
                View More <i class="clip-arrow-right-2"></i>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="core-box">
            <div class="heading">
                <i class="clip-clip circle-icon circle-teal"></i>
                <h2>Manage Orders</h2>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </div>
            <a class="view-more" href="#">
                View More <i class="clip-arrow-right-2"></i>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="core-box">
            <div class="heading">
                <i class="clip-database circle-icon circle-bricky"></i>
                <h2>Manage Data</h2>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </div>
            <a class="view-more" href="#">
                View More <i class="clip-arrow-right-2"></i>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-calendar"></i>
                Calendar
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
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                Site Visits
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                    </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-close" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="flot-medium-container">
                    <div id="placeholder-h1" class="flot-placeholder"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="clip-pie"></i>
                        Acquisition
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-mini-container">
                            <div id="placeholder-h2" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="clip-bars"></i>
                        Pageviews real-time
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-mini-container">
                            <div id="placeholder-h3" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-sm-7">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="clip-users-2"></i>
            Users
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body panel-scroll" style="height:300px">
            <table class="table table-striped table-hover" id="sample-table-1">
                <thead>
                <tr>
                    <th class="center">Photo</th>
                    <th>Full Name</th>
                    <th class="hidden-xs">Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="center"><img src="assets/images/avatar-1.jpg" alt="image"/></td>
                    <td>Peter Clark</td>
                    <td class="hidden-xs">
                        <a href="#" rel="nofollow" target="_blank">
                            peter@example.com
                        </a></td>
                    <td class="center">
                        <div>
                            <div class="btn-group">
                                <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu pull-right">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-share"></i> Share
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td class="center"><img src="assets/images/avatar-2.jpg" alt="image"/></td>
                    <td>Nicole Bell</td>
                    <td class="hidden-xs">
                        <a href="#" rel="nofollow" target="_blank">
                            nicole@example.com
                        </a></td>
                    <td class="center">
                        <div>
                            <div class="btn-group">
                                <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu pull-right">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-share"></i> Share
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td class="center"><img src="assets/images/avatar-3.jpg" alt="image"/></td>
                    <td>Steven Thompson</td>
                    <td class="hidden-xs">
                        <a href="#" rel="nofollow" target="_blank">
                            steven@example.com
                        </a></td>
                    <td class="center">
                        <div>
                            <div class="btn-group">
                                <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu pull-right">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-share"></i> Share
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td class="center"><img src="assets/images/avatar-5.jpg" alt="image"/></td>
                    <td>Kenneth Ross</td>
                    <td class="hidden-xs">
                        <a href="#" rel="nofollow" target="_blank">
                            kenneth@example.com
                        </a></td>
                    <td class="center">
                        <div>
                            <div class="btn-group">
                                <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu pull-right">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-share"></i> Share
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td class="center"><img src="assets/images/avatar-4.jpg" alt="image"/></td>
                    <td>Ella Patterson</td>
                    <td class="hidden-xs">
                        <a href="#" rel="nofollow" target="_blank">
                            ella@example.com
                        </a></td>
                    <td class="center">
                        <div>
                            <div class="btn-group">
                                <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu pull-right">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-share"></i> Share
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-sm-5">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="clip-checkbox"></i>
            To Do
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body panel-scroll" style="height:300px">
            <ul class="todo">
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
    </div>
</div>
</div>
<!-- end: PAGE CONTENT-->
</div>
</div>
