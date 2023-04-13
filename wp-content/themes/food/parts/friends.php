<section class="friends">
    <div class="friends-top">
        <div class="friends-top__title">
            <h2>Partners</h2>
        </div>
    </div>
    <div class="container container_sm">
        <div class="friends-row">
            <?php
            $partners = get_posts(['numberposts' => 4, 'post_type' => 'partners']);
            if ($partners) {
                foreach ($partners as $partner) {
                    setup_postdata($partner);
                    $image = get_field('image', $partner->ID);
                    $description = get_field('description', $partner->ID);
                    ?>
                    <div class="friends-column">
                        <div class="friends-item">
                            <div class="friends-item__image">
                                <img src="<?php echo $image; ?>" alt="icon">
                            </div>
                            <div class="friends-item__title">
                                <h3><?php echo get_the_title($partner->ID); ?></h3>
                            </div>
                            <div class="friends-item__text"><?php echo $description; ?></div>
                        </div>
                    </div>
                <?php }
            } wp_reset_postdata(); ?>
        </div>
    </div>
</section>