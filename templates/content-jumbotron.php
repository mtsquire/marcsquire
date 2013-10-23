<style>
div.second ul li{padding:15px 12px;}
div.second ul li.active a, div.second ul li:hover a {text-shadow: 0px 1px 2px black;}
div.second ul li a{color:#bbb;}
div.second ul li.active a, div.second ul li:hover a{color:white;}
div.second ul{background:transparent url('/wp-content/uploads/2013/03/bg-trans-50.png') top center;}
.masthead h1{line-height:45px;}
</style>
<div class="jumbotron masthead">
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
		<h1 id="homepage_jobtitle">Photographer &amp;<br>Front-End Developer</h1>
		<p id="homepage_blurb">Minimal and efficient.  I have a passion for helping people create<br>their own space on the web in a simple yet professional way.</p>
		<a href="<?php echo home_url(); ?>/web-projects" class="btn btn-primary btn-large" style="float:left;">View My Portfolio</a>
	</div>
</div>
