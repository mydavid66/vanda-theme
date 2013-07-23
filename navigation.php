<div class="container">
		<div class="menu pb10">
			<ul>
  			<!-- first  way <?php wp_nav_menu(); ?>-->
			<!-- second way<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>-->
			<!-- third way <?php wp_nav_menu( array('menu' => 'Project Nav' )); ?>-->
			<!--<?php wp_nav_menu( array( 'container' => '' ) ); ?>-->
			<?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => 'mainmenu',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
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
		</ul>
			<div class="badboy"></div>
		</div>
		<div class="searchbox"></div>
	</div>