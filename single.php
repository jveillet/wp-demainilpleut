<?php get_header(); ?>

    <!-- main -->
	<main role="main" class="main-container">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="article-wrapper">

      <h1 class="article-title"><?php the_title(); ?></h1>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" class="article">
        <span class="article-author">by&nbsp;<a class="article-author--link" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
        <span class="article-pubdate">&mdash;&nbsp;<time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?> at <?php the_time('G:i'); ?></time></span>
        <div class="article-summary">
          <span class="article-readingTime"><?php echo dip_reading_time(get_the_content()); ?> read</span>
        </div>
        <div class="article-content"><?php the_content(); ?></div>
        <span class="article-categories">Published in <?php the_category(', '); ?></span><span class="article-top"><a href="#top" class="top" title="Go to the top of the page">↑ Back to top</a></span>
			</article><!-- end of article -->

      <div class="about about-box">
        <h2 class="about-title">About the Author</h2>
        <div class="about-author">
          <div class="about-author-bio">
            <a class="about-author-avatar" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><img src="<?php echo get_wp_user_avatar_src(get_the_author_meta('ID')); ?>" width="80" height="80" alt="<?php echo the_author_meta('display_name'); ?>"></a>
            <p><span class="about-author-name"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo the_author_meta('display_name'); ?></a></span><br><small><?php echo get_the_author_meta('description'); ?></small></p>
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

		</div><!-- end of article-wrapper -->
	</main><!-- end of main -->

<?php get_footer(); ?>
