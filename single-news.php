<?php get_header(); ?>

<main class="single-project-main">
    <!-- page indicator component -->
    <?php get_template_part('template-parts/content', 'page-indicator') ?>
    <!----------------------->
      <div class="container">

<!-- section programs -->

<section class="single-project-section">
<div class="container">
<div class="programs-page__wrapper d-grid">
  <article class="programs__program-article article-program">
    <div class="article-program__banner">
<?php
  if(get_field('banner-image')){ ?>
    <img src="<?php echo get_field('banner-image')['sizes']['pageBanner']; ?>" alt="image banner"
        class="banner__img">
        <?php } else{
                      ?> 
                      <img src="<?php echo get_theme_file_uri('/assets/images/slider-img-1.jpg') ?>" alt="social entrepreneurship">
                       <?php
            }?>
    </div>
    <span class="meta-info d-flex">
                      <span class="meta-info__date d-flex"
                        ><img
                          src="<?php echo get_theme_file_uri('assets/icons/date-icon.svg') ?>"
                          alt="datetime icon"
                          aria-hidden="true"
                        />
                        <p><?php the_time('F j, Y') ?></p></span
                      >
                      <span class="meta-info__category"><?php echo get_field('category_news') ?></span>
                    </span>
    <div class="article-card__body" style="padding-bottom: 7rem;">
      <h2 class="h2--heading article-program__heading">
        <?php the_title() ?>
      </h2>
      <p class="article-card__text">
          <?php the_content() ?>
      </p>
    </div>
  </article>
  </div>
</div>
</div>
</section>

<!-------------------->

      </div>

<?php get_footer(); ?>
