			<!-- footer -->
        <div class="footer bg-green--lightgreen">
	        <div class="grid-container">
	          <div class="row clearfix">
              <div class="column third">
                <h3 class="black">Other posts</h3>
                <?php echo dip_list_posts(); ?>
              </div><!-- end of column -->
              <div class="column third">
                <h3 class="black">Menu</h3>
                <ul>
	                <li><a href="<?php echo home_url(); ?>" class="footer-link">Blog</a></li>
	                <li><a href="<?php echo home_url().'/archives'; ?>" class="footer-link">Archives</a></li>
                  <li><a href="<?php echo home_url().'/styleguide'; ?>" class="footer-link">Styleguide</a></li>
                </ul>
              </div><!-- end of column -->
              <div class="column third">
                <h3 class="black">Categories</h3>
                 <?php echo dip_list_categories(); ?>
               </div><!-- end of column -->
            </div><!-- end of row -->
	        </div><!-- end of grid-container -->
          <div class="footer-disclaimer">
            Copyright &copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - All this site's content under a <a rel="license" class="footer-disclaimer-link" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
          </div>
        </div><!-- end of footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=blissfuljs"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bliss.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/prism.min.js"></script>
    <script>
      // Add/display the mobile menu button, and
      $.ready().then(function(){
        $("body").classList.add("js");
        var menu = $("#js-menu");
        var menulink = $(".topbar-menu-btn");
        // Toggle the display of menu links
        menulink
        .addEventListener("click", function(event) {
          menulink.classList.toggle("active");
          menu.classList.toggle('active');
          return false;
        });
      });
    </script>
	</body>
</html>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400,400italic,600italic,600,300" rel="stylesheet" />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,400italic,500,500italic,700,700italic,600italic,600' rel='stylesheet' type='text/css'>
