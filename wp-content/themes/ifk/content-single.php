<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div style="padding-top: 27px;" class="content-right float-l">
    <div class="sitemap">
        <?php the_breadcrumb(); ?>
    </div>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta" style="margin-bottom: 10px;">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
    <div class="fb-like" data-href="<?php the_permalink();?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
	<div class="entry-content" style="margin-top: 20px;">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
    <div class="fb-like" data-href="<?php the_permalink();?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
    <hr>
    <h2 style="text-transform:uppercase;margin-bottom:10px">Các tin khác</h2>
    <div class="other-news">
        <ul>
            <?php
            global $post;
            $category = get_the_category($post->ID);
            $category = $category[0]->cat_ID;
            $myposts = get_posts(array('numberposts' => 5, 'offset' => 0, 'category__in' => array($category), 'post_status'=>'publish', 'order'=>'ASC' ));
            foreach($myposts as $post) :
                setup_postdata($post);
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>&nbsp;<?php the_time('d/m/y') ?></span></li>
            <?php endforeach; ?>
            <?php wp_reset_query(); ?>
        </ul>
    </div>
    <div class="fb-comments" data-href="<?php the_permalink();?>" data-numposts="5" data-width="645" data-colorscheme="light"></div>
</div><!-- #post
