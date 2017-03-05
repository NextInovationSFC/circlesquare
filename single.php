<?php get_header(); ?>


<div class="container">

    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <?php $kataban = post_custom('calendar'); ?>
    <?php endwhile; endif; ?>


    <div class="imageBox">
        <img src="<?php echo wp_get_attachment_image_src ( post_custom('image'), 'full' )[0]; ?>" alt="<?php the_title(); ?>">
    </div>


    <div class="overview">
        <div class="title">
            <h1 class="title__name">
                <?php echo post_custom('name'); ?>
            </h1>
            <p class="title__tag">テニス</p>
        </div>


        <div class="sns">
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <a href="<?php echo post_custom('homepage'); ?>" class="sns__item sns__webpage" target="_blank">
                    <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                </a>

            <a href="<?php echo post_custom('twitter'); ?>" class="sns__item sns__twitter" target="_blank">
                    <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
                </a>

            <a href="<?php echo post_custom('facebook'); ?>" class="sns__item sns__facebook" target="_blank">
                    <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
                </a>
            <?php endwhile; endif; ?>
        </div>

        <div class="chart">

        </div>
    </div>

    <div class="contents">
        <div class="about">
            <h2 class="contents__heading about__heading">活動内容</h2>
            <p class="about__description">
                <?php echo post_custom('long'); ?>
            </p>
        </div>
        <div class="locationAndDate">
            <h2 class="contents__heading locationAndDate__heading">活動日 場所</h2>
            <p class="date__description">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <?php echo post_custom('calendar'); ?>
                <?php endwhile; endif; ?>
            </p>
            <p class="location__description">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <?php echo post_custom('location'); ?>
                <?php endwhile; endif; ?>
            </p>

        </div>
        <div class="number">
            <h2 class="contents__heading number__heading">人数 男女比</h2>
            <p class="number__description">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <?php echo post_custom('number'); ?>
                <?php endwhile; endif; ?>
            </p>
            <p class="ratio__description">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <?php echo post_custom('ratio'); ?>
                <?php endwhile; endif; ?>
            </p>
        </div>

        <div class="cost">
            <h2 class="contents__heading cost__heading">年間費</h2>
            <p class="cost__description">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <?php echo post_custom('money'); ?>
                <?php endwhile; endif; ?>
            </p>
        </div>


        <div class="schedule">
            <h2 class="contents__heading schedule__heading">年間スケジュール</h2>
            <div class="spring">
                <p class="spring__description">
                    <?php
                    if ( is_array( post_custom('spring') ) ) {
                        echo implode ( "<br><br>", post_custom('spring') );
                    }else{
                        echo post_custom('spring');
                    }
                    ?>
                </p>
            </div>
            <div class="summer">
                <p class="summer__description">
                    <?php
                    if ( is_array( post_custom('summer') ) ) {
                        echo implode ( "<br><br>", post_custom('summer') );
                    }else{
                        echo post_custom('summer');
                    }
                    ?>
                </p>
            </div>
            <div class="autumn">
                <p class="autumn__description">
                    <?php
                    if ( is_array( post_custom('autumn') ) ) {
                        echo implode ( "<br><br>", post_custom('autumn') );
                    }else{
                        echo post_custom('autumn');
                    }
                    ?>
                </p>
            </div>
            <div class="winter">
                <p class="winter__description">
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

<?php get_footer(); ?>
