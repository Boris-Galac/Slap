<?php get_header(); ?>

<main class="news-main">
      <!-- page indicator componentt -->
         <?php get_template_part('template-parts/content', 'page-indicator') ?>
      <!----------------------->
      <!-- news section -->
      <section class="news-section p-2">
        <div class="container d-grid">
          <?php
          $args = array(
            'post_type'=>'news',
            'posts_per_page'=>-1
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()){
            while($the_query->have_posts()){
                $the_query->the_post();
                get_template_part('template-parts/content', 'news-card');
            }
            wp_reset_postdata();
          }
            
          ?>
        </div>
      </section>
    </main>

<?php get_footer(); ?>
