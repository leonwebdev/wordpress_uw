<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Space Debris</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header class="container-fluid">
        <div class="container" id="header_container">
            <div class="row">
                <div id="header_logo" class="col flex-grow-1 flex-lg-grow-0">
                    <img src="<?= get_template_directory_uri() ?>/images/space_debris_logo.png" alt="logo" />
                </div>
                <div id="desktop_menu" class="d-lg-flex col align-content-center flex-lg-grow-1">
                    <?php wp_nav_menu(['menu' => 'header_nav_menu']) ?>
                </div>
                <div id="utility_menu" class="d-lg-flex col align-content-center flex-lg-grow-0">
                    <?php wp_nav_menu(['menu' => 'utility_menu']) ?>
                </div>
                <div id="mobile_menu_icon" class="col-auto">
                    <img src="<?= get_template_directory_uri() ?>/images/menu-icon.png" alt="mobile-icon" />
                </div>
            </div>
        </div>
        <div id="mobile_menu" class="container">
            <div class="row">
                <?php wp_nav_menu(['menu' => 'header_nav_menu']) ?>
            </div>
        </div>
    </header>