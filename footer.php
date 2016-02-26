<?php
/**
 * The Footer.
 */
$options = get_option( 'theme_settings' ); ?>
    </div> <!-- container -->
    <div class="push"></div>
	</div><!-- #content -->
</div><!-- #page -->
</div>
<footer class="container-fluid">
	<?php get_template_part('includes/fluidstart'); ?>
        <div class="row" id="footer-widgets">
        	<?php dynamic_sidebar ('footer-widget-left'); ?>
            <?php dynamic_sidebar ('footer-widget-right'); ?>
        </div><!-- .row -->
       
        <div class="row" id="footer-navigation">
            <div class="col-md-8">
            	<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?>
            </div>  
            <div class="col-md-4 text-right"> 
				<?php bloginfo('name'); ?> &copy; <?php echo date("Y"); ?></a>
                <span class="sep"> | </span>
                <a href="http://theideacenter.com/" title="Site Designed by The Idea Center" target="_blank" class="credits-link">Site Design</a>
            </div>
	<?php get_template_part('includes/fluidstart'); ?>
</footer>
<script src="/wp-content/themes/pgstrap/js/bootstrap.min.js"></script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>
<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stickUp.min.js"></script>
<script type="text/javascript">
              //initiating jQuery
              jQuery(function($) {
                $(document).ready( function() {
                  //enabling stickUp on the '.navbar-wrapper' class 
                  $('.sticky-header').stickUp();
                });
              });
</script> -->
<?php wp_footer(); ?>
</body>
</html>