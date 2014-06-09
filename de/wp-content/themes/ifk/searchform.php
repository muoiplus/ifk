<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/de/' ) ); ?>">
		<input id="keyword" title="keyword" name="s" id="s" class="txt_field" placeholder="Search here" type="text"/>
		<input type="submit" class="submit sub_btn" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
	</form>
