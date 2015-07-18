<?php
/**
 * Template Name: Project detail
 */
get_header();
the_post(); ?>
<?php
  $name = get_field('project_name');
  $info = get_field('project_information');
  $client = get_field('client');
  $tags = get_field('project_tags');
  $completed = get_field('date_completed');
  $link = get_field('url');
?>

<div class="project project-gallery">
  <div class="cycle-slideshow-gallery">
    <button class="btn controls prev"><i class="fa fa-angle-left"></i></button>
    <button class="btn controls next"><i class="fa fa-angle-right"></i></button>
    <ul class="list horizontal-list">
      <?php if (have_rows('gallery')): ?>
        <?php while (have_rows('gallery')): the_row(); ?>
          <?php $image = get_sub_field('image'); ?>
          <li class="project-image" style="background-image: url('<?php echo $image['url']; ?>');"></li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
<div class="project-detail">
  <h3 class="heading text-heading"><?php echo $name ;?></h3>
  <div class="row">
    <div class="col-md-8">
      <?php echo $info ;?>
    </div>
    <div class="col-md-4">
      <dl class="list vertical-list project-detail-list">
        <dt>Client</dt>
          <dd><?php echo $client ;?></dd>
        <dt>Tags</dt>
          <dd><?php echo $tags ;?></dd>
        <dt>Date</dt>
          <dd><?php echo $completed ;?></dd>
        <dt>URL</dt>
          <dd class="last"><a href="<?php echo $link ;?>"><?php echo $link ;?></a></dd>
      </dl>
    </div>
  </div>
</div>