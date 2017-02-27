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

        <div class="pagination">
            <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
            ?>
        </div>

    </div>
</div>


<?php get_footer(); ?>
