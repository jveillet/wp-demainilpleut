<?php get_header(); ?>

  <main role="main" class="main-container">
    <!-- section -->
    <section>
      <!-- article -->
      <article id="post-404">
        <h1><?php _e( 'Page not found', 'demainilpleut' ); ?></h1>
        <h2>
          <a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'demainilpleut' ); ?></a>
        </h2>
      </article><!-- end of article -->
    </section><!-- end of section -->
  </main>

<?php get_footer(); ?>
