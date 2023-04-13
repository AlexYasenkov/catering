<section class="service">
    <div class="service-top">
        <?php if( have_rows('service') ): ?>
            <?php while ( have_rows('service') ) : the_row(); ?>
                <div class="service-top__title">
                    <h2><?php the_sub_field('title'); ?></h2>
                </div>
                <div class="service-top__image">
                    <picture>
                        <source srcset="<?php the_sub_field('image'); ?>" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service/01.jpg'?>" alt="service">
                    </picture>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="service-body">
        <div class="container">
            <div class="service-body-row">
                <?php
                $services = get_posts(['numberposts' => 4, 'post_type' => 'service']);
                if ($services) {
                    foreach ($services as $service) {
                        setup_postdata($service);
                        $image = get_field('image', $service->ID);
                        $description = get_field('description', $service->ID);
                        ?>
                        <div class="service-body-column">
                            <div class="service-body-item">
                                <div class="service-body-item__icon">
                                    <img src="<?php echo $image; ?>" alt="icon">
                                </div>
                                <div class="service-body-item-box">
                                    <div class="service-body-item-box__title"><?php echo get_the_title($service->ID); ?></div>
                                    <div class="service-body-item-box__text"><?php echo $description; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>