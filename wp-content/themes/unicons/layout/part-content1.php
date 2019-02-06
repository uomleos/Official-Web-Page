

          <div class="wrap-blog-post post type-post ">
            <?php  if ( get_the_post_thumbnail() != '' ):?>
            <!--CALL TO POST IMAGE-->
            <div class="wrap-image">
							<a href="<?php echo esc_url(get_permalink());?>">
                <?php the_post_thumbnail('large'); ?>
							</a>
						</div>
            <?php endif; ?>
              <!--end POST IMAGE-->
                <div class="wrap-post-description">
									<div class="meta ">
                      <?php if ( true == get_theme_mod( 'latest_post_cat', true ) ) : ?>
										<div class="meta-item">
                      <span class="icon icon-Tag"></span>
                        <span>
                          <?php $categories = get_the_category();
                                $separator = ', ';
 														    $output = '';
																if ( ! empty( $categories ) ) {
    														foreach( $categories as $category ) {
        												$output .=
																'<a href="' . esc_url( get_category_link( $category->term_id ) ) .
																'" alt="' . esc_attr(sprintf( __( 'View all posts in %s','unicons' ),
																$category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    																}
   															echo trim( $output, $separator );
													} ?>
                        </span>
                    </div>
                    <?php endif; ?>
                    <?php if ( true == get_theme_mod( 'latest_post_date', true ) ) : ?>
										<div class="meta-item">
                      <span class="icon icon-Agenda"></span>
                      <?php the_time( get_option('date_format') ); ?>
                    </div>
                    <?php endif; ?>
                    <?php if ( true == get_theme_mod( 'latest_post_comment', true ) ) : ?>
										<div class="meta-item">
                      <span class="icon icon-Message"></span>
                      <?php comments_popup_link( __('0 Comment', 'unicons'), __('1 Comment', 'unicons'), __('% Comments', 'unicons'), '', __('no' , 'unicons')); ?>
                    </div>
                    <?php endif; ?>
									</div>
								</div>
                <div class="post-body">
                  <?php the_title( sprintf( '<h2 class="post-body-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
										<div class="post-body-content post-body-excerpt">
                      <?php the_excerpt(); ?>
                    </div>
									<div class="more-page">
									</div>
									<div class="row">
										<div class="medium-12 columns">
											<a href="<?php echo esc_url(get_permalink());?>" class="blog-btn hvr-icon-forward  pull-left" >
												<?php echo esc_attr__('Read more','unicons');?>
                   		</a>
										</div>
									</div>
								</div>
          </div>
