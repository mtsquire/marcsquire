<?php
if ( is_page_template('page-mapproject.php') ) {
	get_template_part('templates/maphead');
} else {
    // Returns false when 'about.php' is not being used.
	get_template_part('templates/head');
}
?>

<?php
if ( is_page_template('page-mapproject.php') ) {
?>
	<body <?php body_class(); ?> onload="initialize()">
<?php
} else {
?>
	<body <?php body_class(); ?>>
<?php
}
?>



  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

<?php
if ( is_page_template('page-homepage.php') ) {
	get_template_part('templates/content', 'jumbotron');
} else {
    // Returns false when 'about.php' is not being used.
	get_template_part('templates/header', 'inside-page');
}
?>

  <div id="wrap" class="container" role="document">
    <div id="content" class="homepage row-fluid">
      <div id="main" class="span12" role="main">
        <?php include roots_template_path(); ?>
      </div>
    </div><!-- /#content -->
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>