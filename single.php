<?php get_header(); ?>



<div class="container">


    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <?php $kataban = post_custom('calendar'); ?>
    <?php endwhile; endif; ?>

    <!--     <section class="hero"></section> -->
    <section class="hero2">


        <img src="<?php echo wp_get_attachment_image_src ( post_custom('image'), 'full' )[0]; ?>" alt="<?php the_title(); ?>">
        <div class="caption">
            <h2 class="caption_title">
                <?php echo post_custom('name'); ?>
            </h2>
            <!--  <hr class="caption_line"> -->
            <div class="caption_box">
                <p class="caption_description">
                    <?php echo post_custom('long'); ?>
                </p>
            </div>
        </div>


    </section>

    <div class="wrapper">



        <div class="sns">
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <a href="<?php echo post_custom('homepage'); ?>" class="sns_item" target="_blank"><i class="fa fa-home fa-fw" aria-hidden="true"></i></a>
            <a href="<?php echo post_custom('twitter'); ?>" class="sns_item" target="_blank"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
            <a href="<?php echo post_custom('facebook'); ?>" class="sns_item" target="_blank"><i class="fa fa-facebook-square fa-fw" aria-hidden="true"></i></a>

            <?php endwhile; endif; ?>
        </div>


        <div class="contents">
            <div class="contents_card contents_time contents_border-bottom contents_border-right">
                <h2 class="contents_heading contents_title">日時</h2>
                <div class="contents_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cal.png" alt="">
                </div>
                <h2 class="contents_heading">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('calendar'); ?>
                    <?php endwhile; endif; ?>
                    </h2>
            </div>
            <div class="contents_card contents_location contents_border-bottom contents_border-right">
                <h2 class="contents_heading contents_title">場所</h2>
                <div class="contents_icon">
                    <!-- <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/loc.png" alt="">
                    </div>
                <h2 class="contents_heading">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('location'); ?>
                    <?php endwhile; endif; ?>
                </h2>
            </div>
            <div class="contents_card contents_president contents_border-bottom">
                <h2 class="contents_heading contents_title">代表</h2>
                <div class="contents_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/del.png" alt=""></div>
                <h2 class="contents_heading">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('delegate'); ?>
                    <?php endwhile; endif; ?>
                </h2>
                <p class="contents_email">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('email'); ?>
                    <?php endwhile; endif; ?>
                </p>
            </div>
            <div class="contents_card contents_number contents_border-right">
                <h2 class="contents_heading contents_title">人数</h2>
                <div class="contents_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/num.png" alt="">
                </div>
                <h2 class="contents_heading">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('number'); ?>
                    <?php endwhile; endif; ?>
                </h2>
            </div>
            <div class="contents_card contents_percent contents_border-right">
                <h2 class="contents_heading contents_title">男女比</h2>
                <div class="contents_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ratio.png" alt="">
                </div>
                <h2 class="contents_heading">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('ratio'); ?>
                    <?php endwhile; endif; ?>
                </h2>
            </div>
            <div class="contents_card contents_money">
                <h2 class="contents_heading contents_title">年間費</h2>
                <div class="contents_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/money.png" alt="">
                </div>
                <h2 class="contents_heading">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('money'); ?>
                    <?php endwhile; endif; ?>
                </h2>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"  class="contents_img" alt="">

            <div class="contents_info ">
                <div class="contents_info_article">

                    <p class="description">
                        <?php
                        if ( is_array( post_custom('spring') ) ) {
                            echo implode ( "<br><br>", post_custom('spring') );
                        }else{
                            echo post_custom('spring');
                        }
                        ?>
                    </p>
                </div>
                <div class="contents_info_article">
                    <p class="description">
                        <?php
                        if ( is_array( post_custom('summer') ) ) {
                            echo implode ( "<br><br>", post_custom('summer') );
                        }else{
                            echo post_custom('summer');
                        }
                        ?>
                    </p>
                </div>
                <div class="contents_info_article">
                    <p class="description">
                        <?php
                        if ( is_array( post_custom('autumn') ) ) {
                            echo implode ( "<br><br>", post_custom('autumn') );
                        }else{
                            echo post_custom('autumn');
                        }
                        ?>
                    </p>
                </div>
                <div class="contents_info_article">
                    <p class="description">
                        <?php
                        if ( is_array( post_custom('winter') ) ) {
                            echo implode ( "<br><br>", post_custom('winter') );
                        }else{
                            echo post_custom('winter');
                        }
                        ?>
                    </p>
                </div>
            </div>



        </div>
    </div>
</div>


<?php get_footer(); ?>
