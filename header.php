<! DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset='<?php bloginfo('charset'); ?>'>
        <meta name = "viewport" content = "width=device-width", initial-scale=1>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <span id="header--text-logo">Sites by Joanna</span>
            <div id="header--img-logo">
                <img src="<?php echo get_theme_file_uri('/images/serif_black_logo.png'); ?>" alt="" id="header--img-logo--black" />
            </div>
            <nav>
                <span>WordPress</span>
                <span>Single Page Sites</span>
                <span>Other Specialties</span>
                <span>About</span>
            </nav>
        </header>