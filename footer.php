			<!-- footer -->
        <div class="footer bg-cream">
	        <div class="grid-container">
	          <div class="row clearfix">
              <div class="column third">
                <h3 class="coffee">Other posts</h3>
                <?php echo dip_list_posts(); ?>
              </div><!-- end of column -->
              <div class="column third">
                <h3 class="coffee">Menu</h3>
                <ul>
	                <li><a href="<?php echo home_url(); ?>" class="blog-link">Blog</a></li>
	                <li><a href="<?php echo home_url().'/archives'; ?>" class="blog-link">Archives</a></li>
	                <li><a href="<?php echo home_url().'/about'; ?>" class="blog-link">About</a></li>
	                <li><a href="<?php echo home_url().'/contact'; ?>" class="blog-link">Contact</a></li>
                </ul>
              </div><!-- end of column -->
              <div class="column third">
                <h3 class="coffee">Categories</h3>
                 <?php echo dip_list_categories(); ?> 
               </div><!-- end of column -->
            </div><!-- end of row -->
	        </div><!-- end of grid-container -->
          <div class="footer-disclaimer">
            &copy; demainilpleut.fr 2014 - All this site's content under a <a rel="license" class="blog-link" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
          </div>
        </div><!-- end of footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/prism.min.js" async></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/prism-wd.js" async></script>
    <script>
    $(document).ready(function() {
      $('body').addClass('js');
      var $menu = $('#js-menu'),
      $menulink = $('.topBar-menuBtn');
  
      $menulink.click(function() {
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
        return false;
      });
    });
    
  </script>
  <script>
    /*
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-50889884-1', 'demainilpleut.fr');
    ga('send', 'pageview');
    */

  </script>

	</body>
</html>
