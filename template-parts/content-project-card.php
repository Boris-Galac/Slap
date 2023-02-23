<article class="article-card d-grid">
                    <div class="article-card__header grid-center p-3">
                        <a href="<?php the_permalink()?>">
                        
                    <?php if(has_post_thumbnail()){ ?>
                        <img src="<?php the_post_thumbnail_url();  ?>" alt="project image">
                        <?php }
                            ?>
                        </a>
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
                      <span class="meta-info__category"><?php echo get_the_category_list(', ') ?></span>
                    </span>
                    <div class="article-card__body">
                      <h2 class="article-card__heading">
                       <a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
                      </h2>
                      <p class="article-card__text">
                      <?php echo wp_trim_words(get_the_content(), 12) ?>
                      </p>
                      <a class="secondary-btn" href="<?php the_permalink() ?>">vidi više</a> 
                    </div>
                  </article>