<footer id="footer" class="content-info" role="contentinfo">
  <div class="container widget-container">
    <div class="row">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
  <div class="footer-bottom dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>&copy; <?php bloginfo('name'); ?> All rights reserved.</p>
        </div>
        <div class="col-sm-6">
          <nav class="navigation social-navigation" role="navigation">
            <?php
            if (has_nav_menu('social_navigation')) :
              wp_nav_menu(['theme_location' => 'social_navigation', 'container' => false, 'menu_class' => 'list horizontal-list']);
            endif;
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</footer>
