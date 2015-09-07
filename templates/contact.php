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
  <h2 class="heading sub-heading">Contact us</h2>
  <?php echo $firstColumn ?>
</div>
<div class="col-sm-6">
  <h2 class="heading sub-heading">Get in Touch</h2>
  <?php echo $secondColumn ?>
  <?php echo do_shortcode('[contact-form-7 id="332" title="Contact form"]'); ?>
</div>
