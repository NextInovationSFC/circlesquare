<?php

// カスタムヘッダー
add_custom_image_header('', '__return_false');

define('NO_HEADER_TEXT', true);
define('HEADER_TEXTCOLOR', '');
define('HEADER_IMAGE', '%s/images/top/main_image.png');
define('HEADER_IMAGE_WIDTH', 950);
define('HEADER_IMAGE_HEIGHT', 295);


function login() {
    echo '<style type="text/css">
            #login h1 a {
                background: url('.get_bloginfo('stylesheet_directory') . '/img/login-logo.png) no-repeat !important;width:600px;
                margin-top: 50px;
            }
            body.login {
                background: url('.get_bloginfo('stylesheet_directory') . '/img/login-bgimg.jpg) no-repeat center center;
                background-size: cover;
            }
            body.login div#login form#loginform {
                background-color: rgba(255,255,255,0.8);
                border-left: 4px solid #b7a380;
            }
            body.login div#login p#nav {
                padding: 10px 10px;
                background-color: rgba(255,255,255,0.8);
            }
            body.login div#login p#backtoblog {
                padding: 10px 10px;
                background-color: rgba(255,255,255,0.8);
            }
            body.login div#login form#loginform p.submit {
                text-align:center;
                color:white;
            } /* ログインボタンを囲むpタグ */
            body.login div#login p#backtoblog {
                text-align:center;
                border-left: 4px solid #b7a380;
            } /* 「～へ戻る」を囲むpタグ */
                body.login div#login p#backtoblog a:hover {
                color: #b7a380;
            } /* 「～へ戻る」のaタグ */
            body.login div#login p#nav {
                text-align:center;
                border-left: 4px solid #b7a380;
            } /* 「パスワードをお忘れですか」を囲むpタグ */
            body.login div#login p#nav a:hover {
                color: #b7a380;
            } /* 「パスワードをお忘れですか」のaタグ */
            body.login form#loginform .button{
                background-color: #031e36;
                border: 1px solid #031e36;
                box-shadow: 0 1px 0 #031e36;
                text-shadow: 0 -1px 1px #031e36, 1px 0 1px #031e36, 0 1px 1px #031e36, -1px 0 1px #031e36;
            }
            body.login .message{
                background-color: rgba(255,255,255,0.8);
                border-left: 4px solid #b7a380;
                text-align:center;
            }


    </style>';
}
add_action('login_head', 'login');
