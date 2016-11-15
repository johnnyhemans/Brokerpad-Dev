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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/jasny-bootstrap.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>

  <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
    <a class="navmenu-brand" href="#">Menu</a>
      <?php
                 wp_nav_menu( array(
                     'menu'              => 'primary',
                     'theme_location'    => 'primary',
                     'depth'             => 2,
                     'container'         => 'div',
                     'container_class'   => 'collapse navbar-collapse',
                     'container_id'      => 'navmenu-primary',
                     'menu_class'        => 'nav navmenu-nav',
                     'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                     'walker'            => new wp_bootstrap_navwalker())
                 );
             ?>

     <?php
                wp_nav_menu( array(
                    'menu'              => 'secondary',
                    'theme_location'    => 'secondary',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navmenu-secondary',
                    'menu_class'        => 'nav navmenu-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
  </div>

  <div class="navbar navbar-default navbar-fixed-top">
    <?php
      //Fix menu overlap with WP admin bar
      if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';
    ?>
    <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
  </div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="jumbotron">
  <div class="container">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</section>
