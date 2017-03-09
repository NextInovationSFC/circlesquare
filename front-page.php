<?php get_header(); ?>


<div class="main_parent">
    <div class="main clearfix">

        <div class="random">
            <div id="random" class="random_grid">
                <?php query_posts('orderby=rand');?>
                <?php if(have_posts()):while(have_posts()):the_post(); get_template_part('each_exrpt_post');?>
                <?php endwhile;endif;?>
            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>
