<!doctype html>
<!--[if lte IE 9]>     <html class="no-js no-csstransforms no-csstransitions" data-theme-url="<?php echo esc_attr(get_template_directory_uri()); ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" data-theme-url="<?php echo esc_attr(get_template_directory_uri()); ?>" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
            <div class="header__container">
                <a class="header__logo" href="<?php echo esc_attr(get_home_url()); ?>">
                    <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/assets/img/logo-dotsunited.svg" alt="<?php esc_attr(get_bloginfo('name', 'display')); ?>"/>
                </a>

                <div class="header__navigation">
                    <nav class="desktop-navigation">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main',
                            'container' => false,
                            'menu_class' => 'desktop-navigation__list',
                            'depth' => 1
                        )); ?>
                    </nav>
                </div>

                <div class="header__off-canvas-navigation">
                    <button aria-hidden="true" class="off-canvas-navigation-button" data-off-canvas-navigation-toggle>
                        <span><span></span></span>
                    </button>

                    <div aria-hidden="true" class="off-canvas-navigation-backdrop" data-off-canvas-navigation-toggle="#off-canvas-navigation-menu"></div>

                    <div aria-hidden="true" class="off-canvas-navigation-menu">
                        <nav class="sliding-navigation">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'main',
                                'container' => false,
                                'menu_class' => 'off-canvas-navigation-menu__list',
                            )); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
