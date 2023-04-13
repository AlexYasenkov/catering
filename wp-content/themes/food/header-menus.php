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
    <header class="header">
        <div class="container">
            <div class="header-bottom__column_logo">
                <a href="<?php echo home_url(); ?>" class="header-logo">
                    <span class="header-logo__text">Food</span>
                    <span class="header-logo__image">
                        <?php $customLogoUrl = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); ?>
                        <img src="<?php echo $customLogoUrl[0]; ?>" alt="logo">
                    </span>
                    <span class="header-logo__text">Catering</span>
                </a>
            </div>
        </div>
    </header>