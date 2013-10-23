<footer id="content-info" class="container" role="contentinfo">
  <div class="row-fluid">
		<div class="span6">
	  		<?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
		<div class="span6">
			
		</div>
  </div>
	  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>


<script>


$(document).ready(function() {
	
	<?php 
	
	if (is_front_page()) {
	
	?>
	// Jumbotron background image rotation
	$(".jumbotron").backstretch([ 
		  "http://i2.wp.com/www.marcsquiredesign.com/wp-content/uploads/2013/03/donte_greene_jumbo.jpg",
		  "http://i1.wp.com/www.marcsquiredesign.com/wp-content/uploads/2013/03/sean_taylor_jumbo.jpg",
		  "/wp-content/themes/marcsquire/assets/img/key_west.jpg"
	  ], {duration: 4000, fade: 750});

	<?php } ?>

	// Hide and show banner fixed at the top on scroll
	function scrollBanner(){
		var win=$(window);
		var scrolled=win.scrollTop();
		if ($.browser.msie){
			if ($(window).width() >= 1024){
				if (scrolled>100){
					$('#banner').removeClass('visible-phone visible-tablet');
					$('#banner').fadeIn();
				} else {
					$('#banner').fadeOut();
				}
			}
		}
		else{
			if ($(window).width() >= 1024){
				if (scrolled>60){
					$('#banner').removeClass('visible-phone visible-tablet');
					$('#banner').removeClass('rotateOutUpLeft').show().addClass('rotateInDownLeft');
				} else {
					$('#banner').removeClass('rotateInDownLeft').addClass('rotateOutUpLeft').one('webkitAnimationEnd animationend', function(){

					});
				}
			}
		}
		
	}
	$(window).scroll(function(){
		scrollBanner();
	});
	
	
	
	<?php 
	
	if (is_page('instagram-photo-map')) {
	
	?>	
		$(".instapress-shortcode-image > a").fancybox({
				openEffect	: 'elastic',
				closeEffect	: 'elastic',
				nextEffect : 'fade',
				prevEffect : 'fade',
				padding: 0,
				loop : false,
			    helpers : {
			        title: {
			            type: 'outside'
			        }
			    }
			});
		$(".standard_resolution").fancybox({
				openEffect	: 'elastic',
				closeEffect	: 'elastic',
				nextEffect : 'fade',
				prevEffect : 'fade',
				padding: 0,
				loop : false,
			    helpers : {
			        title: {
			            type: 'outside'
			        }
			    }
			});
		
	<?php } ?>
	

});

</script>
</footer>