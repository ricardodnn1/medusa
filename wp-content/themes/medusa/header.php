<!DOCTYPE html>
<html>
<head>
    <title>MedUSA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/uikit.min.css" />
    <script src="<?php bloginfo('template_url'); ?>/assets/js/uikit.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/uikit-icons.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css?nocache=<?= time() ?>">
    <!-- Desenvolvido por Ricardo Donizeti Nunes { https://ricardodn.com.br } -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="header-container">
        <div class="col-6 text-center">
            <a href="/medusa" class="logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="col-6">
            <div class="uk-container">
                <div class="utils-top">
                    <div class="uk-navbar-right">
                        <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
                        <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                            <form class="uk-search uk-search-navbar uk-width-1-1" action="" method="get" accept-charset="utf-8" id="searchform" role="search">
                                <input class="uk-search-input" type="search" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Search" autofocus>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main-menu">
                    <nav class="uk-navbar">
                        <ul class="uk-navbar-nav uk-visible@s">
                            <li class="uk-active"><a href="#about">ABOUT</a></li>
                            <li><a href="#service">SERVICE</a></li>
                            <li><a href="javacript:void(0)">SOFTWARE</a></li>
                            <li><a href="#contact">CONTACT US</a></li>
                        </ul>
                        <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
                    </nav>
                </div>
            </div>

        </div>
    </header>