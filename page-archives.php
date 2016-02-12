<?php
/*
Template Name: Archives
*/
get_header(); ?>

<main id="content" role="main" class="main-container">

  <?php //get_search_form(); ?>

  <?php the_post(); ?>

  <h1><?php the_title(); ?></h1>

  <p class="text"><?php the_content(); ?></p>

  <?php
  $how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));
  if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 10;

  $my_query = new WP_Query('post_type=post&nopaging=1');
  if($my_query->have_posts()) {
    echo '<h2>Last '.$how_many_last_posts.' Posts</h2>';
    echo '<div class=""><ol>';
    $counter = 1;
    while($my_query->have_posts() && $counter <= $how_many_last_posts) {
      $my_query->the_post();
      ?>
      <li><?php echo $counter.'. '; ?><a href="<?php the_permalink() ?>" rel="bookmark" class="blog-link" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
      <?php
      $counter++;
    }
    echo '</ol></div>';
    wp_reset_postdata();
  }
  ?>

  <h2>Our Authors</h2>
  <div>
    <ul class="archives">
      <?php wp_list_authors('exclude_admin=0&optioncount=1'); ?>
    </ul>
  </div>

  <h2>By Month</h2>
  <div class="archives">
    <p class="archives--small"><?php wp_get_archives('type=monthly&format=custom&after= |'); ?></p>
  </div>

</main><!-- #content -->

<?php get_footer(); ?>
