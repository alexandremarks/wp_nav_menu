<!--Registrar menu principal -->

<?php
$defaults = array(
    'theme_location'  => 'menu-primario',
    'menu'            => 'Menu Principal',
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'bs-example-navbar-collapse-1',
    'menu_class'      => 'nav navbar-nav navbar-right',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
);

wp_nav_menu( $defaults );

?>