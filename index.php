<?php
/**
 * The main template file.
 *
 */

get_header(); ?>
<div class="container-fluid index-page">
	<?php get_template_part('includes/fluidstart'); ?>
			<div class="col-md-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					
					<?php if ( have_posts() ) : ?>
					
						<?php while ( have_posts() ) : the_post(); ?>
							
                            
							<?php if ( has_post_thumbnail()) { ?>
                            	<div class="thumb-wrapper">
                                  <div class="col-md-3"><?php the_post_thumbnail('medium',array('class'=>'img-responsive img-thumbnail post-img')); ?></div>
                                 	<div class="col-md-9"><?php get_template_part('content', get_post_format());?></div>
                               </div>
                            <?php } else {?> 
                            	
								<div class="thumb-wrapper">
								<?php get_template_part('content', get_post_format());?>
                                </div>
                                <?php }?>
						<?php endwhile; ?>
							
						<?php upbootwp_content_nav('nav-below'); ?>
			
					<?php else : ?>
						<?php get_template_part( 'no-results', 'index' ); ?>
					<?php endif; ?>
			
					</main><!-- #main -->
                    <section class="blog-comments">
                    <?php if ( have_comments() ) : ?>
<h4 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h4>
<ul class="commentlist">
	<?php wp_list_comments(); ?></ul>
<div class="navigation">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) :
		// If comments are open, but there are no comments.
	else : // comments are closed
	endif;
endif; ?>
                    </section>
                    
				</div><!-- #primary -->
			</div><!-- .col-md-8 -->
			
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div><!-- .col-md-4 -->
	 <?php get_template_part('includes/fluidend'); ?>
</div>
<?php get_footer(); ?>