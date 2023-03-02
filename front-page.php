<?php get_header(); ?>
<main class="front-page-main">

<!-- section hero -->

<section class="section hero">
  <div class="slider">
    <div class="hero__slider d-flex">
      <figure class="hero__slider-picture current" data-text="Zašto biti kap kad možeš biti Slap">
        <img src="<?php echo get_theme_file_uri('assets/images/slider/slap-slider-1.png') ?>" alt="image" />
      </figure>
      <figure class="hero__slider-picture">
        <img src="<?php echo get_theme_file_uri('assets/images/slider/slap-slider-2.png') ?>" alt="image" />
      </figure>
    </div>
    <div class="hero__arrows d-flex">
      <button class="hero__left grid-center">
        <img src="<?php echo get_theme_file_uri('assets/icons/right-arrow.svg') ?>" alt="left arrow" />
      </button>
      <button class="hero__right grid-center">
        <img src="<?php echo get_theme_file_uri('assets/icons/left-arrow.svg') ?>" alt="right arrow" />
      </button>
    </div>
  </div>
</section>

<!-------------------->

<!-- section welcome -->

<section class="section welcome">
  <div class="container">
    <h1 class="welcome__heading h1--heading text-center">udruga za kreativni razvoj slap</h1>
    <p>
      Najveći prioritet Udruge Slap je promicanje učinkovitih inicijativa koje služe područjima koja ih najviše trebaju. Vjerujemo u hitno poduzimanje mjera kako bismo podigli svijest javnosti o nekim od najhitnijih problema s kojima se suočava današnje društvo.
    </p>
  </div>
</section>

<!-------------------->

<!-- section showcase about -->

<section class="section showcase-about d-grid container">
    <div class="row-1 d-flex">
      <h2 class="showcase__heading h2--heading text-center">o nama</h2>
      <p>
        Udruga za kreativni razvoj Slap iz Osijeka organizacija je koja se bavi razvojnim projektima
        kroz koje potiče socijalno zapošljavanje, društveno odgovorno poslovanje, međusektorsku
        suradnju te kroz svoj trening centar radi na održivosti organizacija civilnog društva.
      </p>
      <a href="<?php echo site_url('/slap') ?>" class="primary-btn">više o nama</a>
    </div>
    <div class="row-2">
      <img
        src="<?php echo get_theme_file_uri('assets/images/slider-img-3.jpg') ?>"
        alt="image children"
      />
    </div>
</section>

<!------------------------>

<div class="separator-slap" aria-hidden="true">
  <img src="<?php echo get_theme_file_uri('assets/images/separator-slap-1.svg') ?>">
</div>

<!-- section programs -->

<section class="section programs">
  <div class="container">
  <h2 class="programs__heading h2--heading px-2">Programs</h2>
    <div class="programs__wrapper d-flex">
      <figure class="program__box hidden">
        <img class="program__box-img" src="<?php echo get_theme_file_uri('assets/images/programi/turistica-image.jpg') ?>" alt="program" />
        <div class="program__box-title flex-center-col">
          <a href="<?php echo site_url('category/turistica') ?>" class="program-link">
            <h2 class="program__heading">turistica</h2>
          </a>
            <p class="program__subheading">program</p>
          </div>
        </figure>
      <figure class="program__box hidden">
        <img class="program__box-img" src="<?php echo get_theme_file_uri('assets/images/programi/pomak-image.jpg') ?>" alt="program" />
        <div class="program__box-title flex-center-col">
        <a href="<?php echo site_url('category/pomak') ?>" class="program-link">
          <h2 class="program__heading">pomak</h2>
        </a>
          <p class="program__subheading">program</p>
        </div>
      </figure>
      <figure class="program__box hidden">
        <img class="program__box-img" src="<?php echo get_theme_file_uri('assets/images/programi/rural-image.jpg') ?>" alt="program" />
        <div class="program__box-title flex-center-col">
        <a href="<?php echo site_url('category/rural') ?>" class="program-link">
          <h2 class="program__heading">
            rural
          </h2>
        </a>
          <p class="program__subheading">program</p>
        </div>
      </figure>
      <figure class="program__box hidden">
        <img class="program__box-img" src="<?php echo get_theme_file_uri('assets/images/programi/consult-image.jpg') ?>" alt="program" />
        <div class="program__box-title flex-center-col">
        <a href="<?php echo site_url('category/consult') ?>" class="program-link">
          <h2 class="program__heading">
            consult
          </h2>
        </a>
          <p class="program__subheading">program</p>
        </div>
      </figure>
    </div>
</div>
</div>

</section>

<!-------------------->

<!-- section promo-video -->

<section class="section promo-video">
    <div class="container">
      <div class="promo-video__wrapper">
        <h2 class="promo-video__heading h2--heading">
          Video
        </h2>
        <div>
          <div class="promo-video__main-video">
            <iframe id="main-video" src="https://www.youtube.com/embed/Hoz21_3nEXA" title="Priroda priča pokretima - Panona fest" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="promo-video__inner-wrapper">
            <div class="promo-video__sub-video
             d-flex">
            <div class="video">
                <iframe src="https://www.youtube.com/embed/ErKJjrtCI-k" title="Priroda priča mirisima - opg Čudesna šuma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="video">
                <iframe src="https://www.youtube.com/embed/BJJKi7Y61ug" title="Authentic Travel Expirience of Pannonia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="video">
                <iframe src="https://www.youtube.com/embed/D61Fji416a8" title="Priroda priča zvukovima - Park prirode Papuk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="video">
                <iframe src="https://www.youtube.com/embed/5gYFw_6Tyes" title="Priroda priča pokretima - Slama Land Art" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="video">
                <iframe src="https://www.youtube.com/embed/vCQ0CvKMR3o" title="Priroda priča pokretima - Vinatlon" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="video">
              <iframe src="https://www.youtube.com/embed/UC5mKQEaFXg" title="Priroda priča bojama - VukovArt" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <button class="video__left"><img src="<?php echo get_theme_file_uri('assets/icons/right-arrow.svg') ?>" alt="left"></button>
          <button class="video__right"><img src="<?php echo get_theme_file_uri('assets/icons/left-arrow.svg') ?>" alt="right"></button>
        </div>
      </div>
    </div>
</section>

<!----------------------->

<!-- Projects counter -->

<div class="projects-counter">
  <div class="projects-counter__wrapper d-grid">
    <div class="projects-counter__col d-grid">
      <figure class="projects-counter__box d-grid">
        <img src="<?php echo get_theme_file_uri('assets/images/projects.svg') ?>" alt="projects">
        <div class="projects-counter__box-body text-center">
          <span class="projects-counter__box-number" aria-label="number of projects" data-target="52">0</span>
          <span class="projects-counter__box-symbol" aria-hidden="true">+</span>
        </div>
      </figure>
      <p class="projects-counter__box-heading">Projekti</p>
    </div>
    <div class="projects-counter__col d-grid">
      <figure class="projects-counter__box d-grid">
        <img src="<?php echo get_theme_file_uri('assets/images/partnership.svg') ?>" alt="partnership">
        <div class="projects-counter__box-body text-center">
          <span class="projects-counter__box-number" aria-label="number of partnership" data-target="12">0</span>
          <span class="projects-counter__box-symbol"aria-hidden="true">+</span>
        </div>
      </figure>
      <p class="projects-counter__box-heading">Partneri</p>
    </div>
    <div class="projects-counter__col d-grid">
      <figure class="projects-counter__box d-grid">
        <img src="<?php echo get_theme_file_uri('assets/images/hand.svg') ?>" alt="revenue">
        <div class="projects-counter__box-body text-center">
          <span class="projects-counter__box-number" aria-label="amount of revenue" data-target="300000">0</span>
          <span class="projects-counter__box-symbol" aria-label="euro">€+</span>
        </div>
      </figure>
      <p class="projects-counter__box-heading">Vrijednost projekata</p>
    </div>
  </div>
</div>
<!----------------------->

  <!-- section partners-slider -->
    <section class="partners-slider">
      <div>
        <h2 class="h2--heading">Partneri</h2>
      </div>
      <div class="partners-slider__inner-wrapper">
        <ul class="partners-slider__wrapper">
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-1.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-2.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-3.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-4.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-5.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-6.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-7.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-8.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-9.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-10.png') ?>" />
          </li>
        </ul>
        <ul class="partners-slider__wrapper">
        <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-1.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-2.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-3.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-4.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-5.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-6.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-7.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-8.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-9.png') ?>" />
          </li>
          <li class="partners__slider__slide">
            <img src="<?php echo get_theme_file_uri('assets/images/partneri/partner-img-10.png') ?>" />
          </li>
        </ul>
      </div>
    </section>
  <!-------------------->
</main>

<?php get_footer() ?>