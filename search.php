<?php get_header(); ?>

<main class="main projects-main">

<?php  get_template_part('template-parts/content', 'page-indicator') ?>
            <!-- section projects -->
            <section class="projects-section py-2">
              <div class="container">
              <div class="projects-page__wrapper d-grid">
                  <?php

                    if(have_posts()){
                    while( have_posts()){
                        the_post();
                    get_template_part('template-parts/content', 'news-card');
                    }
                    ?>
                    <?php
                    }else{

                        ?>
                        <div>
                          <div class="results-search-box">
                            <h2 class="h2--heading">
                              Potražite neki drugi rezultat...
                            </h2>
                            <?php get_search_form() ?>

                          </div>
                            <h2 class="no-results my-3 text-center">Nema traženih rezultata...</h2>
                        </div>
                        <?php
                    }
                    ?>
          </div>
        </div>
        </div>
      </section>
      <!-------------------->
    </main>

<?php get_footer(); ?>
