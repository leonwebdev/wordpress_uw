<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="./images/favicon.png" type="image/png" />
    <link rel="apple-touch-icon" sizes="196x196" href="./images/favicon-196.png" />
    <link rel="apple-touch-icon" sizes="192x192" href="./images/favicon-192.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon-180.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="./images/favicon-128.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lab2</title>
    <link type="text/css" rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

    <div id="header_wrapper">
        <a target="_blank" href="./index.html" title="Gardener Home">
            <img src="<?= get_template_directory_uri() ?>/images/logo.svg" alt="logo" width="315" height="70">
        </a>
        <nav>

            <?php wp_nav_menu(['menu' => 'main']); ?>

        </nav>

        <div id="hamburger_icon">
            <div class="hamburger_icon_element"></div>
            <div class="hamburger_icon_element"></div>
            <div class="hamburger_icon_element"></div>
        </div>

    </div>

    </header>