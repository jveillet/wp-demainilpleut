<?php
/*
Template Name: About
*/
get_header(); ?>

<main id="content" role="main" class="dip-main">

<?php the_post(); ?>

  <h1><?php the_title(); ?></h1>

  <p class="text"><?php the_content(); ?></p>

</main>

<?php get_footer(); ?>
