<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e8ea9f8391.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/rhgtmalogo_dark.png" />
	
    <?php wp_head(); ?>
</head>

<body>
    <div class="container container-main p-0"> <!-- Main container start div -->
        <header>
            <div class="row" id="header-logo">
                <!-- Logos -->
                <div class="col-12 col-lg-6 text-left justify-content-center align-self-center">
                    <div class="row">
                        <div class="col text-center align-self-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/rh_gtma_sitelogo.png" class="img-fluid header-logo">
                        </div>
                        <div class="col text-center align-self-center">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/TMA_logo.gif" class="img-fluid header-logo"> -->
                        </div>
                    </div>
                </div>
                <!-- Main Header/Address/Call to Action Area -->
                <div class="col-6 col-lg-3 d-lg-inline text-center text-lg-right my-auto header-address">
                    <div>(833) INFO-TMA</div>
                    <div>11262 Ford Ave</div>
                    <div>Richmond Hill, GA 31324</div>
                </div>
                <div class="col-6 col-lg-3 d-lg-inline text-center text-lg-left my-auto header-address">
                    <a href="/request-information" class="d-block">Sign Up Today!</a>
                    <a href="/request-information">Get in touch by completing <br> our Information Form <i class="fas fa-play"></i></a>
                </a>
                </div>
            </div>
            
            <nav id="main-nav" class="navbar navbar-expand-lg navbar-light" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> <span class="nav-menu-toggle">MENU</span>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </nav>
        </header>