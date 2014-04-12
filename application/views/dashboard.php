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
                        <?php if( isset($breadcrumbs) ) echo $breadcrumbs ?>
                        <?php if( isset($search) ) echo $search ?>
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
                            Calendário
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

                            <script type="text/javascript">
                                jQuery('document').ready(function(){
                                    jQuery('#calendar').fullCalendar({
                                        events: [
                                            <?php foreach( $events as $event ): ?>
                                            <?php
                                                $startDate = new DateTime($event->startDate);
                                                $_startMonth = new DateInterval('P1M');
                                                $startDate->sub($_startMonth);
                                                $_startMonth = $startDate->format('m');
                                            ?>
                                            {
                                                title: '<?php echo $event->title ?>',
                                                start: new Date(<?php echo $startDate->format('Y') ?>, <?php echo $_startMonth == 12 ? 0 : $_startMonth ?>, <?php echo $startDate->format('d') ?>),
                                                <?php if( !empty($event->endDate) ): ?>
                                                <?php
                                                    $endDate   = new DateTime($event->endDate);
                                                    $_endMonth = new DateInterval('P1M');
                                                    $endDate->sub($_endMonth);
                                                    $_endMonth = $endDate->format('m');
                                                ?>
                                                end: new Date(<?php echo $endDate->format('Y') ?>, <?php echo $_endMonth == 12 ? 0 : $_endMonth ?>, <?php echo $endDate->format('d') ?>)
                                                <?php endif ?>
                                            },
                                            <?php endforeach ?>
                                        ],
                                        titleFormat: {
                                            month: 'MMM yyyy',
                                            day: 'd MMM'
                                        },
                                        header: {
                                            left: 'prev,next today',
                                            center: 'title',
                                            //right: 'month,agendaWeek,agendaDay'
                                            right: 'month,agendaDay'
                                        },
                                        timeFormat: {
                                            agenda: 'h(:mm)t{ - h(:mm)t}',
                                            '': 'h(:mm)t{-h(:mm)t }'
                                        },
                                        monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ],
                                        monthNamesShort: ['Jan','Fev','Mar','Abr','Maio','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                                        dayNames: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                                        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
                                        buttonText: {
                                            today: 'Hoje',
                                            month: 'Mês',
                                            week: 'Semana',
                                            day: 'Dia'
                                        },
                                        allDayText: 'Dia Inteiro'
                                    });
                                });
                            </script>

                            <div id='calendar'></div>
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
            </div>
        <!-- end: PAGE CONTENT-->
        </div>
    </div>