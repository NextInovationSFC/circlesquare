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


    <div class="about"></div>
    <div class="location"></div>
    <div class="number"></div>
    <div class="cost"></div>
    <div class="schedule"></div>

</div>

<?php get_footer(); ?>
