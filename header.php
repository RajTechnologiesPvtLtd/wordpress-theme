<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="bg-red-300">
    <nav class="max-w-4xl mx-auto mb-5 px-4">
      <h1 class="text-3xl py-10">
        <a href="<?php echo get_home_url(); ?>" class="hover:text-blue-500"><?php echo get_bloginfo( 'name' ); ?></a>
      </h1>
      <!-- Brand and toggle get grouped for better mobile display -->
      <?php
        wp_nav_menu(array(
            'theme_location'  => 'header',
            'depth'              => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            //   'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            //   'walker'          => new WP_Bootstrap_Navwalker(),
        )); ?>
    </nav>
  </header>