<?php get_header(); ?>

<main class="main projects-main">
<?php  get_template_part('template-parts/content', 'page-indicator') ?>
            <!-- section projects -->
            <section class="projects-section py-2">
              <div class="container">
              <div class="projects-page__wrapper d-grid">
                  <?php
                  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $the_query = new WP_Query(array(
                        'post_type'=>'post',
                        'posts_per_page'=> 4,
                        'paged' => $paged
                    ));
                    if(have_posts()){
                    while( $the_query ->have_posts()){
                        $the_query ->the_post();
                    get_template_part('template-parts/content', 'project-card');

                    }
                    $pages = array(
                        'total'=>$the_query->max_num_pages
                    );
                    ?>
                    <div class="pagination">            
                        <div class="pagination__wrapper">
                            <?php echo paginate_links($pages); ?>
                        </div>
                    </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
          </div>
        </div>
        </div>
      </section>
      <!-------------------->
    </main>

<?php get_footer(); ?>
