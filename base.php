<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <!-- Home page Banners -->
    <?php if(is_front_page()): ?>
      <?php get_template_part('templates/banners'); ?>
    <?php endif; ?>

    <?php if(is_page_template( 'templates/contact.php' ) ): ?>
      <div id="map"></div>
    <?php endif; ?>

    <?php
    /** Get a custom field with multiple values and return as an array */
    $header = get_field('header_heading');
    $header_intro = get_field('header_intro');
    $checkboxes = get_field('type');
    ?>

    <!-- Header options  -->
    <?php if(is_page( 'projects' ) ): ?>
      <section class="page-header slim">
        <div class="wrap container" role="document">
          <h3 class="heading page-heading"><?php bloginfo('name'); ?> - <?php the_title(); ?></h3>
        </div>
      </section>
    <?php endif; ?>

    <?php if(is_page_template( 'templates/project-detail.php' ) ): ?>
      <section class="page-header slim">
        <div class="wrap container" role="document">
          <h3 class="heading page-heading"><?php the_title(); ?></h3>
        </div>
      </section>
    <?php endif; ?>

    <?php if( is_single() ): ?>
      <section class="page-header slim">
        <div class="wrap container" role="document">
          <h3 class="heading page-heading">Latest News</h3>
        </div>
      </section>
    <?php endif; ?>

    <?php if(($checkboxes ) === 'Standard') { ?>
      <section class="page-header standard">
        <div class="wrap container" role="document">
          <h1 class="heading main-heading"><?php echo $header; ?></h1>
          <p><?php echo $header_intro; ?></p>
        </div>
      </section>
    <?php } else if(($checkboxes ) === 'Fancy') { ?>
      <section class="page-header fancy">
        <div class="wrap container" role="document">
          <h1 class="heading main-heading"><?php echo $header; ?></h1>
          <p><?php echo $header_intro; ?></p>
        </div>
      </section>
    <?php } ?>


    <div class="wrap container" role="document">
      <div class="content row">

        <main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
