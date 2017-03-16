<!--POST BOX-->
<li class="col-1-4">
    <?php $postImgSrc = wp_get_attachment_image_src(post_custom('image'), false);?>
    <a href="<?php the_permalink();?>" >
        <div class="wrap-col">
            <div class="random_icon" style="background: url('<?php echo $postImgSrc[0] ?> ') center center;    background-size: cover;"></div>
            <div class="random_content">
                <h2 class="random_name" style="letter-spacing: 3px;"><?php echo post_custom('name'); ?></h2>
                <div class="random_tags_parent">
                    <?php
                    $cats = get_the_category();
                    $cat1 = $cats[0];
                    $cat2 = $cats[1];
                    $cat3 = $cats[2];
                    ?>

                    <span class="<?php if($cat1->parent){
                        $parent = get_category($cat1->parent);
                        echo $parent->slug;
                    }else{
                        echo $cat1->slug;
                    } ?>">
                        <i class="fa fa-tags" aria-hidden="true"></i>
                        <?php if($cat1->parent){echo $cat1->cat_name;} ?>
                    </span>
        <!--なぜか二つ目はエラーになる-->
                    <span class="<?php if($cat2->parent){
                        $parent = get_category($cat2->parent);
                        echo $parent->slug;
                    }else{
                        echo $cat2->slug;
                    } ?>">
                        <?php if($cat2->parent){echo $cat2->cat_name;} ?>
                    </span>
                    <span class="<?php if($cat3->parent){
                        $parent = get_category($cat3->parent);
                        echo $parent->slug;
                    }else{
                        echo $cat3->slug;
                    } ?>">
                        <?php if($cat3->parent){echo $cat3->cat_name;} ?>
                    </span>


                </div>

                <div class="random_description"><?php echo post_custom('short'); ?></div>
            </div>
        </div>
    </a>
</li>
<!--POST BOX END-->
