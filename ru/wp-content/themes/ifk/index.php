<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

<div id="wrapper" class="body_wrapper backgour-wapper">
<div style="height: 20px;"></div>
<div class="wrapper">
<!-- start slide-->
    <div id="slideshow">
        <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 989px; height: 350px; margin: 0px; overflow: hidden;">
            <div class="screen" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 10879px; height: 350px; z-index: auto; opacity: 1;">
                    <?php
                    $myposts = get_posts();
                    foreach($myposts as $post) :
                        $showSlide = get_field('anable_slide_home_page', $post->ID);
                        if($showSlide[0] == "yes"){
                        ?>
                        <div class="slide" id="slide_<?php echo get_the_ID();?>">
                            <a>
                                <div class="screen_mask"></div>
                                <div class="large_image">
                                    <?php echo the_post_thumbnail();?>
                                </div>
                            </a>
                            <div class="info">
                                <h4><a><?php the_title(); ?></a></h4>
                            </div>
                            <div class="descript">
                                <div class="des-content">
                                    <h3 style="font-weight: bold; color: red;"><?php the_title(); ?></h3>
                                    <?php echo get_field( "description_project" );?>
                                    <div style="margin-top:10px">
                                        <a class="btnSend" href="<?php the_permalink();?>"> Read more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php }?>
                    <?php endforeach; ?>
            </div>
        </div>
        <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: absolute; top: auto; right: 0px; bottom: 0px; left: auto; z-index: auto; width: 260px; height: 136px; margin: 0px; overflow: hidden;">
            <ul class="thumbnails" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; height: 816px; width: 260px;">
                    <?php
                    $myposts = get_posts();
                    foreach($myposts as $post) :
                        $showSlide = get_field('anable_slide_home_page', $post->ID);
                        if($showSlide[0] == "yes"){
                        ?>
                        <li class="slide_<?php echo get_the_ID();?> selected">
                            <div class="thumb">
                                <?php echo the_post_thumbnail();?>
                            </div>
                            <h4 class="h4"><?php the_title(); ?></h4>
                        </li>
                        <?php }?>
                    <?php endforeach; ?>
            </ul>
        </div>
    </div>
<!-- end slide-->
    <div class="clear"></div>
<!-- start project-->
<div class="title-box">
    <h3>Projects</h3>
</div>
<div class="clear"></div>
<div class="products">
    <?php
    $category_ids = get_all_category_ids();
//    unset($category_ids[0]);
    $i = 0;
    foreach($category_ids as $cat_id) {
        $i++;
        if($i > 5){break;}
        $cat_name = get_cat_name($cat_id);
        if($cat_name !="Uncategorized"){
        ?>
        <div class="item">
            <a title="<?php echo $cat_name;?>" href="<?php echo get_category_link($cat_id);?>">
                <img alt="<?php echo $cat_name;?>" src="<?php echo z_taxonomy_image_url($cat_id); ?>">
            </a>
            <div class="content-b">
                <a href="<?php echo get_category_link($cat_id);?>"> <h3> <?php echo $cat_name;?> </h3></a>
                <?php echo category_description($cat_id);?>
            </div>
        </div>
    <?php }} ?>

</div>
<div class="clear"></div>
<div class="news">
    <div class="left">
        <h3> Lettesr news </h3>
        <a href="#"> Read more </a>
    </div>
    <div class="center">
        <div style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 705px;" class="anyClass">
            <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 6345px; left: -2820px;">

                <?php
                $debut = 0; //The first article to be displayed
                ?>
                <?php while(have_posts()) : the_post(); ?>
                        <?php
                        $myposts = get_posts('numberposts=-1&offset=$debut');
                        foreach($myposts as $post) :
                            ?>
                            <li style="overflow: hidden; float: left; width: 210px; height: 165px;">
                                <p class="date"> <?php the_time('d/m/y') ?> </p>
                                <a href="<?php the_permalink() ?>"> <h3> <?php the_title(); ?> </h3></a>
                                <p>
                                    <?php the_title(); ?>
                                </p>
                            </li>
                        <?php endforeach; ?>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="right">
        <a class="prev" href="#">
            <img src="<?php bloginfo('template_directory'); ?>/images/pre.png">
        </a>
        <a class="next" href="#">
            <img src="<?php bloginfo('template_directory'); ?>/images/next.png">
        </a>
    </div>
</div>
<div class="clear"></div>

</div>
    <div class="div-bottom"></div>
</div>

<?php if (function_exists (Ihrss)) Ihrss(); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>