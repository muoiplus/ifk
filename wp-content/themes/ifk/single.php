<?php
/**
 * The Template for displaying all single posts.
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

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #wrapper -->
		</div><!-- #wrapper -->

<?php get_footer(); ?>
<div id="fb-root"></div>
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>