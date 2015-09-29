<?php get_header(); ?>
    
    <!-- main -->
	<main role="main" class="dip-main">
		<!-- section -->
		<section>
			
			<?php if($wp_query->found_posts>0): ?>
			  <h2 class="headings"><?php echo sprintf('%s Search Results for ', $wp_query->found_posts); echo get_search_query(); ?></h2>
			<?php endif; ?>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section><!-- end of section -->
		
	</main><!-- end of main -->

<?php get_footer(); ?>
