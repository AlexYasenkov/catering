<div class="gallery">
    <div class="container container_sm">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                $gallery = get_posts(['numberposts' => -1, 'post_type' => 'slider']);
                if ($gallery) {
                    foreach ($gallery as $slide) {
                        setup_postdata($slide);
                        $image = get_field('product_image', $slide->ID);
                        ?>
                        <div class="swiper-slide">
                            <div class="gallery-product-image">
                                <picture>
                                    <source srcset="<?php echo $image; ?>" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/service/01.jpg'?>" alt="product">
                                </picture>
                            </div>
                        </div>
                    <?php }
                } wp_reset_postdata(); ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>