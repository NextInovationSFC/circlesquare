<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CircleSquare</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/headerandfooter.css">
<!--    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mmenu.all.css" type="text/css"/>-->
    <?php if ( is_front_page() ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/each_exrpt_post.css">
    <?php elseif ( is_page('contact') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
    <?php elseif ( is_single() ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
    <?php elseif ( is_search() ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/search.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/each_exrpt_post.css">
    <?php elseif ( is_category() ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/each_exrpt_post.css">
    <?php elseif ( is_page('privacypolicy') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/policy.css">
    <?php elseif ( is_page('sitepolicy') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/policy.css">
    <?php elseif ( is_page('about') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/policy.css">
    <?php endif; ?>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jQuery.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!--    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mmenu.min.js"></script>-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js" ></script>
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-90163165-1', 'auto');
        ga('send', 'pageview');
    </script>


<?php wp_head(); ?>
</head>
    <body>

        <div id="wrap" class="mm-page">
            <header class = "header clearfix">
                <div class="nav">
                    <a class="menu-btn"></a>
                    <a class="tooltip-btn" href="#search"></a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Circle Square" class="pic"></a>
                </div>
                <nav class="menu" id="menu">
                    <ul class="menu-list">
                        <li><a href="#" class="menu-list-home"></a></li>
                        <li><a href="#" class="menu-list-about"></a></li>
                        <li><a href="#" class="menu-list-contact"></a></li>
                        <li><a href="https://twitter.com/circle_sq_sfc" class="menu-list-twitter"></a></li>
                    </ul>
                </nav>

            </header>
            <div class="search">
                <ul class="search-tag">
                    <li><a href="<?php echo get_category_link('8');?>" class="search-tag-sport"></a></li>
                    <li><a href="<?php echo get_category_link('34');?>" class="search-tag-social"></a></li>
                    <li><a href="<?php echo get_category_link('35');?>" class="search-tag-hobby"></a></li>
                    <li><a href="<?php echo get_category_link('20');?>" class="search-tag-event"></a></li>
                </ul>

                <form class="searchform" method="get" action="<?php bloginfo('url'); ?>" >
                    <input type="text" value="" name="s" id="s" class="keywords">
                    <input type="image" src="<?php echo get_template_directory_uri(); ?>/img/search.png" width="30" value="検索" class="searchBtn">
                </form>
            </div>





