<?php get_header(); ?>


<div class="main_parent">
    <div class="main clearfix">

        <div class="search-result">
            <div class="search-result-text">
                <?php if($s){ ?>「<?php echo $s; } ?>」の検索結果（全<?php echo $wp_query->found_posts; ?>件）
            </div>
        </div>

        <div class="random">
            <div id="random" class="random_grid">
                <?php if(have_posts()):while(have_posts()):the_post(); get_template_part('each_exrpt_post');?>
                <?php endwhile; ?>
                <?php else : ?>
                <div class="noHit"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div id="pageTop-btn" class="pageTop-btn">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>



<?php get_footer(); ?>
