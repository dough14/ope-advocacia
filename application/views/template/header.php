<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 17:44
 */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>SGC<?php if (isset($page_title)) { echo ' | '.$page_title; } ?></title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/template.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/colour.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fullcalendar.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fullcalendar.print.css" media="print" />
    <!--[if IE]><![if gte IE 6]><![endif]-->
    <script src="<?php echo base_url(); ?>js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/scripts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/glow/1.7.0/core/core.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
        glow.ready(function(){
            new glow.widgets.Sortable(
                '#content .grid_5, #content .grid_6',
                {
                    draggableOptions : {
                        handle : 'h2'
                    }
                }
            );
        });
    </script>
    <!--[if IE]><![endif]><![endif]-->
</head>
<body>
<h1 id="head">SGC - Sistema de Gerenciamento de Clientes</h1>