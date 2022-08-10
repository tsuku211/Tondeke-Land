<?php if ( is_page() ) : ?>
  <footer class="footer under-footer">
<?php else : ?>
  <footer class="footer">
<?php endif; ?>
      <div class="inner">
        <div class="footer-contents">
          <div class="footer-contents__logo"><a href="<?php echo home_url(); ?>">Tondeke Land</a></div>
          <!-- /.footer-contents__logo -->
          <ul class="footer-contents__sns">
            <li class="footer-contents__item">
              <a href="https://twitter.com/radiologist_web/"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter" /></a>
            </li>
            <!-- /.footer-contents__item -->
            <li class="footer-contents__item">
              <a href="https://www.facebook.com/profile.php?id=100069878862590"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" /></a>
            </li>
            <!-- /.footer-contents__item -->
          </ul>
          <!-- /.footer-contents__sns -->
          <span class="footer-contents__url">http://www.tondekeland.com</span>
          <!-- /.footer-contents__url -->
        </div>
        <!-- /.footer-contents -->
      </div>
      <!-- /.inner -->
    </footer>
    <!-- /.footer -->

    

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <?php wp_footer(); ?>
  </body>
</html>
