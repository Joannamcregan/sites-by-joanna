<! DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset='<?php bloginfo('charset'); ?>'>
        <meta name = "viewport" content = "width=device-width", initial-scale=1>
        <?php wp_head(); ?>
    </head>
    <body class="light">
        <header>
            <div id="header--mobile-menu-icon">
                <img src="<?php echo get_theme_file_uri('/images/mobile_menu_dark.jpg'); ?>" aria-label="mobile menu" id="header--mobile-menu--dark" />
                <img src="<?php echo get_theme_file_uri('/images/mobile_menu_light.jpg'); ?>" aria-label="mobile-menu" id="header--mobile-menu--light" />
            </div>
            <span id="header--text-logo">Sites by Joanna</span>
            <div id="header--img-logo">
                <img src="<?php echo get_theme_file_uri('/images/dark_mobile_logo.jpg'); ?>" alt="an illustration of a white mobile phone with a white letter J appearing on a dark screen" id="header--img-logo--dark" />
                <img src="<?php echo get_theme_file_uri('/images/light_mobile_logo.jpg'); ?>" alt="an illustration of a black mobile phone with a black letter J appearing on a light screen" id="header--img-logo--light" />
            </div>
            <nav>
                <span>WordPress</span>
                <span>Single Page Sites</span>
                <span>Other Specialties</span>
                <span>About</span>
            </nav>
        </header>