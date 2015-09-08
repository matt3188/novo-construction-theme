<?php
/**
 * Template Name: Project listing
 */
get_header();
the_post(); ?>
<?php
  $heading = get_field('heading');
  $intro = get_field('intro');
?>

<?php if($heading) { ?>
  <h4 class="heading sub-heading"><?php echo $heading; ?></h4>
<?php }; ?>
<?php if($intro) { ?>
  <?php echo $intro; ?>
<?php }; ?>


<nav class="navigation isotope-navigation" role="navigation">
  <ul class="list horizontal-list category-list">
    <button class="category is-active" data-filter="*">Show all</button>
    <?php

      $categories = array();
      while(have_rows('project')): the_row();
        $categories[] = get_sub_field('project_category');
      endwhile;

      // This will strip out any values that are identical.
      $categories = array_unique($categories);

      // Run through your unique array of categories
      foreach ( $categories as $category ) {
        $remove = array(" ", ",","/", ".", ":", "-", "–", "—", "!", "?", ";"); ?>
        <button class="category" data-filter=".<?php echo $category ?>"><?php echo ucfirst(str_replace($remove, " ", $category)); ?></button>
      <?php } ?>
  </ul>
</nav>

<div class="row">
  <div class="isotope">
    <ul class="list horizontal-list">
      <?php if (have_rows('project')): ?>
        <?php while (have_rows('project')): the_row(); ?>
        <?php
          $heading = get_sub_field('project_title');
          $description = get_sub_field('project_description');
          $thumbnail = get_sub_field('project_thumbnail');
          $category = get_sub_field('project_category');
          $link = get_sub_field('project_link');
        ?>
        <li class="col-sm-4 isotope-item project-block <?php echo $category; ?>">
          <div class="project">
            <div class="project-content">
              <a href="<?php echo $link; ?>" class="project-thumb" style="background-image: url('<?php echo $thumbnail['url']; ?>');">
                <div class="thumb-overlay">
                  <i class="fa fa-plus"></i>
                </div>
              </a>
              <h4 class="heading project-heading"><?php echo $heading; ?></h4>
              <?php echo $description; ?>
              <a href="<?php echo $link; ?>" class="btn btn-find-more visible-xs">View Project</a>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
