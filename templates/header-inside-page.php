<style type="text/css" media="screen">
	#logo-nav{padding-top:20px;}
</style>
<div class="container">
	<div id="logo-nav" class="row visible-desktop">
		<div class="span3">
			<a class="logo_container" href="<?php echo home_url(); ?>/">
				<img class="hidden-phone" id="homepage_logo" src="/wp-content/themes/marcsquire/assets/img/mts_logo_big.png" width="320" align="left"/>
			</a>
		</div>
		<div class="span9">
			<div class="second" role="navigation">
	         <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav')); ?>
	      	</div>
		</div>
		<div style="clear:both;"></div>
	</div>
</div>