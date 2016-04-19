<?php get_header(); ?>
    <!-- main -->
	<main role="main" class="main-container">

		<!-- section -->
		<section>

		  <?php //get_template_part('searchform'); ?>

      <button onClick="scrollTo(0, 500);">click to scroll down 100 pixels</button>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>


		</section><!-- end of section -->

	</main><!-- end of main -->

<?php get_footer(); ?>

