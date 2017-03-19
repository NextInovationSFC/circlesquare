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

<!--
<div id="pageTop-btn" class="pageTop-btn">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>
-->
<a class="button" id = "topbutton" href="#">
    <i class="fa fa-chevron-up animated rubberBand"></i><span class="ring"></span>
</a>

<?php get_footer(); ?>
