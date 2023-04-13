<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header class="header _lock-padding">
            <div class="container">
                <div class="header-top">
                    <div class="header-top-lang">
                        <a href="#" class="header-top-lang__item active">En</a>
                        <a href="#" class="header-top-lang__item">Ru</a>
                        <a href="#" class="header-top-lang__item">Esp</a>
                    </div>
                    <a href="#header-popup" class="header-top__link popup-link">Online ordering</a>
                    <div class="header-menu-icon">
                        <span></span>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-bottom__column header-bottom__column_left">
                        <nav class="header-bottom-nav header-bottom-nav_left">
                            <?php if (has_nav_menu('left_menu')) {
                                wp_nav_menu([
                                    'theme_location' => 'left_menu',
                                    'container' => false,
                                    'menu_class' => 'header-bottom-menu',
                                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                ]);
                            } ?>
                        </nav>
                    </div>
                    <div class="header-bottom__column header-bottom__column_logo">
                        <a href="<?php echo home_url(); ?>" class="header-logo">
                            <span class="header-logo__text">Food</span>
                            <span class="header-logo__image">
                                <?php $customLogoUrl = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); ?>
                                <img src="<?php echo $customLogoUrl[0]; ?>" alt="logo">
                            </span>
                            <span class="header-logo__text">Catering</span>
                        </a>
                    </div>
                    <div class="header-bottom__column header-bottom__column_right">
                        <nav class="header-bottom-nav header-bottom-nav_right">
                            <?php if (has_nav_menu('right_menu')) {
                                wp_nav_menu([
                                    'theme_location' => 'right_menu',
                                    'container' => false,
                                    'menu_class' => 'header-bottom-menu',
                                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                ]);
                            } ?>
                        </nav>
                    </div>
                </div>
                <div class="header-menu"></div>
            </div>
            <div id="header-popup" class="header-popup">
                <div class="header-popup-body">
                    <div class="header-popup-content">
                        <div class="header-popup-close">
                            <a href="#" class="_close-popup">&#10006;</a>
                        </div>
                        <div class="header-popup-form">
                            <div class="header-popup-form__title">Online ordering</div>
                            <?php echo do_shortcode('[contact-form-7 id="60" title="Online ordering" html_class="header-popup-form-body" html_name="formOrder"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>