<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="wrapper" class="body_wrapper backgour-wapper">
<div style="height: 20px;"></div>
<div class="wrapper">
<div class="content-left float-l">

    <div class="sidebar_box">
        <span class="bottom"></span>
        <h3>Project</h3>
        <div class="content-box">
            <ul class="sidebar_list">
                <li class="first">
                    <a title="Residential Projects" href="/residential-projects-72">Residential Projects</a>
                </li>
                <li>
                    <a title="Urban Areas" href="/urban-areas-73">Urban Areas</a>
                </li>
                <li>
                    <a title="Commercials - Hospitality - Tourism" href="/commercials--hospitality--tourism-75">Commercials - Hospitality - Tourism</a>
                </li>
            </ul>

        </div>
    </div>


    <div class="sidebar_box">
        <span class="bottom"></span>
        <h3>
            <a target="_blank" href="#" class="sidebar_box_icon">
            </a>Projects news
        </h3>
        <div class="content-box">
            <?php
            $myposts = get_posts();
            $i=0;
            foreach($myposts as $post) :
                $i++;
                if($i >=8){break;}
                $showSlide = get_field('new_post', $post->ID);
                if($showSlide[0] == "yes"){
                    ?>
                    <div class="bs_box">
                        <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail();?></a>
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <div class="clear"></div>
                    </div>
                <?php }?>
            <?php endforeach; ?>
        </div>
    </div>


</div>
<div style="padding-top: 27px;" class="content-right float-l">
    <div class="title-box extent">
        <h3>
            <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
            ?>
        </h3>
    </div>
    <div class="list-news">

        <?php
        $catPost = get_posts($cat); //change this
        foreach ($catPost as $post) : setup_postdata($post); ?>
            <div class="items">
                <div class="box-images">
                    <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail();?></a>
                </div>
                <div class="content-items">
                    <h3>
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    </h3>
                    <p>
                        <?php the_time('d/m/y') ?>
                        <br>
                        <?php echo get_field( "description_project" );?>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        <?php  endforeach;?>



        <div class="clearfix"></div>
    </div>
    <style>
        .news-cat .item .item-review h3 a{
            color:#b200b2 !important;
        }
        .box-new-nav1 li a:before{
            background:#b200b2 !important;
        }
    </style>





</div>
<div class="clear"></div>
</div>
<div class="div-bottom"></div>

</div>
<?php get_footer(); ?>
