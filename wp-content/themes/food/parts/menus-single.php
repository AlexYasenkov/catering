<section class="menus-single">
    <div class="container">
        <div class="menus-item">
            <?php if (get_post($post->ID)): ?>
                <h3 class="menus-item__title">
                    <span><?php the_title(); ?></span>
                </h3>
                <div class="menus-item__image">
                    <picture>
                        <source srcset="<?php the_post_thumbnail_url(); ?>" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service/01.jpg'?>" alt="product">
                    </picture>
                </div>
                <div class="menus-item__text"><?php the_content(); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>