<!DOCTYPE html>
<html <?php language_attributes();  ?>>

<head>
  <title><?php bloginfo('name'); ?><?php wp_title('-', true, 'left'); ?></title> 
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <!-- Primary Meta Tags -->
<meta name="title" content="Slap – Udruga za kreativni razvoj Slap">
<meta name="description" content="Ovo je website udruge 'Slap', udruga za kreativni razvoj koja zagovara i promiče razvoj društvenog poduzetništva.">
<meta name="keywords" content="poduzetništvo, društvo, razvoj, slap, udruga, socijalno podruzetnistvo">
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://slap.hr/">
<meta property="og:title" content="Slap – Udruga za kreativni razvoj Slap">
<meta property="og:description" content="Ovo je website udruge 'Slap', udruga za kreativni razvoj koja zagovara i promiče razvoj društvenog poduzetništva.">
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://slap.hr/">
<meta property="twitter:title" content="Slap – Udruga za kreativni razvoj Slap">
<meta property="twitter:description" content="Ovo je website udruge 'Slap', udruga za kreativni razvoj koja zagovara i promiče razvoj društvenog poduzetništva.">
<meta property="twitter:image" content="">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header -->
    <header class="header">
      <div class="header__contact d-flex">
        <div class="header__socials d-flex">
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/assets/icons/facebook-icon.svg') ?>" alt="facebook" />
          </a>
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/assets/icons/youtube-icon.svg') ?>" alt="youtube" />
          </a>
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/assets/icons/mail-icon.svg') ?>" alt="mail" />
          </a>
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/assets/icons/google-icon.svg') ?>" alt="google-plus" />
          </a>
        </div>
        <figure class="header__logo">
          <a href="<?php echo site_url() ?>">
            <img src="<?php echo get_theme_file_uri('/assets/images/slap-logo.png') ?>" alt="udruga slap" />
          </a>
        </figure>
        <div class="header__contacts d-flex">
          <div class="header__tel">
            <a href="tel:+38531213556" class="d-flex">
              <img
                src="<?php echo get_theme_file_uri('/assets/icons/tel.svg') ?>"
                alt="telephone"
                aria-label="telephone"
              />
              +38531213556
            </a>
          </div>
        </div>
      </div>
      <button
        class="nav__ham"
        aria-expanded="false"
        aria-controls="primary-navigation"
        aria-label="ham menu"
      >
        <div aria-hidden="true" class="nav__ham-line"></div>
        <div aria-hidden="true" class="nav__ham-line"></div>
        <div aria-hidden="true" class="nav__ham-line"></div>
      </button>
      <nav class="nav">
        <button
          class="search-btn"
          aria-label="search bar"
          aria-controls="searchbar"
          aria-expanded="false"
        >
          <img
            aria-hidden="true"
            src="<?php echo get_theme_file_uri('/assets/icons/search.svg') ?>"
            alt="search icon"
          />
        </button>
        <figure class="nav__logo">
         <a aria-label="Logo page" href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/assets/images/slap-logo.png') ?>" alt="udruga slap" /></a> 
        </figure>
        <ul
          class="nav__list d-flex"
          data-visible="false"
          id="primary-navigation"
        >
          <li class="nav__item"><a class="nav__link" href="<?php echo site_url() ?>">naslovna</a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo site_url('/slap') ?>">slap</a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo site_url('/projekti') ?>">projekti</a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo site_url('/tim') ?>">tim</a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo site_url('/dokumenti') ?>">dokumenti</a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo site_url('/news') ?>">news</a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo site_url('/kontakt') ?>">kontakt</a></li>
        </ul>
      </nav>
      <div class="indicator-scroll-line" aria-hidden="true"></div>
    </header>