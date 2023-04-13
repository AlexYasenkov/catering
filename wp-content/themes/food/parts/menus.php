<section class="menus">
    <div class="container container_md container_sm">
        <div class="products">
            <div class="products-row">
                <?php
                global $post;
                $menus = get_posts(['numberposts' => 4, 'post_type' => 'post']);
                if ($menus) {
                    foreach ($menus as $post) {
                        setup_postdata($post);
                        ?>
                        <div class="products-column">
                            <div class="products-item">
                                <a href="<?php the_permalink(); ?>" class="products-item__image">
                                    <picture>
                                        <source srcset="<?php the_post_thumbnail_url(); ?>" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service/01.jpg'?>" alt="product">
                                    </picture>
                                </a>
                                <h3 class="products-item__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="products-item__text"><?php the_excerpt(); ?></div>
                                <div class="products-item-buttons">
                                    <a href="<?php the_permalink(); ?>" class="products-item-buttons__btn btn btn_black">Read more</a>
                                    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
                                       class="products-item-buttons__link btn btn_white">View menus</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>