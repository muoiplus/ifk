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
    <div style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 989px; height: 350px; margin: 0px; overflow: hidden;" class="caroufredsel_wrapper"><div class="caroufredsel_wrapper" style="display: block; text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; z-index: auto; width: 989px; height: 350px; margin: 0px; overflow: hidden;"><div style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 10879px; height: 350px; z-index: auto; opacity: 1;" class="screen">
                <div class="slide" id="slide_5">
                    <a>
                        <div class="screen_mask"></div>
                        <div class="large_image"><img src="http://ifk.adcvietnam.vn/uploads/042014/taymo_55fed03b.jpg" alt="Lanato"></div>
                    </a>
                    <div class="info">
                        <h4><a>Lanato</a></h4>
                    </div>
                    <div class="descript">
                        <div class="des-content">
                            <h3 style="font-weight: bold; color: red;">Lanato</h3>
                            Trading corporation and application development
                            technologies Vietman, international transation name as applied
                            technology development And commerce Vietnam joint stock company
                            <div style="margin-top:10px">
                                <a class="btnSend"> Read more </a>
                            </div>
                        </div>
                    </div>
                </div><div class="slide" id="slide_1">
                    <a href="http://ifk.adcvietnam.vn/">
                        <div class="screen_mask"></div>
                        <div class="large_image"><img src="http://ifk.adcvietnam.vn/uploads/042014/taymo_55fed03b.jpg" alt="Hailinh Plaza"></div>
                    </a>
                    <div class="info">
                        <h4><a href="http://ifk.adcvietnam.vn/">Hailinh Plaza</a></h4>
                    </div>
                    <div class="descript">
                        <div class="des-content">
                            <h3 style="font-weight: bold; color: red;">Hailinh Plaza</h3>
                            Trading corporation and application development
                            technologies Vietman, international transation name as applied
                            technology development And commerce Vietnam joint stock company
                            <div style="margin-top:10px">
                                <a href="http://ifk.adcvietnam.vn/" class="btnSend"> Read more </a>
                            </div>
                        </div>
                    </div>
                </div><div class="slide" id="slide_2">
                    <a href="http://ifk.adcvietnam.vn/">
                        <div class="screen_mask"></div>
                        <div class="large_image"><img src="http://ifk.adcvietnam.vn/uploads/042014/taymo_55fed03b.jpg" alt="Fullhouse tower"></div>
                    </a>
                    <div class="info">
                        <h4><a href="http://ifk.adcvietnam.vn/">Fullhouse tower</a></h4>
                    </div>
                    <div class="descript">
                        <div class="des-content">
                            <h3 style="font-weight: bold; color: red;">Fullhouse tower</h3>
                            Trading corporation and application development
                            technologies Vietman, international transation name as applied
                            technology development And commerce Vietnam joint stock company
                            <div style="margin-top:10px">
                                <a href="http://ifk.adcvietnam.vn/" class="btnSend"> Read more </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div style="display: block; text-align: start; float: none; position: absolute; top: 208px; right: 0px; bottom: 0px; left: 730px; z-index: auto; width: 260px; height: 136px; margin: 0px; overflow: hidden;" class="caroufredsel_wrapper"><div class="caroufredsel_wrapper" style="display: block; text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; z-index: auto; width: 260px; height: 136px; margin: 0px; overflow: hidden;"><ul style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; height: 816px; width: 260px;" class="thumbnails"><li class="slide_8 selected">
                    <div class="thumb">
                        <img src="http://ifk.adcvietnam.vn/uploads/042014/55294577-1272180987-bat-dong-san-3_564dff5b.jpg" alt="The prival hotel">
                    </div>
                    <h4 class="h4">The prival hotel</h4>
                </li><li class="slide_9">
                    <div class="thumb">
                        <img src="http://ifk.adcvietnam.vn/uploads/042014/55294577-1272180987-bat-dong-san-3_564dff5b.jpg" alt="Extertion">
                    </div>
                    <h4 class="h4">Extertion</h4>
                </li><li class="slide_10">
                    <div class="thumb">
                        <img src="http://ifk.adcvietnam.vn/uploads/042014/55294577-1272180987-bat-dong-san-3_564dff5b.jpg" alt="Lanato">
                    </div>
                    <h4 class="h4">Lanato</h4>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end slide-->

<!-- start project-->
<div class="title-box">
    <h3>Projects</h3>
</div>
<div class="clear"></div>
<div class="products">
    <?php
    $category_ids = get_all_category_ids();
    unset($category_ids[0]);
    $i = 0;
    foreach($category_ids as $cat_id) {
        $i++;
        if($i >= 5){break;}
        $cat_name = get_cat_name($cat_id);
        ?>
        <div class="item">
            <a title="Residential Projects" href="<?php echo get_category_link($cat_id);?>">
                <img alt="Residential Projects" src="<?php echo z_taxonomy_image_url($cat_id); ?>">
            </a>
            <div class="content-b">
                <a href="<?php echo get_category_link($cat_id);?>"> <h3> <?php echo $cat_name;?> </h3></a>
                <?php echo category_description($cat_id);?>
            </div>
        </div>

    <?php } ?>

</div>
<div class="clear"></div>
<div class="news">
    <div class="left">
        <h3> Lettesr news </h3>
        <a href="http://ifk.adcvietnam.vn/project-69"> Read more </a>
    </div>
    <div class="center">
        <div style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 705px;" class="anyClass">
            <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 6345px; left: -2820px;">
                <?php
                $categories = get_categories(); //retrieve all the categories and save them as a variable $categories

                foreach($categories as $category) : // Use foreach to split $categories into individual categories and store as variable $category
                    ?>
                    <?php
                    $catid = $category->cat_ID; //Store the category ID as a variable to be used in WP_Query

                    $args = array(
                        'cat' => $catid,
                    );

                    $query = new WP_Query($args);

                    // Start the Loop. You can use your own loop here
                    while ( $query->have_posts() ) : $query->the_post();
                        ?>
                        <li style="overflow: hidden; float: left; width: 210px; height: 165px;">
                            <p class="date"> <?php the_date(); ?> </p>
                            <a href="<?php the_permalink() ?>"> <h3> <?php the_title(); ?> </h3></a>
                            <p>
                                <?php the_title(); ?>
                            </p>
                        </li>
                    <?php
                    endwhile;
                endforeach;
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
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
</div>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>