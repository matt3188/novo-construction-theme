<!-- Home page start -->

<!-- Banners in base.php -->

<section class="page-header">
  <?php
    $header = get_field('header_heading');
    $header_intro = get_field('header_intro');
  ?>
  <h1 class="heading main-heading"><?php echo $header; ?></h1>
  <p><?php echo $header_intro; ?></p>
</section>
