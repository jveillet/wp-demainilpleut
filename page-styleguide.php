<?php
/*
Template Name: Styleguide
*/
get_header(); ?>

<main id="content" role="main" class="dip-main">

  <?php the_post(); ?>

  <h1><?php the_title(); ?></h1>

  <div class="patterns">

    <div class="pattern">
      <h1 class="pattern-title">Colors</h1>
      <div class="pattern-item">
        <ul class="colors">
          <li class="color" style="background: #0a0000;">
            <span class="color-text">#0a0000</span>
          </li>
          <li class="color" style="background: #0a0000;">
            <span class="color-text">#0a0000</span>
          </li>
          <li class="color" style="background: #0a0000;">
            <span class="color-text">#0a0000</span>
          </li>
        </ul>
      </div>
    </div><!-- end of pattern item -->


  </div><!-- end of patterns -->

</main><!-- end of main -->

<?php get_footer(); ?>
