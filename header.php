<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="<?php bloginfo('description'); ?>">

<title>
  <?php bloginfo('name'); ?> |
  <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
</title>

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <?php
    //Fix menu overlap with WP admin bar
    if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';
  ?>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
       'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
  </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="jumbotron">
  <div class="container">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</section>
