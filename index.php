				<?php get_header(); ?>
			<section id="content"><div class="inner wrap clearfix">
				<div id="main" class="ninecol first clearfix" role="main">

					    <?php while ( have_posts() ) : the_post(); ?>
					    	<?php get_template_part( 'content-list', get_post_format() ); ?>
					    <?php endwhile; ?>	
					
					
					        <?php if (function_exists('kr8_page_navi')) { ?>
						        <?php kr8_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(__('&laquo; Ältere Beiträge', "kr8theme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(__('Neuere Beiträge &raquo;', "kr8theme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>	
					

			
			
    		</div> <!-- end #main -->
    
			<?php get_sidebar(); ?>		
			</div></section>
			<?php get_footer(); ?>
