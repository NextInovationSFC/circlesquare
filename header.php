<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CircleSquare</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/headerandfooter.css">
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
    <?php elseif ( is_page('privacypolicy') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/policy.css">
    <?php elseif ( is_page('sitepolicy') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/policy.css">
    <?php elseif ( is_page('about') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/policy.css">
    <?php endif; ?>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jQuery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
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
    <header class = "header clearfix">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Circle Square" class="pic"></a>
        <div class="nav">
            <ul class="nav_main">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
                <li class="nav__mega">
                    <a href="" class="init-bottom">SEARCH</a>
                    <ul class="nav__category">
                        <!--                        <li class="nav___textsearch">-->
                        <form class="nav-search" method="get" id="searchform" action="<?php bloginfo('url'); ?>" name="form1">
                            <div class="nav___keySearch">
                                <div class="nav___left">
                                    <p class="nav___textSearch">キーワードから検索</p>
                                </div>
                                <div class="nav___right">
                                    <div class="nav___typeSearch">
                                        <input type="text" value="" name="s" id="s" class="nav-search_text" placeholder="ex.テニス"/>
                                    </div>
                                </div>
                            </div>
                            <div class="nav___cateSearch">
                                <div class="nav___left">
                                    <p class="nav___textSearch">カテゴリー</p>
                                </div>
                                <div class="nav___right">
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="25">
                                            <span class="checkbox-icon"></span>
                                            <label>IT</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="20">
                                            <span class="checkbox-icon"></span>
                                            <label>イベント</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="14">
                                            <span class="checkbox-icon"></span>
                                            <label>オールラウンド</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="28">
                                            <span class="checkbox-icon"></span>
                                            <label>サッカー</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="18">
                                            <span class="checkbox-icon"></span>
                                            <label>サブカルチャー</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="24">
                                            <span class="checkbox-icon"></span>
                                            <label>スキー</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="29">
                                            <span class="checkbox-icon"></span>
                                            <label>スノーボード</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="8">
                                            <span class="checkbox-icon"></span>
                                            <label>スポーツ</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="7">
                                            <span class="checkbox-icon"></span>
                                            <label>ダンス</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="23">
                                            <span class="checkbox-icon"></span>
                                            <label>テニス</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="13">
                                            <span class="checkbox-icon"></span>
                                            <label>バスケットボール</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="19">
                                            <span class="checkbox-icon"></span>
                                            <label>バレーボール</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="9">
                                            <span class="checkbox-icon"></span>
                                            <label>ビジネス</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="22">
                                            <span class="checkbox-icon"></span>
                                            <label>ファッション</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="33">
                                            <span class="checkbox-icon"></span>
                                            <label>フットサル</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="3">
                                            <span class="checkbox-icon"></span>
                                            <label>フリーペーパー</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="11">
                                            <span class="checkbox-icon"></span>
                                            <label>ボランティア</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="30">
                                            <span class="checkbox-icon"></span>
                                            <label>メディア/広告</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="15">
                                            <span class="checkbox-icon"></span>
                                            <label>企画</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="16">
                                            <span class="checkbox-icon"></span>
                                            <label>医療福祉</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="31">
                                            <span class="checkbox-icon"></span>
                                            <label>国際交流</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="26">
                                            <span class="checkbox-icon"></span>
                                            <label>学術研究</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="10">
                                            <span class="checkbox-icon"></span>
                                            <label>就活</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="2">
                                            <span class="checkbox-icon"></span>
                                            <label>政治/経済</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="21">
                                            <span class="checkbox-icon"></span>
                                            <label>教育</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="12">
                                            <span class="checkbox-icon"></span>
                                            <label>料理/スイーツ</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="32">
                                            <span class="checkbox-icon"></span>
                                            <label>旅行</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="5">
                                            <span class="checkbox-icon"></span>
                                            <label>映画</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="4">
                                            <span class="checkbox-icon"></span>
                                            <label>社会企業</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="17">
                                            <span class="checkbox-icon"></span>
                                            <label>美術/演劇</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="6">
                                            <span class="checkbox-icon"></span>
                                            <label>野球</label><br>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="catnum[]" class="checkbox" value="27">
                                            <span class="checkbox-icon"></span>
                                            <label>音楽</label><br>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav___btnSearch">
                                <li>
                                    <input type="submit" class="nav-search_req" value="この条件で検索する" />
                                </li>
                                <li>
                                    <input type="button" class="nav-search_req" value="全てをチェックする" onClick="BoxChecked();"/>
                                </li>
                                <li>
                                    <input type="button" class="nav-search_req" value="条件をクリア" onClick="BoxnonChecked();"/>
                                </li>
                            </div>
                        </form>
                    </ul>
                </li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">CONTACT</a></li>
            </ul>
        </div>
    </header>
