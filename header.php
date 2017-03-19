<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta name="description" content="SFC新入生のためのサークル情報サイト。スポーツ、イベント、社会活動、趣味の４つのカテゴリ分けされた唯一のSFCサークル情報を公開中。">
    <title>Circle Square ［サークルスクエア］|  SFC生のためのサークル情報サイト</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Nunito:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font.css">
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
    <?php elseif ( is_404() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/notfound.css">

    <?php endif; ?>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/topbutton.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/ripple.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jQuery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js" ></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-93385820-1', 'auto');
        ga('send', 'pageview');

    </script>


<?php wp_head(); ?>
</head>
    <body>
            <!-- サイドオープン時メインコンテンツを覆う -->
            <div class="overlay" id="js__overlay"></div>

            <!-- 通常メニュー -->
            <nav class="menu_side" id="menu">
                <ul class="menu_side-list">
                    <li><a href="<?php bloginfo('url'); ?>" class="menu_side-list-logo clearText">CircleSquare  |  サークルスクエア　 SFC生のためのサークル情報サイト</a></li>
                    <li><a href="<?php bloginfo('url'); ?>" class="menu_side-list-home"><div class="menu_side-list-homeImg"></div>Home</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/about" class="menu_side-list-about"><div class="menu_side-list-aboutImg"></div>About</a></li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/contact" class="menu_side-list-contact">
                            <div class="menu_side-list-contactImg"></div>
                                Contact
                        </a>
                    </li>
                    <li><a href="https://twitter.com/circle_sq_sfc" class="menu_side-list-twitter"><div class="menu_side-list-twitterImg"></div>Twitter</a></li>
                </ul>
            </nav>

            <div class="header_wrapper">
                <header class="header clearfix">
                    <div class="header_nav">
                        <a class="header_nav-menuBtn" id="js__sideMenuBtn"></a>
                        <a class="header_nav-searchBtn cd-primary-nav-trigger "></a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="clearText">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Circle Square" class="header_nav-logo">
                        </a>
                    </div>
                </header>

                <nav class="cd-primary-nav menu_search">
                    <ul class="menu_search-list">
                        <li class="menu_search-logo">Search</li>
                        <li>
                            <form class="menu_search-form" method="get"  action="<?php bloginfo('home'); ?>">
                                <input type="text" value="" name="s" id="s" class="menu_search-keywords" placeholder="検索キーワードを入力 (ex.テニス)">
                                <input type="image" src="<?php echo get_template_directory_uri(); ?>/img/search.png" width="30" value="検索" class="menu_searchBtn">
                            </form>
                        </li>
                        <li >タグ検索</li>
                        <li><a href="<?php echo get_category_link('59');?>" class="menu_search-tag-sport"><i class="fa fa-tags" aria-hidden="true"></i>スポーツ</a></li>
                        <li><a href="<?php echo get_category_link('49');?>" class="menu_search-tag-social"><i class="fa fa-tags " aria-hidden="true"></i>社会活動</a></li>
                        <li><a href="<?php echo get_category_link('39');?>" class="menu_search-tag-hobby"><i class="fa fa-tags " aria-hidden="true"></i>趣味</a></li>
                        <li><a href="<?php echo get_category_link('36');?>" class="menu_search-tag-event"><i class="fa fa-tags " aria-hidden="true"></i>イベント</a></li>
<!--
                        <li><a href="<?php echo get_category_link('8');?>" class="menu_search-tag-sport"><i class="fa fa-tags" aria-hidden="true"></i>スポーツ</a></li>
                        <li><a href="<?php echo get_category_link('34');?>" class="menu_search-tag-social"><i class="fa fa-tags " aria-hidden="true"></i>社会活動</a></li>
                        <li><a href="<?php echo get_category_link('35');?>" class="menu_search-tag-hobby"><i class="fa fa-tags " aria-hidden="true"></i>趣味</a></li>
                        <li><a href="<?php echo get_category_link('20');?>" class="menu_search-tag-event"><i class="fa fa-tags " aria-hidden="true"></i>イベント</a></li>
-->
                    </ul>
                </nav>


