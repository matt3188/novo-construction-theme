<?php
/**
 * Template Name: Service
 */
get_header();
the_post(); ?>

<?php if (have_rows('service')): ?>
  <?php while (have_rows('service')): the_row(); ?>
    <?php
      $heading = get_sub_field('service_heading');
      $description = get_sub_field('service_description');
      $link = get_sub_field('service_link');
    ?>
    <div class="service-block">
      <?php echo $heading; ?>
      <?php echo $description; ?>
      <a href="<?php echo $link; ?>">Find out more</a>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
