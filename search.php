<?php get_header(); ?>


<div class="main_parent">
    <div class="main clearfix">

        <?php   $s = $_GET['s'];
$catnum = $_GET['catnum'];

//tax_query用
if($catnum){
    $taxquerysp[] = array(
        'taxonomy'=>'category',
        'terms'=> $catnum,
        'include_children'=>false,
        'field'=>'term_id',
        'operator'=>'IN'
    );
}
        ?>

        <div class="jyoken">
            <?php if($s){ ?>検索キーワード：<?php echo $s; } ?>
            <?php if (is_array($catnum)) { ?>カテゴリ : <?php
            foreach($catnum as $val){
                if ($val === end($catnum)) {
                    echo get_cat_name($val);
                }else{
                    echo get_cat_name($val).", ";
                }
            }
        }
            ?>
            <div class="kekka">検索結果</div>
        </div>

        <?php query_posts( array(
                'tax_query' => $taxquerysp,
                's' => $s,
            )
                         );
        ?>


        <div class="random">
            <div id="random" class="random_grid search_grid">
                <?php if(have_posts()):while(have_posts()):the_post(); get_template_part('each_exrpt_post');?>

                <?php endwhile; else : ?>

                <div>該当なし</div>

                <?php endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
