<?php get_header(); ?>

  <!-- main -->
  <main role="main" class="main-container">
    <!-- section -->
    <section>
      <h1>Categories for <?php single_cat_title(); ?></h1>
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>
    </section><!-- end of section -->
  </main><!-- end of main -->

<?php get_footer(); ?>
