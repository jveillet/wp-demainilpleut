<?php
/*
Template Name: About
*/
get_header(); ?>

<main id="content" role="main" class="dip-main">

<?php the_post(); ?>

  <h2 class="coffee"><?php the_title(); ?></h2>

  <p class="text"><?php the_content(); ?></p>

</main>

<?php get_footer(); ?>
