<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon"  type="image/x-icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="dns-prefetch" href="//themes.googleusercontent.com">
	  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link rel="dns-prefetch" href="//www.google-analytics.com">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- wrapper -->
  <div class="wrapper">

    <div id="topBar" class="topBar bg-cafe">
        <div class="topBar-logo">
           <a href="<?php echo home_url(); ?>" class="topBar-logo-url"><?php bloginfo('name'); ?></a>
        </div><!-- end of topBar logo -->
        <div class="topBar-menu">
          <button class="topBar-menuBtn topBar-menuBtn--small">Menu</button>
          <nav id="js-menu" role="navigation" class="topBar-navigation">
            <ul>
              <li><a href="<?php echo home_url();?>" class="topBar-navigation-item">Home</a></li>
              <li><a href="<?php echo home_url().'/about'; ?>" class="topBar-navigation-item">About</a></li>
              <li><a href="<?php echo home_url().'/archives'; ?>" class="topBar-navigation-item">Archives</a></li>
              <li><a href="<?php echo home_url().'/contact'; ?>" class="topBar-navigation-item">Contact</a></li>
            </ul>
          </nav><!-- end of topBarNavigation -->
        </div><!-- end of topBarMenu -->
      </div><!-- end of topBar -->
    