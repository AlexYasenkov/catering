<section class="contacts">
    <div class="container">
        <div class="contacts-top">
            <?php if( have_rows('contacts') ): ?>
                <?php while ( have_rows('contacts') ) : the_row(); ?>
                    <div class="contacts-top__title">
                        <h3><?php the_sub_field('title'); ?></h3>
                    </div>
                    <div class="contacts-top-row">
                        <div class="contacts-top-column">
                            <div class="contacts-top-item">
                                <div class="contacts-top-item__icon">
                                    <span class="_icon-map"></span>
                                </div>
                                <div class="contacts-top-item__text"><?php the_sub_field('address'); ?></div>
                            </div>
                        </div>
                        <div class="contacts-top-column">
                            <a href="mailto:<?php the_sub_field('email'); ?>" class="contacts-top-item">
                                <div class="contacts-top-item__icon">
                                    <span class="_icon-email"></span>
                                </div>
                                <div class="contacts-top-item__text"><?php the_sub_field('email'); ?></div>
                            </a>
                        </div>
                        <div class="contacts-top-column">
                            <a href="tel:<?php the_sub_field('phone_number_only'); ?>" class="contacts-top-item">
                                <div class="contacts-top-item__icon">
                                    <span class="_icon-phone"></span>
                                </div>
                                <div class="contacts-top-item__text"><?php the_sub_field('phone_number'); ?></div>
                            </a>
                        </div>
                        <div class="contacts-top-column">
                            <?php if( have_rows('socials') ): ?>
                                <div class="contacts-top-social">
                                    <a href="<?php the_field('instagram_link'); ?>" target="_blank" class="contacts-top-social__icon">
                                        <span class="_icon-instagram"></span>
                                    </a>
                                    <a href="<?php the_field('facebook_link'); ?>" target="_blank" class="contacts-top-social__icon">
                                        <span class="_icon-facebook"></span>
                                    </a>
                                    <a href="<?php the_field('twitter_link'); ?>" target="_blank" class="contacts-top-social__icon">
                                        <span class="_icon-twitter"></span>
                                    </a>
                                    <a href="<?php the_field('google_link'); ?>" target="_blank" class="contacts-top-social__icon">
                                        <span class="_icon-google"></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="contacts-content">
            <div class="contacts-content-column">
                <div class="contacts-content-map">
                    <?php the_field('google_map'); ?>
                </div>
            </div>
            <div class="contacts-content-column">
                <div class="contacts-content-form">
                    <div class="contacts-content-form__title">Get in touch</div>
                    <?php echo do_shortcode('[contact-form-7 id="47" title="Contacts" html_class="contacts-content-form-body" html_name="contactForm"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>