<footer id="footer" class="content-info" role="contentinfo">
  <div class="container widget-container">
    <div class="row">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
  <div class="footer-bottom dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>&copy; <?php bloginfo('name'); ?> All rights reserved.</p>
        </div>
        <div class="col-sm-6">
          <?php echo display_ultimate_social_icons();?>
        </div>
      </div>
    </div>
  </div>
</footer>
