<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-background font-sans text-primary'); ?>>
    <nav class="flex justify-between items-center px-12 py-8 bg-surface border-b border-border sticky top-0 z-50">
        <div class="text-xl font-bold tracking-tighter">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?>.</a>
        </div>
        <div class="hidden md:flex space-x-10 text-sm font-medium uppercase tracking-[0.2em] text-secondary">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'flex space-x-10',
                'fallback_cb'    => 'nexafusion_fallback_menu',
            ));
            ?>
        </div>
        <button class="px-6 py-2 border border-primary text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-primary hover:text-white transition-all">
            Start Project
        </button>
    </nav>

    <?php
    function nexafusion_fallback_menu() {
        echo '<a class="hover:text-primary transition-colors" href="#">Work</a>';
        echo '<a class="text-primary" href="#">Studio</a>';
        echo '<a class="hover:text-primary transition-colors" href="#">Journal</a>';
        echo '<a class="hover:text-primary transition-colors" href="#">Contact</a>';
    }
    ?>
