
<section class="page-indicator-section">
        <div class="breadcrumb">
          <div class="breadcrumb__wrapper d-flex">
            <a href="<?php echo get_home_url() ?>"><span
              class="breadcrumb__page bread__first-page"
              aria-label="home page"
              >naslovna</span
            ></a><img
              src="<?php echo get_theme_file_uri('/assets/icons/breadcrumb-right-arrow.svg') ?>"
              aria-hidden="true"
            />
            <span
              class="breadcrumb__page bread__second-page"
              aria-label="descend page"
              ><?php output_title(); ?></span>
          </div>
        </div>
        <div class="page-indicator" aria-roledescription="page-indicator">
          <h1 class="page-indicator__heading"> 
            <?php output_title(); ?>  
        </h1>
        </div>
      </section>
