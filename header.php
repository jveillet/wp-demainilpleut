<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- wrapper -->
  <div class="wrapper">

    <div class="topbar bg-purple--light">
      <div class="topbar-logo">
       <a href="<?php echo home_url(); ?>" class="topbar-logo-url"><?php bloginfo('name'); ?></a>
     </div><!-- end of topBar logo -->
     <div class="topbar-menu">
      <button class="topbar-menu-btn topbar-menu-btn--small">Menu</button>
      <nav id="js-menu" role="navigation" class="topbar-navigation">
        <ul>
          <li><a href="<?php echo home_url();?>" class="topbar-navigation-item">Home</a></li>
          <li><a href="<?php echo home_url().'/archives'; ?>" class="topbar-navigation-item">Archives</a></li>
          <li><a href="<?php echo home_url().'/styleguide'; ?>" class="topbar-navigation-item">Styleguide</a></li>
        </ul>
      </nav><!-- end of topBarNavigation -->
    </div><!-- end of topBarMenu -->
  </div><!-- end of topBar -->
