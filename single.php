<?php get_header(); ?>


<div class="imageBox">
    <img src="<?php echo wp_get_attachment_image_src ( post_custom('image'), 'full' )[0]; ?>" alt="<?php the_title(); ?>">
</div>

<div class="container">


    <div class="overview">
       <div class="clearfix">
        <div class="title">
            <h1 class="title__name">
                <?php echo post_custom('name'); ?>
            </h1>

            <div class="random_tags_parent">
                <?php
                $cats = get_the_category();
                $cat1 = $cats[0];
                $cat2 = $cats[1];
                $cat3 = $cats[2];
                $cat4 = $cats[3];
                ?>

                <span class="<?php if($cat1->parent){
                    $parent = get_category($cat1->parent);
                    echo $parent->slug;
                }else{
                    echo $cat1->slug;
                } ?>">
                    <?php if($cat1->parent){echo '<i class="fa fa-tags" aria-hidden="true"></i>';} ?>
                    <?php if($cat1->parent){echo $cat1->cat_name;} ?>
                </span>
                <span class="<?php if($cat2->parent){
                    $parent = get_category($cat2->parent);
                    echo $parent->slug;
                }else{
                    echo $cat2->slug;
                } ?>">
                    <?php if($cat2->parent){echo '<i class="fa fa-tags" aria-hidden="true"></i>';} ?>
                    <?php if($cat2->parent){echo $cat2->cat_name;} ?>
                </span>
                <span class="<?php if($cat3->parent){
                    $parent = get_category($cat3->parent);
                    echo $parent->slug;
                }else{
                    echo $cat3->slug;
                } ?>">
                    <?php if($cat3->parent){echo '<i class="fa fa-tags" aria-hidden="true"></i>';} ?>
                    <?php if($cat3->parent){echo $cat3->cat_name;} ?>
                </span>
                <span class="<?php if($cat4->parent){
                    $parent = get_category($cat4->parent);
                    echo $parent->slug;
                }else{
                    echo $cat4->slug;
                } ?>">
                    <?php if($cat4->parent){echo '<i class="fa fa-tags" aria-hidden="true"></i>';} ?>
                    <?php if($cat4->parent){echo $cat4->cat_name;} ?>
                </span>
            </div>

        </div>


        <div class="sns">
            <?php if(have_posts()): while(have_posts()):the_post(); ?>

            <a href="<?php echo post_custom('twitter'); ?>" class="sns__item sns__twitter" target="_blank">
                <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
            </a>

            <a href="<?php echo post_custom('facebook'); ?>" class="sns__item sns__facebook" target="_blank">
                <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
            </a>

            <a href="<?php echo post_custom('homepage'); ?>" class="sns__item sns__webpage" target="_blank">
                <i class="fa fa-home fa-fw" aria-hidden="true"></i>
            </a>
            <?php endwhile; endif; ?>

        </div>

        </div>

        <div class="about">
            <p class="about__description">
                <?php echo post_custom('long'); ?>
            </p>
        </div>

        <!--
<div class="chart">
<canvas id="myBarChart" width="800" height="400"></canvas>
</div>
-->
    </div>

<div class="contents">
    <div class="contentsBox">
        <div class="locationAndDate">
            <!--            <hr class="line red">-->
            <h2 class="contents__heading locationAndDate__heading">活動日 場所</h2>
            <p class="date__description">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('calendar'); ?>
                        <?php endwhile; endif; ?>
            </p>
            <p class="location__description">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('location'); ?>
                        <?php endwhile; endif; ?>
            </p>

        </div>
        <div class="number">
            <!--            <hr class="line green">-->
            <h2 class="contents__heading number__heading">人数</h2>
            <p class="number__description">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('number'); ?>
                        <?php endwhile; endif; ?>
            </p>
        </div>

        <div class="cost">
            <!--            <hr class="line yellow">-->
            <h2 class="contents__heading cost__heading">年間費</h2>
            <p class="cost__description">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <?php echo post_custom('money'); ?>
                        <?php endwhile; endif; ?>
            </p>
        </div>
    </div>
        <div class="schedule">
            <h2 class="contents__heading schedule__heading">年間スケジュール</h2>
            <hr class="line blue">
            <div class="shiki clearfix">
                <div class="pre clearfix">
                <div class="spring">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Spring.jpg" width = "80" alt="" class="spring__img">
                    <p class="spring__description">
                        <?php
                        if ( is_array( post_custom('spring') ) ) {
                            echo implode ( "<br><br>", post_custom('spring') );
                        }else{
                            echo post_custom('spring');
                        }
                        ?>
                    </p>
                </div>
                <div class="summer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Summer.jpg" width = "80" alt="" class="summer__img">
                    <p class="summer__description">
                        <?php
                        if ( is_array( post_custom('summer') ) ) {
                            echo implode ( "<br><br>", post_custom('summer') );
                        }else{
                            echo post_custom('summer');
                        }
                        ?>
                    </p>
                </div>
                </div>
                <div class="late clearfix">
                <div class="autumn">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Autumn.jpg" width = "80" alt="" class="autumn__img">
                    <p class="autumn__description">
                        <?php
                        if ( is_array( post_custom('autumn') ) ) {
                            echo implode ( "<br><br>", post_custom('autumn') );
                        }else{
                            echo post_custom('autumn');
                        }
                        ?>
                    </p>
                </div>
                <div class="winter">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Winter.jpg" width = "80" alt="" class="winter__img">
                    <p class="winter__description">
                        <?php
                        if ( is_array( post_custom('winter') ) ) {
                            echo implode ( "<br><br>", post_custom('winter') );
                        }else{
                            echo post_custom('winter');
                        }
                        ?>
                    </p>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myBarChart");
    var myBarChart = new Chart(ctx, {
        //グラフの種類
        type: 'bar',
        //データの設定
        data: {
            //データ項目のラベル

            labels: ["ウェイ", "ガヤガヤ", "真剣", "ぐびぐび"],
            //データセット
            datasets: [{
                //凡例
                label: "雰囲気チャート",
                //背景色
                backgroundColor: "rgba(0,0,0,0.4)",
                //枠線の色
                borderColor: "rgba(80,80,80,1)",
                //グラフのデータ
                data: [4, 10, 6, 4]
            }]
        },
        //オプションの設定
        options: {
            //軸の設定
            scales: {
                //縦軸の設定
                yAxes: [{
                    //目盛りの設定
                    ticks: {
                        //開始値を0にする
                        beginAtZero:true,
                    }
                }]
            }
        }
    });
</script>
<?php get_footer(); ?>
