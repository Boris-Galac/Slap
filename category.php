<?php get_header() ?>


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
                    get_template_part('template-parts/content', 'project-card');
                    }

                    ?>
                    <div class="pagination">            
                        <div class="pagination__wrapper">
                            <?php echo paginate_links(); ?>
                        </div>
                    </div>
                    <?php
                    }else{
                        echo "<h2 style='text-align: center; margin-inline: auto;'>Kategorija je prazna</h2>";
                    }
                    wp_reset_postdata();
                    ?>
          </div>
        </div>
        </div>
      </section>
      <!-------------------->
    </main>


<?php get_footer() ?>