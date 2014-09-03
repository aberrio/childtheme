<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

				
					<div class="page-header">
						<h1 class="archive_title h2">
							<?php
							$current_term = get_queried_object();
							$taxonomy = get_taxonomy($current_term->taxonomy);
							echo $taxonomy->label . ': ' . $current_term->name;
							?>


						</h1>
					
					</div>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="col-sm-3">
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							<?php the_post_thumbnail( 'wpbs-featured' ); ?>
							
							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<div class="product-type">
        						<?php echo get_the_term_list( $post->ID, 'grades', 'Grade: ', ', ', '' ); ?> 
   							 </div>
							
							

						
						</header> <!-- end article header -->
					
						<section class="post_content">
						
							
				
							
					
						</section> <!-- end article section -->
						
					<p class="meta">  <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>

					<?php the_excerpt(); ?>
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