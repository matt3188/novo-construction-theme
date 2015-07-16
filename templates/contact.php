<?php
/**
 * Template Name: Contact
 */
get_header();
the_post(); ?>

<!-- <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2462.7664667567215!2d0.025587599999991106!3d51.8834753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d882ed69c2a715%3A0x745878b87e3a2ef5!2sNovo+Construction!5e0!3m2!1sen!2suk!4v1437080717377" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->

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