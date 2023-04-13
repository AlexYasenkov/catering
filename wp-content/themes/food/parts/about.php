<section class="about">
    <div class="private">
        <?php if( have_rows('about') ): ?>
            <?php while ( have_rows('about') ) : the_row(); ?>
                <div class="private-image">
                    <picture>
                        <source srcset="<?php the_sub_field('image'); ?>" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/about/01.jpg'?>" alt="about">
                    </picture>
                </div>
                <div class="private-body private-body_container">
                    <div class="private-body__title">
                        <h1><?php the_sub_field('title'); ?></h1>
                    </div>
                    <div class="private-body__text"><?php the_sub_field('description'); ?></div>
                    <div class="private-body-buttons">
                        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
                           class="private-body-buttons__btn btn btn_white">View menus</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>