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
            <div id="header--mode-selector">

            </div>
            <nav>
                <span>WordPress</span>
                <span>Single Page Sites</span>
                <span>Other Specialties</span>
                <span>About</span>
            </nav>
            <div id="header--img-logo">
                <img src="<?php echo get_theme_file_uri('/images/dark_logo.jpg'); ?>" alt="The words 'Sites by Joanna' appear in white, green, and purple letters in front of a simple, green, pink, and purple illustration of a 1990s desktop computer" id="header--img-logo--dark" />
                <img src="<?php echo get_theme_file_uri('/images/light_logo.jpg'); ?>" alt="The words 'Sites by Joanna' appear in black, green, and purple letters in front of a simple, green, pink, and purple illustration of a 1990s desktop computer" id="header--img-logo--light" />
            </div>
        </header>