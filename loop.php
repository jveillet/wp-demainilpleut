<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <!-- article -->
  <article id="post-<?php the_ID(); ?>" class="article">
    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="article-title"><?php the_title(); ?></a></h2>
    <span class="article-author"><a class="article-author--link" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
    <span class="article-pubdate">&mdash;&nbsp;<time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?> at <?php the_time('G:i'); ?></time></span>
    <div class="article-summary"></div>
    <?php the_excerpt(); ?>
  </article><!-- end of article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article class="article">
		<h1>Sorry, no articles... yet!</h1>
	</article><!-- end of article -->

<?php endif; ?>
