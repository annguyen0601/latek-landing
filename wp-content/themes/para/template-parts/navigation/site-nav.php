<?php 
/*
* Display Theme menus
*/
?>
<div class="header">
	<div class="menubox">
    <?php 
    if(has_nav_menu('primary')){ ?>
  		<div class="toggle-menu responsive-menu">
        <button role="tab" class="resToggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','para'); ?></span></button>
      </div>
    <?php }?>
		<div id="menu-sidebar" class="nav sidebar">
      <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'para' ); ?>">
        <?php
          if(has_nav_menu('primary')){  
            wp_nav_menu( array( 
              'theme_location' => 'primary',
              'container_class' => 'main-menu-navigation clearfix' ,
              'menu_class' => 'clearfix',
              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
              'fallback_cb' => 'wp_page_menu',
            ) );
          } 
        ?>
        <a href="javascript:void(0)" class="closebtn responsive-menu pt-0"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','para'); ?></span></a>
      </nav>
    </div>
	</div>
</div>