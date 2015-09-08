<?php
/**
 * Template Name: Project detail
 */
get_header();
the_post();

$name = get_field('project_name');
$info = get_field('project_information');
$client = get_field('client');
$tags = get_field('project_tags');
$date = DateTime::createFromFormat('Ymd', get_field('date_completed'));
$link = get_field('url');

$data = str_replace(array("\r", "\n"), ',', $tags);
$tags = array_filter(explode(',', $data));
?>

<?php if(!$name) { ?>
  <h1 style="text-align: center;">Project Coming Soon</h1>
  <h2 style="text-align: center;">This project is under development, check back soon.</h2>
<?php } else { ?>
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
            <dd class="tag-list">
              <?php foreach($tags as $key => $tag) { ?>
                <span class="tag"><?php echo $tag ;?></span>
              <?php } ?>
            </dd>
          <?php if($date) { ?>
          <dt>Date</dt>
            <dd><?php echo $date->format('F d, Y'); ;?></dd>
          <?php }; ?>
          <dt>URL</dt>
            <dd class="last"><a href="<?php echo $link ;?>"><span><?php echo $link ;?></span></a></dd>
        </dl>
      </div>
    </div>
  </div>
<?php }; ?>