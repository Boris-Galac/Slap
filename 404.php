<?php get_header(); ?>

<main class="error-main">
      <!-- page indicator component -->
         <?php get_template_part('template-parts/content', 'page-indicator') ?>
      <!----------------------->
      <!-- news section -->
      <section class="error-section p-2">
        <div class="container d-grid grid-center">
            <div>
                <h2 class="error-page-heading" aria-description="eror page, page not found">404</h2>
                <h3 class="error-page-subheading mb-2" aria-description="eror page, page not found">page not found</h3>
                <button class="secondary-btn" onclick="goBack()">Go Back</button>
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
            </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>
