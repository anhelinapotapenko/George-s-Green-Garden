<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- HEADER -->
<header class="bg-light border-bottom py-3">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- Logo и название -->
    <div class="d-flex align-items-center">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo4.png" alt="Georges Green Garden Logo" style="height:50px; width:auto;" class="me-2">
      <h1 class="logo text-success mb-0"><?php bloginfo('name'); ?></h1>
    </div>

    <!-- Меню -->
<nav class="navbar">
  <?php
  wp_nav_menu(array(
      'theme_location'  => 'main-menu',
      'container'       => false,
      'menu_class'      => 'nav',        // класс <ul>
      'add_li_class'    => 'nav-item',   // свой класс для <li>
      'link_class'      => 'nav-link text-dark px-3', // для ссылок
      'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
  ));
  ?>
</nav>

  </div>
</header>
