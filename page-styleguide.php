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
            <div class="color-text">#0a0000</div>
          </li>
          <li class="color" style="background: #392D65;">
            <div class="color-text">#392D65</div>
          </li>
          <li class="color" style="background: #706694;">
            <div class="color-text">#706694</div>
          </li>
          <li class="color" style="background: #938CAE;">
            <div class="color-text">#938CAE</div>
          </li>
          <li class="color" style="background: #C2BED1;">
            <div class="color-text">#C2BED1</div>
          </li>
          <li class="color" style="background: #8CA755;">
            <div class="color-text">#8CA755</div>
          </li>
          <li class="color" style="background: #EDF5DB;">
            <div class="color-text color-text-inverted">#EDF5DB</div>
          </li>
        </ul>
      </div>
    </div><!-- end of pattern item -->

    <div class="pattern">
      <h1 class="pattern-title">Headings</h1>
      <div class="pattern-item">
        <h1 class="black">Heading 1</h1>
        <h2 class="black">Heading 2</h2>
        <h3 class="black">Heading 3</h3>
        <h4 class="black">Heading 4</h4>
        <h5 class="black">Heading 5</h5>
        <h6 class="black">Heading 6</h6>
      </div>
    </div><!-- end of pattern item -->

    <div class="pattern">
      <h1 class="pattern-title">Paragraphs</h1>
      <div class="pattern-item">
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum odio eget mauris vestibulum feugiat. Praesent ante sapien, luctus pulvinar ultricies quis, aliquet in mi. Nulla facilisi. Donec malesuada fringilla iaculis. Praesent nec quam sit amet orci volutpat volutpat in eget eros. Duis pellentesque bibendum erat. Integer pretium nunc vel augue rutrum eget feugiat mi molestie. Cras venenatis, turpis et rhoncus scelerisque, mi augue suscipit urna, quis sagittis tortor nisl ut purus. Aliquam at enim est. Donec sit amet suscipit quam. Aliquam sit amet commodo eros.</p>
      </div>
    </div><!-- end of pattern item -->

    <div class="pattern">
      <h1 class="pattern-title">Typography</h1>
      <div class="pattern-item">
        <p class="text">Body text: Open Sans, Helvetica, Arial, sans-serif.</p>
        <p class="text"><small>Small body text: Open Sans, Helvetica, Arial, sans-serif.</small></p>
        <p class="text"><strong>Bold body text: Open Sans, Helvetica, Arial, sans-serif.</strong></p>
        <p class="text"><em>Italic body text: Open Sans, Helvetica, Arial, sans-serif.</em></p>
        <p class="text"><u>Underlined body text: Open Sans, Helvetica, Arial, sans-serif.</u></p>
        <p class="text"><s>Scrached body text: Open Sans, Helvetica, Arial, sans-serif.</s></p>
      </div>
    </div><!-- end of pattern item -->

    <div class="pattern">
      <h1 class="pattern-title">Blockquote</h1>
      <div class="pattern-item">
        <p class="quote">&ldquo;Let me explain something to you. Um, I am not “Mr. Lebowski”. You’re Mr. Lebowski. I’m the Dude. So that’s what you call me. You know, that or, uh, His Dudeness, or uh, Duder, or El Duderino if you’re not into the whole brevity thing.&rdquo; &mdash;The Big Lebowski</p>
      </div>
    </div><!-- end of pattern item -->

    <div class="pattern">
      <h1 class="pattern-title">TopBar</h1>
      <div class="pattern-item">
       <div id="topBar" class="topBar topBar--purple">
        <div class="topBar-logo">
         <a href="<?php echo home_url(); ?>" class="topBar-logo-url">demainilpleut.fr</a>
        </div><!-- end of topBar logo -->
       <div class="topBar-menu">
        <button class="topBar-menuBtn topBar-menuBtn--small">Menu</button>
        <nav id="js-menu" role="navigation" class="topBar-navigation">
          <ul>
            <li><a href="#" class="topBar-navigation-item">Link 1</a></li>
            <li><a href="#" class="topBar-navigation-item">Link 2</a></li>
            <li><a href="#" class="topBar-navigation-item">Link 3</a></li>
            <li><a href="#" class="topBar-navigation-item">Link 4</a></li>
          </ul>
        </nav><!-- end of topBarNavigation -->
      </div><!-- end of topBarMenu -->
    </div><!-- end of topBar -->
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Blog post summary</h1>
  <div class="pattern-item">
    <article id="post-1" class="blogPost">
      <h2><a href="#" title="Lorem ipsum dolor sit amet." class="blogPost-title">Lorem ipsum dolor sit amet.</a></h2>
      <span class="blogPost-author"><a class="blog-link" href="#">Jérémie Veillet</a></span>
      <span class="blogPost-pubDate">&mdash;&nbsp;<time datetime="2014-02-10T12:10:48-05:00">February 10, 2014</time></span>
      <div class="blogPost-summary"></div>
      <p>Donec nec leo fringilla, pulvinar eros sit amet, scelerisque enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec fringilla a quam sit amet iaculis. Nullam a nisl sit amet arcu posuere iaculis non a tortor. Fusce non nulla arcu...</p>
      <div><a class="blogPost-btn" href="#">Read more...</a></div>
    </article><!-- end of article -->
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Blog post</h1>
  <div class="pattern-item">
    <h1 class="blogPost-title">Lorem ipsum dolor sit amet.</h1>
    <article id="post-1"class="blogPost">
      <span class="blogPost-author"><a class="blog-link" href="#">Jérémie Veillet</a></span>
      <span class="blogPost-pubDate">&mdash;&nbsp;<time datetime="2014-02-10T12:10:48-05:00">February 10, 2014</time></span>
      <div class="blogPost-summary">
        <span class="blogPost-readingTime">15 min read</span>
      </div>
      <p>Donec nec leo fringilla, pulvinar eros sit amet, scelerisque enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec fringilla a quam sit amet iaculis. Nullam a nisl sit amet arcu posuere iaculis non a tortor. Fusce non nulla arcu. Vivamus pellentesque nulla sem, id faucibus magna aliquet eget. Ut elit turpis, tincidunt quis ligula sit amet, lobortis placerat odio. Cras a sapien aliquet, ultricies sem ornare, varius felis.</p>
      <p>Duis rhoncus bibendum ultricies. Donec vestibulum ornare felis sit amet tincidunt. Suspendisse potenti. Donec sit amet dolor diam. Fusce luctus fermentum tellus non consectetur. Curabitur nec tellus odio. Etiam vitae nibh molestie, semper ante ac, interdum est. Nullam leo turpis, vulputate sed massa quis, elementum euismod nisi. Sed quis tellus quis velit vehicula consectetur non at nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse suscipit placerat turpis quis lobortis. Mauris nisi orci, faucibus a malesuada at, auctor vitae nulla. Nulla ac erat a tortor vulputate gravida. Quisque fringilla eu purus sit amet pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
      <p>Vivamus condimentum elit eu libero dapibus bibendum. Sed commodo, metus et pellentesque mattis, nisl elit laoreet mi, nec scelerisque arcu neque id tortor. Cras vehicula nulla quis hendrerit mattis. Nullam laoreet dignissim quam vitae faucibus. Pellentesque dignissim sit amet odio ac tempus. Integer quis faucibus ipsum. Aliquam bibendum metus eu sagittis aliquet. Aenean sollicitudin euismod dolor vel euismod. Nullam blandit lacinia venenatis.</p>
      <span class="blogPost-categories">Published in <a href="#" rel="tag">Uncategorized</a></span>
    </article><!-- end of article -->
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->


<div class="pattern">
  <h1 class="pattern-title">About</h1>
  <div class="pattern-item">
    <div class="about about-box">
      <h2 class="about-title">About the Author</h2>
      <div class="about-author">
        <div class="about-author-bio">
          <a class="about-author-avatar" href="#"><img src="https://demainilpleut.fr/wp-content/uploads/2015/12/capitan.jpg" width="80" height="80" alt="author"></a>
          <p><span class="about-author-name"><a href="#">Reno Raines</a></span><br><small>He was a cop, and good at his job. But he committed the ultimate sin—and testified against other cops gone bad. Cops that tried to kill him, but got the woman he loved instead. Framed for murder, now he prowls the badlands...an outlaw hunting outlaws...a bounty hunter...a RENEGADE, demain il pleut's administrator.</small></p>
        </div><!-- end of author bio -->
      </div><!-- end of about author -->
    </div><!-- end of about section -->
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Pagination</h1>
  <div class="pattern-item">
   <div class="pagination">
    <ul class="page-numbers">
      <li><span class="page-numbers current">1</span></li>
      <li><a class="page-numbers" href="#">2</a></li>
      <li><a class="page-numbers" href="#">3</a></li>
      <li><a class="page-numbers" href="#">4</a></li>
      <li><a class="page-numbers" href="#">5</a></li>
      <li><a class="page-numbers" href="#">6</a></li>
      <li><a class="page-numbers" href="#">7</a></li>
      <li><a class="next page-numbers" href="#">Next »</a></li>
    </ul>
  </div><!-- end of pagination -->
</div><!-- end of pattern item -->
</div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Footer</h1>
  <div class="pattern-item">
    <div class="footer footer--lightgreen">
      <div class="grid-container">
        <div class="row clearfix">
          <div class="column third">
            <h3 class="black">Other posts</h3>
            <ul>
              <li><a href="#" class="footer-link">Your cells react to ba...</a></li>
              <li><a href="#" class="footer-link">Hello world!</a></li>
              <li><a href="#" class="footer-link">You think water moves ...</a></li>
              <li><a href="#" class="footer-link">That show's called a p...</a></li>
              <li><a href="#" class="footer-link">Your bones don't break</a></li>
              <li><a href="#" class="footer-link">My money's in that off...</a></li>
              <li><a href="#" class="footer-link">Now that we know who y...</a></li>
            </ul>
          </div><!-- end of column -->
          <div class="column third">
            <h3 class="black">Menu</h3>
            <ul>
              <li><a href="#" class="footer-link">Link 1</a></li>
              <li><a href="#" class="footer-link">Link 2</a></li>
              <li><a href="#" class="footer-link">Link 3</a></li>
              <li><a href="#" class="footer-link">Link 3</a></li>
            </ul>
          </div><!-- end of column -->
          <div class="column third">
            <h3 class="black">Categories</h3>
            <ul>
             <li><a href="#" class="footer-link">Uncategorized (7)</a></li>
             <li><a href="#" class="footer-link">Uncategorized (2)</a></li>
             <li><a href="#" class="footer-link">Uncategorized (4)</a></li>
           </ul>
         </div><!-- end of column -->
       </div><!-- end of row -->
     </div><!-- end of grid-container -->
     <div class="footer-disclaimer">
      Copyright &copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - All this site's content under a <a rel="license" class="footer-disclaimer-link" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
    </div>
  </div><!-- end of footer -->
</div><!-- end of pattern item -->
</div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Code</h1>
  <div class="pattern-item">
    <pre>
      <code class="language-javascript">
        var foo = "bar", baz = 5;
      </code>
    </pre>
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->

</div><!-- end of patterns -->

</main><!-- end of main -->

<?php get_footer(); ?>
