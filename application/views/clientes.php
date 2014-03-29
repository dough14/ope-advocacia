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
        <div class="page-header">
            <h1>Static Tables <small>static tables samples</small></h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<!-- start: PAGE CONTENT -->

<div class="row">
<div class="col-md-12">
<!-- start: TABLE WITH IMAGES PANEL -->
<div class="panel panel-default">
<div class="panel-heading">
    <i class="fa fa-external-link-square"></i>
    Table with images
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
<table class="table table-striped table-bordered table-hover" id="sample-table-2">
<thead>
<tr>
    <th class="center">
        <div class="checkbox-table">
            <label>
                <input type="checkbox" class="flat-grey">
            </label>
        </div></th>
    <th class="center">Photo</th>
    <th>Full Name</th>
    <th class="hidden-xs">Role</th>
    <th class="hidden-xs">Email</th>
    <th class="hidden-xs">Phone</th>
    <th></th>
</tr>
</thead>
<tbody>
<tr>
    <td class="center">
        <div class="checkbox-table">
            <label>
                <input type="checkbox" class="flat-grey">
            </label>
        </div></td>
    <td class="center"><img src="assets/images/avatar-1.jpg" alt="image"/></td>
    <td>Peter Clark</td>
    <td class="hidden-xs">UI Designer</td>
    <td class="hidden-xs">
        <a href="#" rel="nofollow" target="_blank">
            peter@example.com
        </a></td>
    <td class="hidden-xs">(641)-734-4763</td>
    <td class="center">
        <div class="visible-md visible-lg hidden-sm hidden-xs">
            <a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
            <a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
        </div>
        <div class="visible-xs visible-sm hidden-md hidden-lg">
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
    <td class="center">
        <div class="checkbox-table">
            <label>
                <input type="checkbox" class="flat-grey">
            </label>
        </div></td>
    <td class="center"><img src="assets/images/avatar-2.jpg" alt="image"/></td>
    <td>Nicole Bell</td>
    <td class="hidden-xs">Content Designer</td>
    <td class="hidden-xs">
        <a href="#" rel="nofollow" target="_blank">
            nicole@example.com
        </a></td>
    <td class="hidden-xs">(741)-034-4573</td>
    <td class="center">
        <div class="visible-md visible-lg hidden-sm hidden-xs">
            <a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
            <a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
        </div>
        <div class="visible-xs visible-sm hidden-md hidden-lg">
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
    <td class="center">
        <div class="checkbox-table">
            <label>
                <input type="checkbox" class="flat-grey">
            </label>
        </div></td>
    <td class="center"><img src="assets/images/avatar-3.jpg" alt="image"/></td>
    <td>Steven Thompson</td>
    <td class="hidden-xs">Visual Designer</td>
    <td class="hidden-xs">
        <a href="#" rel="nofollow" target="_blank">
            steven@example.com
        </a></td>
    <td class="hidden-xs">(471)-543-4073</td>
    <td class="center">
        <div class="visible-md visible-lg hidden-sm hidden-xs">
            <a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
            <a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
        </div>
        <div class="visible-xs visible-sm hidden-md hidden-lg">
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
    <td class="center">
        <div class="checkbox-table">
            <label>
                <input type="checkbox" class="flat-grey">
            </label>
        </div></td>
    <td class="center"><img src="assets/images/avatar-4.jpg" alt="image"/></td>
    <td>Ella Patterson</td>
    <td class="hidden-xs">Web Editor</td>
    <td class="hidden-xs">
        <a href="#" rel="nofollow" target="_blank">
            ella@example.com
        </a></td>
    <td class="hidden-xs">(799)-994-9999</td>
    <td class="center">
        <div class="visible-md visible-lg hidden-sm hidden-xs">
            <a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
            <a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
        </div>
        <div class="visible-xs visible-sm hidden-md hidden-lg">
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
    <td class="center">
        <div class="checkbox-table">
            <label>
                <input type="checkbox" class="flat-grey">
            </label>
        </div></td>
    <td class="center"><img src="assets/images/avatar-5.jpg" alt="image"/></td>
    <td>Kenneth Ross</td>
    <td class="hidden-xs">Senior Designer</td>
    <td class="hidden-xs">
        <a href="#" rel="nofollow" target="_blank">
            kenneth@example.com
        </a></td>
    <td class="hidden-xs">(111)-114-1173</td>
    <td class="center">
        <div class="visible-md visible-lg hidden-sm hidden-xs">
            <a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
            <a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
        </div>
        <div class="visible-xs visible-sm hidden-md hidden-lg">
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
<!-- end: TABLE WITH IMAGES PANEL -->
</div>
</div>
<!-- end: PAGE CONTENT-->

<div id="content" class="container_16 clearfix">
    <div class="grid_4">
        <p>
            <label>Cliente <small>nome ou CPF/CNPJ</small></label>
            <input type="text" />
        </p>
    </div>
    <div class="grid_5">
        <p>
            <label>Endereço de email</label>
            <input type="text" />
        </p>
    </div>
    <div class="grid_5">
        <p>
            <label>Tipo de processo</label>
            <select>
                <option>Judiciário</option>
                <option>Previdenciário</option>
                <option>Cívil</option>
                <option>Trabalhista</option>
            </select>
        </p>
    </div>
    <div class="grid_2">
        <p>
            <label>&nbsp;</label>
            <input type="submit" value="Search" />
        </p>
    </div>
    <div class="grid_16">
        <?php if(isset($clientes)) : ?>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de nascimento</th>
                    <th>Data de cadastro</th>
                    <th colspan="2" width="10%">Ações</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="5" class="pagination">
                        <span class="active curved">1</span><a href="#" class="curved">2</a><a href="#" class="curved">3</a><a href="#" class="curved">4</a> ... <a href="#" class="curved">10 million</a>
                    </td>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($clientes as $cliente) : ?>
                    <tr id="cliente_<?php echo $cliente['id']; ?>">
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['cpf']; ?></td>
                        <td><?php echo date("j/m/Y, g:i a", strtotime($cliente['data_nasc'])); ?></td>
                        <td><?php echo date("j/m/Y, g:i a", strtotime($cliente['date_created'])); ?></td>
                        <td>
                            <?php echo anchor('cliente/edit/'.$cliente['id'],'Editar', 'class="edit"'); ?>
                            <?php echo anchor('cliente/remove/'.$cliente['id'], 'Deletar', 'class="remove-user-event delete"'); ?>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>
    </div>
</div>

</div>
</div>
<!-- end: PAGE -->
</div>