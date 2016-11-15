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
  <link href="<?php bloginfo('template_url'); ?>/css/jasny-bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
    .jumbotron {
      background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
    }
  </style>

  </head>

  <body>
      <!--- Navigation --->
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
          <h1><?php echo get_theme_mod('showcase_heading', 'Brokerpad'); ?></h1>
          <p id="showcase-text"><?php echo get_theme_mod('showcase_text', 'Broking Made Simple')?></p>
          <p><a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod('btn_url', 'http://test.com') ?>" role="button"><?php echo get_theme_mod('btn_text', 'Try Brokerpad For Free') ?></a></p>
          <p id="showcase-small-text"><?php echo get_theme_mod('showcase_small_text', 'No Credit Card Required')?></p>
        </div>
      </section>

      <section class="boxes">
        <div class="container">
          <div class="row">

            <div class="col-md-4">
                <?php if(is_active_sidebar('box1')) : ?>
                  <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if(is_active_sidebar('box2')) : ?>
                  <?php dynamic_sidebar('box2'); ?>
                <?php endif; ?>
           </div>

            <div class="col-md-4">
                <?php if(is_active_sidebar('box3')) : ?>
                  <?php dynamic_sidebar('box3'); ?>
                <?php endif; ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
                <?php if(is_active_sidebar('box4')) : ?>
                  <?php dynamic_sidebar('box4'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if(is_active_sidebar('box5')) : ?>
                  <?php dynamic_sidebar('box5'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if(is_active_sidebar('box6')) : ?>
                  <?php dynamic_sidebar('box6'); ?>
                <?php endif; ?>
            </div>

          </div>
        </div>
      </section>

      <section class="testimonials">
        <div class="container">
          <h1>Testimonials</h1>
          <h2>What people are saying about Brokepad</h2>
          <div class="row">
            <div class="col-md-4">
                <?php if(is_active_sidebar('testimonial1')) : ?>
                  <?php dynamic_sidebar('testimonial1'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if(is_active_sidebar('testimonial2')) : ?>
                  <?php dynamic_sidebar('testimonial2'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if(is_active_sidebar('testimonial3')) : ?>
                  <?php dynamic_sidebar('testimonial3'); ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <p>&copy; <?php echo Date('Y'); ?> <php? bloginfo('name'); ?> </p>
      </footer>
      <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jasny-bootstrap.js"></script>
  </body>
</html>
