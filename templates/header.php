<header class="header">
  <div class="container">
    <div class="logo-container">
      <a class="logo main-logo" href="<?= esc_url(home_url('/')); ?>" alt="<?php bloginfo('name'); ?>"></a>
    </div>

    <a id="main-menu-trigger" class="menu-icon" href="">
      <span></span>
      <span></span>
      <span></span>
    </a>

    <nav class="navigation main-navigation" role="navigation">
      <ul class="list horizontal-list">
        <li><a href="" class="active">Home</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Projects</a></li>
        <li><a href="">Contact</a></li>
      </ul>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
