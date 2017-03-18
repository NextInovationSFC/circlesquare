
<footer>
    <div class="footer__nav">
        <ul class="footer__nav__main">
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Circle Square</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <i class="fa fa-home fa-fw footer_icon" aria-hidden="true"></i>  Home</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">
                    <i class="fa fa-exclamation-circle fa-fw footer_icon" aria-hidden="true"></i>  About</a>
            </li>
            <li class="footer_contact">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="footer_contact">
                    <i class="fa fa-envelope fa-fw footer_icon footer_size" aria-hidden="true"></i>  Contact</a>
            </li>
        </ul>

        <ul class="footer__nav__policy">
            <li>
                <a href="mailto:circlesquare@gmail.com">Email : circlesquare@gmail.com</a>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>sitepolicy">サイトポリシー</a></li>
            <div class = "verticalLine"></div>
            <li class="privacy"><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacypolicy" >プライバシーポリシー</a></li>
        </ul>
    </div>

    <div class="clear"></div>
    <p class="copyright">Copyright © Next Inovation</p>
</footer>



<?php wp_footer(); ?>

</body>

</html>
