<?php get_header(); ?>


<div class="container">

    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <?php $kataban = post_custom('calendar'); ?>
    <?php endwhile; endif; ?>


    <div class="imageBox">
        <img src="<?php echo wp_get_attachment_image_src ( post_custom('image'), 'full' )[0]; ?>" alt="<?php the_title(); ?>">
    </div>


    <div class="overview">
        <h1 class="title">
            <?php echo post_custom('name'); ?>
        </h1>
        <div class="sns"></div>
        <div class="chart"></div>
    </div>


    <div class="about"></div>
    <div class="location"></div>
    <div class="number"></div>
    <div class="cost"></div>
    <div class="schedule"></div>

</div>

<?php get_footer(); ?>
