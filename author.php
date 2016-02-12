<?php get_header(); ?>

    <!-- main -->
	<main role="main" class="main-container">
		<!-- section -->
		<section class="author">

		<?php if (have_posts()): the_post(); ?>

			<h1 class="black">About author <?php echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

    <h2>Articles</h2>

    <?php echo '<div class=""><ol>'; ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

     <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ? class="blog-link"><?php the_title(); ?></a></li>

		<?php endwhile; ?>

    <?php echo '</ol></div>'; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'demainilpleut' ); ?></h2>

			</article><!-- end of article -->

		<?php endif; ?>

			<?php get_template_part('pagination'); ?>

		</section><!-- end of section -->

	</main>

<?php get_footer(); ?>
