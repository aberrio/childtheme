<?php get_header(); ?>
			
			<div id="content" class="clearfix row">

			
				<div id="main" class="col-sm-12 clearfix" role="main">


				
					<div class="page-header">
						<h1 class="archive_title h2">
							Milestones
						</h1>
						<p class="font-size-medium">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae sagittis tellus. Nam adipiscing sit amet felis vel dapibus. Praesent magna orci, aliquet sed diam eget, pellentesque rutrum orci. Aliquam vitae laoreet ante. Phasellus fermentum laoreet mauris et aliquet. Duis pretium nibh nunc, eu gravida lorem pellentesque in. Maecenas accumsan ornare interdum. Vestibulum ante ipsum primis
						</p>
						
					<h4><?php echo do_shortcode('[searchandfilter id="5738" ]'); ?></h4>


						
						<h3>All Milestones</h3>
						</div>
						

			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="col-sm-3 mbl">

					
					<article id="post-<?php the_ID(); ?> " <?php post_class('clearfix'); ?> role="article">

						
						<header>
							<p class="category-milestone mbl pbl"><?php the_category(', '); ?></p>	
							<?php the_post_thumbnail( 'wpbs-featured-milestones' ); ?>

							
						   <h4 class><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a></h4>


							
							
						</header> <!-- end article header -->
 
							
					
						<section class="post_content">
						
				
							
					
						</section> <!-- end article section -->

					
					<p class="meta-grade"> <?php echo get_the_term_list( $post->ID, 'grades', 'Grade: ', ', ', '' ); ?></p>
                    

					<?php the_excerpt(); ?>
				      <!--  <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?> -->


	</div>


					
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
		
					
					<?php endwhile; ?>	

					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>
			
					
								
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				

<?php get_footer(); ?>