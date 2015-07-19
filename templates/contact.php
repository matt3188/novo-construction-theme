<?php
/**
 * Template Name: Contact
 */
get_header();
the_post(); ?>

<?php
    $firstColumn = get_field('first_column');
    $secondColumn = get_field('second_column');
  ?>
<div class="col-sm-6">
  <h2 class="heading main-heading">Contact us</h2>
  <p><?php echo $firstColumn ?></p>
  <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
</div>
<div class="col-sm-6">
  <h2 class="heading main-heading">Get in Touch</h2>
    <p><?php echo $secondColumn ?></p>
    <nav class="navigation social-navigation" role="navigation">
      <?php
      if (has_nav_menu('social_navigation')) :
        wp_nav_menu(['theme_location' => 'social_navigation', 'container' => false, 'menu_class' => 'list horizontal-list']);
      endif;
      ?>
    </nav>
</div>