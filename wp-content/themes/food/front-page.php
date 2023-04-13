<?php
/*
Template Name: Home page
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <main class="page">
        <?php echo get_template_part('/parts/about'); ?>
        <?php echo get_template_part('/parts/menus'); ?>
        <?php echo get_template_part('/parts/service'); ?>
        <?php echo get_template_part('/parts/gallery'); ?>
        <?php echo get_template_part('/parts/friends'); ?>
        <?php echo get_template_part('/parts/contacts'); ?>
    </main>
<?php get_footer(); ?>