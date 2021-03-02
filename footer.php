<footer id="footer" class="footer">
  <div class="footer-inner">
    <div class="footer-nav-wrap">
      <?php wp_nav_menu( array(
            'theme_location' => 'footer-nav',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'container_id' => 'footer-nav',
            'fallback_cb' => ''
            ) ); ?>
    </div>

    <div class="copyright">
      <p>© 2020 <?php bloginfo( 'name' ); ?></p>
    </div>
  </div><!--end footer-inner-->
</footer>
<?php wp_footer(); ?><!--システム・プラグイン用-->

<?php if ( is_home() ): ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php endif; ?>

</body>
</html>
