<footer id="footer" class="content-info" role="contentinfo">
  <div class="widget-container">
    <div class="container">
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
          <nav class="navigation social-navigation" role="navigation">
            <?php
            if (has_nav_menu('social_navigation')) :
              wp_nav_menu(['theme_location' => 'social_navigation', 'container' => false, 'menu_class' => 'list horizontal-list']);
            endif;
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<!-- TODO - look for more elegant way to include this -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63280687-1', 'auto');
  ga('send', 'pageview');

</script>