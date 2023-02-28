<!--sidebar-->
<?php get_sidebar() ?>
      <!------------------->
      
      <!-- search bar -->
      <div class="search__overlay" aria-hidden="true" data-visible="false">
        <button aria-label="close search" class="search__close">
          <div aria-hidden="true" class="line"></div>
          <div aria-hidden="true" class="line"></div>
        </button>
        <?php get_search_form(); ?>
      </div>
      <!------------------->
<!-- overlay -->
<div class="overlay" data-visible="false" aria-hidden="true"></div>
<!------------------->
<!-- scroll to top -->
<button class="scroll-to-top" data-visible="false">
<img src="<?php echo get_theme_file_uri('assets/icons/right-arrow.svg') ?>" aria-hidden="true">
</button>
<!------------------->
<!-- footer -->
<footer class="footer">
    <div class="footer__wrapper">
      <div class="footer__col">
        <h2 class="footer__heading">gdje smo</h2>
        <ul class="footer__list d-flex">
          <li class="footer__item d-flex"><img src="<?php echo get_theme_file_uri('assets/icons/location.svg') ?>" aria-hidden="true">Otokara Keršovanija 31, 31 000 Osijek</li>
          <li class="footer__item d-flex"><img src="<?php echo get_theme_file_uri('assets/icons/tel.svg') ?>" aria-hidden="true">+ 385 (31) 213 556</li>
          <li class="footer__item d-flex"><img src="<?php echo get_theme_file_uri('assets/icons/mail-icon.svg') ?>" aria-hidden="true">udruga.slap@gmail.com</li>
          <li class="footer__item d-flex"><img src="<?php echo get_theme_file_uri('assets/icons/globe.svg') ?>" aria-hidden="true"><a href="#">www.panonatours.com</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h2 class="footer__heading">info</h2>
        <ul class="footer__list d-flex">
            <li class="footer__item d-flex"><img src="<?php echo get_theme_file_uri('assets/icons/id-card.svg') ?>" aria-hidden="true">OIB: 35348022848</li>
            <li class="footer__item d-flex"><img src="<?php echo get_theme_file_uri('assets/icons/bank-card.svg') ?>" aria-hidden="true">IBAN HR1723600001101866908</li>
          <li class="footer__item d-flex"><img src="<?php echo get_theme_file_uri('assets/icons/clock.svg') ?>" aria-hidden="true">Pon - Pet 08:00 - 16:00</li>
        </ul>
      </div>
      <div class="footer__col">
        <h2 class="footer__heading">linkovi</h2>
        <nav class="footer__nav" aria-label="footer navigation">
          <ul class="footer__list d-flex">
            <li class="footer__item d-flex"><a href="<?php echo site_url() ?>">naslovna</a></li>
            <li class="footer__item d-flex"><a href="#">slap</a></li>
            <li class="footer__item d-flex"><a href="#">projekti</a></li>
            <li class="footer__item d-flex"><a href="#">tim</a></li>
            <li class="footer__item d-flex"><a href="#">dokumenti</a></li>
            <li class="footer__item d-flex"><a href="#">news</a></li>
          </ul>
        </nav>
      </div>
  </div>
  <div class="footer__copyright">
    <h3 class="footer__copyright-heading">Copyright &copy; <?php the_time('Y') ?> - Slap</h3>
  </div>
  </footer>
  <?php wp_footer() ?>
</body>
</html>
