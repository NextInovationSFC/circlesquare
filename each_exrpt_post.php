<!--POST BOX-->
<li class="col-1-4">
    <?php $postImgSrc = wp_get_attachment_image_src(post_custom('image'), $size, false, $args);?>
    <a href="<?php the_permalink();?>" >
    <div class="wrap-col">
        <div class="random_icon" style="background: url('<?php echo $postImgSrc[0] ?> ') center center;    background-size: cover;"></div>
        <h2 class="random_name" style="letter-spacing: 3px;"><?php echo post_custom('name'); ?></h2>
<!--        <div class="random_hr"></div>-->
        <hr>
        <div class="random_description"><?php echo post_custom('short'); ?></div>
    </div>
    </a>
</li>
<!--POST BOX END-->
