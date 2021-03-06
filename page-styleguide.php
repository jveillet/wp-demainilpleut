<?php
/*
Template Name: Styleguide
*/
get_header(); ?>

<main id="content" role="main" class="main-container">

  <?php the_post(); ?>

  <h1><?php the_title(); ?></h1>

  <div class="patterns">

    <div class="pattern">
      <h1 class="pattern-title">Colors</h1>
      <div class="pattern-item">
        <ul class="colors">
          <li class="color" style="background: #0a0000;">
            <div class="color-text white">#0a0000</div>
          </li>
          <li class="color" style="background: #392d65;">
            <div class="color-text white">#392d65</div>
          </li>
          <li class="color" style="background: #706694;">
            <div class="color-text white">#706694</div>
          </li>
          <li class="color" style="background: #938cae;">
            <div class="color-text white">#938cae</div>
          </li>
          <li class="color" style="background: #c2bed1;">
            <div class="color-text">#c2bed1</div>
          </li>
          <li class="color" style="background: #8ca755;">
            <div class="color-text">#8ca755</div>
          </li>
          <li class="color" style="background: #edf5db;">
            <div class="color-text">#edf5db</div>
          </li>
          <li class="color bg-magenta">
            <div class="color-text white">#ec4882</div>
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
      <h1 class="pattern-title">Tables of content</h1>
      <div class="pattern-item">
        <ul class="list-unordered">
          <li><a class="blog-link" href="#">Link 1</a></li>
          <li><a class="blog-link" href="#">Link 2</a></li>
          <li><a class="blog-link" href="#">Link 3</a></li>
          <li><a class="blog-link" href="#">Link 4</a></li>
        </ul>
      </div>
    </div><!-- end of pattern item -->

    <div class="pattern">
      <h1 class="pattern-title">TopBar</h1>
      <div class="pattern-item">
        <div  class="topbar bg-purple--light">
          <div class="topbar-logo">
            <a href="<?php echo home_url(); ?>" class="topbar-logo-url">Foo bar</a>
          </div><!-- end of topBar logo -->
        <div class="topbar-menu">
          <button class="topbar-menu-btn topbar-menu-btn--small">Menu</button>
            <nav id="js-menu" role="navigation" class="topbar-navigation">
              <ul>
                <li><a href="#" class="topbar-navigation-item">Link 1</a></li>
                <li><a href="#" class="topbar-navigation-item">Link 2</a></li>
                <li><a href="#" class="topbar-navigation-item">Link 3</a></li>
                <li><a href="#" class="topbar-navigation-item">Link 4</a></li>
              </ul>
            </nav><!-- end of topBarNavigation -->
          </div><!-- end of topBarMenu -->
        </div><!-- end of topBar -->
      </div><!-- end of pattern item -->
    </div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Blog post summary</h1>
  <div class="pattern-item">
    <article id="post-1" class="article">
      <h2><a href="#" title="Lorem ipsum dolor sit amet." class="article-title">Lorem ipsum dolor sit amet.</a></h2>
      <span class="article-author"><a class="blog-link" href="#">John Appleseed</a></span>
      <span class="article-pubdate">&mdash;&nbsp;<time datetime="2014-02-10T12:10:48-05:00">February 10, 2014</time></span>
      <div class="article-summary"></div>
      <p>Donec nec leo fringilla, pulvinar eros sit amet, scelerisque enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec fringilla a quam sit amet iaculis. Nullam a nisl sit amet arcu posuere iaculis non a tortor. Fusce non nulla arcu...</p>
      <div><a class="btn bg-magenta white" href="#">Read more...</a></div>
    </article><!-- end of article -->
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Blog post</h1>
  <div class="pattern-item">
    <h1 class="article-title">Lorem ipsum dolor sit amet.</h1>
    <article id="post-1"class="article">
      <span class="article-author"><a class="blog-link" href="#">John Appleseed</a></span>
      <span class="article-pubdate">&mdash;&nbsp;<time datetime="2014-02-10T12:10:48-05:00">February 10, 2014</time></span>
      <div class="article-summary">
        <span class="article-readingTime">15 min read</span>
      </div>
      <p>Donec nec leo fringilla, pulvinar eros sit amet, scelerisque enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec fringilla a quam sit amet iaculis. Nullam a nisl sit amet arcu posuere iaculis non a tortor. Fusce non nulla arcu. Vivamus pellentesque nulla sem, id faucibus magna aliquet eget. Ut elit turpis, tincidunt quis ligula sit amet, lobortis placerat odio. Cras a sapien aliquet, ultricies sem ornare, varius felis.</p>
      <p>Duis rhoncus bibendum ultricies. Donec vestibulum ornare felis sit amet tincidunt. Suspendisse potenti. Donec sit amet dolor diam. Fusce luctus fermentum tellus non consectetur. Curabitur nec tellus odio. Etiam vitae nibh molestie, semper ante ac, interdum est. Nullam leo turpis, vulputate sed massa quis, elementum euismod nisi. Sed quis tellus quis velit vehicula consectetur non at nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse suscipit placerat turpis quis lobortis. Mauris nisi orci, faucibus a malesuada at, auctor vitae nulla. Nulla ac erat a tortor vulputate gravida. Quisque fringilla eu purus sit amet pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
      <p>Vivamus condimentum elit eu libero dapibus bibendum. Sed commodo, metus et pellentesque mattis, nisl elit laoreet mi, nec scelerisque arcu neque id tortor. Cras vehicula nulla quis hendrerit mattis. Nullam laoreet dignissim quam vitae faucibus. Pellentesque dignissim sit amet odio ac tempus. Integer quis faucibus ipsum. Aliquam bibendum metus eu sagittis aliquet. Aenean sollicitudin euismod dolor vel euismod. Nullam blandit lacinia venenatis.</p>
      <span class="article-categories">Published in <a href="#" rel="tag">Uncategorized</a></span>
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
          <p><span class="about-author-name"><a href="#">Reno Raines</a></span><br><small>He was a cop, and good at his job. But he committed the ultimate sin—and testified against other cops gone bad. Cops that tried to kill him, but got the woman he loved instead. Framed for murder, now he prowls the badlands...an outlaw hunting outlaws...a bounty hunter...a RENEGADE.</small></p>
        </div><!-- end of author bio -->
      </div><!-- end of about author -->
    </div><!-- end of about section -->
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Images</h1>
  <div class="pattern-item">
    <div class="resp-images">
      <img src="http://placehold.it/1920x600/ec4882/ffffff?text=Placeholder%20image" alt="placeholder" class="aligncenter size-full wp-image-34" style="width: 100%;"/>
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
    <div class="footer bg-green--lightgreen">
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

<div class="pattern">
  <h1 class="pattern-title">Alerts</h1>
  <div class="pattern-item">
    <div>
      <h2>Info</h2>
      <div class="alert alert--info">
        <strong>Hello there!</strong> I'm a simple info panel.
      </div>
    </div>
    <div>
      <h2>Warning</h2>
      <div class="alert alert--warning">
        <strong>Be careful!!</strong> This advice needs your attention.
      </div>
    </div>
    <div>
      <h2>Danger</h2>
      <div class="alert alert--danger">
        <strong>Stop righ there!!!</strong> If you don't look this you're probably unleashing some kind of kraken.
      </div>
    </div>
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->

<div class="pattern">
  <h1 class="pattern-title">Buttons</h1>
  <div class="pattern-item">
    <h2>Normal</h2>
    <div class="inline">
      <button class="btn bg-purple--light black" name="Normal button" type="button">Button</button>
      <button class="btn bg-purple--dark white" name="Normal button" type="button">Button</button>
      <button class="btn bg-green white" name="Normal button" type="button">Button</button>
      <button class="btn bg-magenta white" name="Normal button" type="button">Button</button>
    </div>
  </div><!-- end of pattern item -->
  <div class="pattern-item">
    <h2>Small</h2>
    <div class="inline">
      <button class="btn btn--small bg-purple--light black" name="Small button" type="button">Button</button>
      <button class="btn btn--small bg-purple--dark white" name="Small button" type="button">Button</button>
      <button class="btn btn--small bg-green white" name="Small button" type="button">Button</button>
      <button class="btn btn--small bg-magenta white" name="Small button" type="button">Button</button>
    </div>
  </div><!-- end of pattern item -->
</div><!-- end of pattern -->

</div><!-- end of patterns -->

</main><!-- end of main -->

<?php get_footer(); ?>
