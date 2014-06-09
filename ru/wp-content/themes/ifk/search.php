<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>


<div id="wrapper" class="body_wrapper backgour-wapper">
    <div style="height: 20px;"></div>
    <div class="wrapper">
        <div class="title-box">
            <h3>Kêt quả tìm kiếm</h3>
        </div>
        <div class="clear"></div>
        <div style="padding-bottom: 10px;" class="products">
        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="item">
                    <div class="item-imagebox">
                        <a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail();?></a>
                    </div>
                    <div class="item-review">
                        <p class="date"><?php the_time('d/m/y') ?></p>

                        <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>

                        <p>IsraelValley News</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endwhile; ?>
            <?php endif;?>
            <div class="clear"></div>
        </div>
</div>
<?php get_footer(); ?>