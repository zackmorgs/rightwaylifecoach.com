<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo(show: 'charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baskervville:ital,wght@0,400..700;1,400..700&family=Great+Vibes&display=swap"
        rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>
    <div id="frame">
        <nav id="nav_main">
            <div id="nav_bar">
                <a id="nav_home_link" href="/">
                    Home
                </a>
                <button id="nav_toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <ul id="nav_list">
                <li>
                    <a class="nav-link" href="/about">
                        About Robin
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="/blog/">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="/FAQ/" class="nav-link">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="/request-an-appointment/" class="nav-link">
                        Request an Appointment
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="/contact/">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>