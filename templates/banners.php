<!-- Home page banners start -->

<section class="banners">
  <?php if (have_rows('banner')): ?>
    <div class="cycle-slideshow">
      <ul class="list">
        <?php while (have_rows('banner')): the_row(); ?>
          <?php $image = get_sub_field('image'); ?>
          <li class="banner" style="background-image: url('<?php echo $image['url']; ?>')"></li>
        <?php endwhile; ?>
      </ul>
    </div>
  <?php endif; ?>
</section>
