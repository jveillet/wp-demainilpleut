<?php
/*
Template Name: Archives
*/
get_header(); ?>

<main id="content" role="main" class="dip-main">
  <?php get_search_form(); ?>
		
  <?php the_post(); ?>
			
  <h2 class="coffee">Archives</h2>
  <ul class="archives">
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

</main><!-- #content -->

<?php get_footer(); ?>
