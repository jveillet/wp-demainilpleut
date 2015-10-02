<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,600,300" rel="stylesheet" type="text/css"> 
	<link href='https://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- wrapper -->
  <div class="wrapper">

    <div id="topBar" class="topBar bg-purple">
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
    