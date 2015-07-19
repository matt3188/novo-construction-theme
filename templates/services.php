<?php
/**
 * Template Name: Service
 */
get_header();
the_post(); ?>

<div class="masonry">
<?php if (have_rows('service')): ?>
  <?php while (have_rows('service')): the_row(); ?>
    <?php
      $heading = get_sub_field('service_heading');
      $description = get_sub_field('service_description');
      $link = get_sub_field('service_link');
    ?>
    <div class="col-sm-4 masonry-item">
      <div class="service service-block">
        <h2 class="heading sub-heading"><?php echo $heading; ?></h2>
        <div class="service-content">
          <?php echo $description; ?>
          <a class="btn btn-find-more" href="<?php echo $link; ?>">Find out more</a>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
</div>