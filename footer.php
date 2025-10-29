<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">

    <!-- Левая колонка -->
    <div class="footer-left">
      <p>We believe in making gardening accessible and enjoyable for everyone.
         From fresh fragrant plants to organic fertilisers, our shop helps you create
         beautiful and sustainable green spaces.</p>
    </div>

    <!-- Середина -->
    <div class="footer-center">
      <?php
      wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'menu_class' => '',
          'container' => false,
          'items_wrap' => '<div>%3$s</div>'
      ));
      ?>
    </div>

    <!-- Правая колонка -->
    <div class="footer-right">
      <p>123 Garden Ave, Perth, Australia</p>
      <p>Email: info@GeorgesGreenGarden.com</p>
      <p>Phone: +61 400 123 456</p>
    </div>
  </div>

  <!-- Нижняя часть -->
  <div class="footer-bottom">
    © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
