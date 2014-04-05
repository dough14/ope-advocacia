<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:16
 */
$class = '';
$active = '';
$menus = array(
    'dashboard' => array('url'=>'dashboard', 'label'=>'Dashboard', 'icon'=>'clip-home-2'),
    'cliente'   => array(
        'url'   =>'cliente',
        'label' =>'Cliente',
        'icon'  =>'clip-users-3',
        'childs'=> array ('add' => array('url' => 'cliente/add', 'label' => 'Adicionar Cliente'))
    ),
    'user'   => array(
        'url'   =>'user',
        'label' =>'Funcionários',
        'icon'  =>'clip-user-5',
        'childs'=> array ('add' => array('url' => 'user/add', 'label' => 'Adicionar Funcionário'))
    ),
    'calendar' => array(
        'url'=>'calendar',
        'label'=>'Calendário',
        'icon'  =>'fa fa-calendar',
        'childs'=> array ('add' => array('url' => 'calendar/add', 'label' => 'Adicionar Evento')),
    ),
    'lawsuit'   => array(
        'url'   =>'lawsuit',
        'label' =>'Processos',
        'icon'  =>'clip-users-3',
        'childs'=> array ('add' => array('url' => 'lawsuit/add', 'label' => 'Adicionar Processo'))
    ),
    'logout' => array('url'=>'login/logout', 'label'=>'Logout','icon' =>'fa fa-sign-out',),
);

?>
<?php ?>
<div class="main-container">
    <div class="navbar-content">
    <!-- start: SIDEBAR -->
    <div class="main-navigation navbar-collapse collapse">
    <!-- start: MAIN MENU TOGGLER BUTTON -->
        <div>
            <?php echo anchor('dashboard', ' <img src="assets/images/logo.png">', 'style="float:left; width:175px;"'); ?>
        </div>
        <div class="navigation-toggler">
            <i class="clip-chevron-left"></i>
            <i class="clip-chevron-right"></i>
        </div>
        <!-- end: MAIN MENU TOGGLER BUTTON -->
        <!-- start: MAIN NAVIGATION MENU -->
        <ul class="main-navigation-menu">
<?php foreach($menus as $menu): ?>
    <?php $url = $menu['url'];
        if(strstr(current_url(), $url) == TRUE){
            $class = 'selected';
            $active = 'active';
        }else{
            $class = '';
            $active = '';
        }
    ?>
            <li class="<?php echo $active ?>">
            <?php if( isset($menu['childs']) && count($menu['childs']) > 0 ): ?>
                <a href="javascript:void(0)"><i class="<?php echo $menu['icon'] ?>"></i>
                    <span class="title"> <?php echo $menu['label'];?> </span><i class="icon-arrow"></i>
                    <span class="selected"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url($menu['url']); ?>"><i class="<?php echo $menu['icon'] ?>"></i>
                            <span class="title"><?php echo $menu["label"]?></span><span class="<?php echo $class ?>"></span>
                        </a>
                    </li>
                    <?php foreach( $menu['childs'] as $child ): ?>
                        <li><?php echo anchor($child['url'], $child['label']); ?></li>
                    <?php endforeach ?>
                </ul>
            <?php else: ?>
                <a href="<?php echo base_url($menu['url']); ?>"><i class="<?php echo $menu['icon'] ?>"></i>
                    <span class="title"><?php echo $menu["label"]?></span><span class="<?php echo $class ?>"></span>
                </a>
            <?php endif ?>
            </li>
<?php endforeach ?>
        </ul>
<!-- end: MAIN NAVIGATION MENU -->
</div>
<!-- end: SIDEBAR -->
</div>