<?php get_header(); ?>

<div id="wellcome" class="wellcome">
    <div class="wellcome-head">
        Wellcome to Circle Square!!
    </div>
    <div class="wellcome-body">
        このサイトはSFCにおける<br>
        サークル情報をまとめたWebサイトです。<br>
        自分にあったサークルを見つけてみよう！
    </div>
</div>

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
