<!-- Home page banners start -->

<section class="banners">
  <?php if (have_rows('banner')): ?>
    <div class="cycle-slideshow">
      <button class="hidden-xs btn controls prev"><i class="fa fa-angle-left"></i></button>
      <button class="hidden-xs btn controls next"><i class="fa fa-angle-right"></i></button>
      <div class="pager-container"></div>
      <ul class="list">
        <?php while (have_rows('banner')): the_row(); ?>
          <?php $image = get_sub_field('image'); ?>
          <li class="banner" style="background-image: url('<?php echo $image['url']; ?>')"></li>
        <?php endwhile; ?>
      </ul>
    </div>
  <?php endif; ?>
</section>
