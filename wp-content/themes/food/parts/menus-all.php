<section class="menus menus_all">
    <div class="container container_md container_sm">
        <div class="products">
            <div class="products-row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                            <div class="products-item__text"><?php the_content(); ?></div>
                            <div class="products-item-buttons">
                                <a href="<?php the_permalink(); ?>" class="products-item-buttons__btn btn btn_black">Read more</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>