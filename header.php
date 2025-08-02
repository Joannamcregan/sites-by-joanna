<! DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset='<?php bloginfo('charset'); ?>'>
        <meta name = "viewport" content = "width=device-width", initial-scale=1>
        <?php wp_head(); ?>
        <title><?php
            if (is_front_page()) {
                bloginfo('name');
            }
            else {
                wp_title(' | ', true, 'right');
                bloginfo('name');
            }
        ?></title>
    </head>
    <body class="dark">
        <header>
            <div class="vergillia" id="logo-text" tabindex="0">
                <p class="logo--top-line"><span class="logo--top-large"><em>Sites</em></span><span class="logo--top-small"><em> by</em></span></p>
                <p class="logo--bottom-line"><em>Joanna</em></p>
            </div>
            <nav>
                <span>Work</span>
                <span>About</span>
                <span>Contact</span>
                <span>Blog</span>
            </nav>
            <div id="header--mode-selector">
                <img src="<?php echo get_theme_file_uri('/images/sun.png'); ?>" aria-label="light mode sun icon" id="sun" />
                <img src="<?php echo get_theme_file_uri('/images/top_cloud.png'); ?>" aria-hidden="true" id="top-cloud" class="top-cloud" />
                <img src="<?php echo get_theme_file_uri('/images/bottom_cloud.png'); ?>" aria-hidden="true" id="bottom-cloud" class="bottom-cloud" />
                <img src="<?php echo get_theme_file_uri('/images/top_cloud_dark.png'); ?>" aria-hidden="true" id="top-cloud-dark" class="top-cloud" />
                <img src="<?php echo get_theme_file_uri('/images/bottom_cloud_dark.png'); ?>" aria-hidden="true" id="bottom-cloud-dark" class="bottom-cloud" />
                <img src="<?php echo get_theme_file_uri('/images/moon.png'); ?>" aria-label="dark mode moon icon" id="moon" />
            </div>
            <div id="header--mobile-menu-icon">
                <img src="<?php echo get_theme_file_uri('/images/mobile_menu_dark.jpg'); ?>" aria-label="mobile menu" id="header--mobile-menu--dark" />
                <img src="<?php echo get_theme_file_uri('/images/mobile_menu_light.jpg'); ?>" aria-label="mobile-menu" id="header--mobile-menu--light" />
            </div>
        </header>