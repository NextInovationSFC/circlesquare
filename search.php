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
                <div class="card">
                    <h2 class="card__heading">No Circle Data</h2>
                    <p class="card__description">お探しのサークルは<br>ありませんでした</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/searchfalse.png" class = "card__image" alt="">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
