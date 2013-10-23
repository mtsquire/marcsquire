<header id="banner" class="navbar navbar-fixed-top animated visible-tablet visible-phone" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
       <span id="site_title"> <?php bloginfo('name'); ?></span>
		<img src="/wp-content/themes/marcsquire/assets/img/mts_logo_big.png" width="150"/>
      </a>
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav')); ?>
      </nav>
    </div>
  </div>
</header>

