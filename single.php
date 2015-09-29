<?php get_header(); ?>

    <!-- main -->
	<main role="main" class="dip-main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>"class="blogPost">

          <h2 class="coffee"><?php the_title(); ?></h2>
		  
          <span class="blogPost-author"><a class="blog-link" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
          <span class="blogPost-pubDate">&mdash;&nbsp;<time datetime=""><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></time></span>
          <div class="blogPost-summary">
            <span class="blogPost-readingTime"><?php echo dip_reading_time(get_the_content()); ?> read</span>
          </div>
		  <?php the_content(); ?>
		  <span class="blogPost-categories">Published in <?php the_category(', '); ?>

		</article><!-- end of article -->

		<div class="about">
          <h2 class="about-title">About the Author</h2>
          <div class="about-author">
            <a class="about-author-avatar" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><img src="<?php echo get_wp_user_avatar_src(get_the_author_meta('ID')); ?>" width="80" height="80" alt="<?php echo the_author_meta('display_name'); ?>"></a>
			<a class="about-author-name" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo the_author_meta('display_name'); ?></a>
            <div class="about-author-bio">
              <p><?php echo get_the_author_meta('description'); ?></p>
            </div><!-- end of author bio -->
          </div><!-- end of about author -->
        </div><!-- end of about section -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'demainilpleut' ); ?></h2>

		</article><!-- end of article -->

	<?php endif; ?>

	</section><!-- /section -->
	</main><!-- end of main -->

<?php get_footer(); ?>
