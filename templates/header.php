<header class="header">
  <div class="container">
    <div class="logo-container">
      <a class="logo main-logo" href="<?= esc_url(home_url('/')); ?>" alt="<?php bloginfo('name'); ?>"></a>
    </div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
