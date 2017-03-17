<?php get_header(); ?>


<div class="main_parent">
    <div class="main clearfix">

        <div class="search-result">
            <div class="search-result-text">
                「<i class="fa fa-tags " aria-hidden="true"></i><?php single_cat_title(); ?>」の検索結果（全<?php echo $wp_query->found_posts; ?>件）
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

<?php get_footer(); ?>
