<article class="news-card d-grid">
            <div class="news-card__image-wrapper flex-center">
                        
                        <?php if(has_post_thumbnail()){ ?>
                            <img src="<?php the_post_thumbnail_url();  ?>" alt="project image">
                            <?php }
                                ?>
            </div>
            <div class="news-card__responsive-body">
              <span class="meta-info d-flex">
                <span class="meta-info__date d-flex"
                  ><img
                    src="/wp-content/themes/slap/assets/icons/date-icon.svg"
                    alt="datetime icon"
                    aria-hidden="true"
                  />
                  <p><?php the_time('F j, Y') ?></p></span
                >
                <span class="meta-info__category"><?php the_field('category_news') ?></span>
              </span>
              <div class="news-card__body p-1">
                <h2 class="news-card__heading"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <p class="news-card__paragraph">
                  <?php 
                    echo wp_trim_words(get_the_excerpt(), 30); 
                  ?>
                </p>
                <a href="<?php the_permalink() ?>" class="news-card__btn secondary-btn">vidi više</a>
              </div>
            </div>
          </article>