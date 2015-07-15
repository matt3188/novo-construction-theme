<?php
/**
 * Template Name: Contact
 */
get_header();
the_post(); ?>

<div class="col-sm-6">
  <h2 class="heading main-heading">Contact us</h2>
  <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
</div>
<div class="col-sm-6">
  <h2 class="heading main-heading">Get in Touch</h2>
</div>