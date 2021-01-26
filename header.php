<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<link rel="stylesheet" href="https://use.typekit.net/jyp5ncp.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/b6807196b5.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed relative">
<header id="header" class="fixed z-50 bg-white w-full transition px-4">
    <div class="container mx-auto py-6">
        <div id="branding" class="flex justify-between items-center flex-wrap">
            <div id="site-title">
                <?php echo the_custom_logo(); ?>
            </div>
            <div class="md:hidden cursor-pointer w-8 h-8" id="menu-btn">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve">
                        <path d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
                            c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z"/>
                        <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
                            S379.58,180.455,372.939,180.455z"/>
                        <path d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606
                            c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z"/>
                </svg>
            </div>
            <nav id="menu" class="hidden w-full justify-center items-center text-center md:text-left md:w-4/6 lg:w-1/2 md:flex md:justify-between">
                <?php                                    
                    $nav = wp_get_nav_menu_items('NavBar');
                    for($i=0; $i<sizeof($nav)-1; $i++) {
                        ?>
                            <div class="w-full py-4 border-b-2 md:w-auto md:py-0 md:border-0">
                                <a class="transition font-medium hover:border-black border-transparent border-b-2 pb-1 mt-2" href="<?php echo $nav[$i]->url ?>"><?php echo $nav[$i]->title; ?></a>
                            </div>                    
                        <?php
                    }
                    ?>
                        <div class="hidden md:block w-0.5 h-6 bg-black"></div>
                        <div class="w-full py-4 border-b-2 md:w-auto md:py-0 md:border-0">
                            <a class="ftransition font-medium hover:border-black border-transparent border-b-2 pb-1 mt-2" href="<?php echo $nav[sizeof($nav)-1]->url ?>"><?php echo $nav[sizeof($nav)-1]->title; ?></a>
                        </div>
                    <?php
                ?>
            </nav>
        </div>  
    </div>
</header>

<div id="container">