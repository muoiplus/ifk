<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.min.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery_002.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery_005.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery_004.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery_003.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jcarousellite_1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/utility.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
</head>

<body>
    <!-- header-->
    <div class="body-head" id="header-outer">
        <div class="wrapper">
            <div class="header">
                <div class="site_title">
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" style="float: left; margin-top: 12px;" alt="IFK" title="IFK">
                    </a>
                </div>
                <div class="header_right">
                    <div class="language">

                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/images/en-US.png" title="English" alt="en-US.png">English
                        </a>
                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/images/ru-RU.png" title="Russia" alt="ru-RU.png">Russia
                        </a>
                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/images/de-DE.png" title="Germany" alt="de-DE.png">Germany
                        </a>

                        <div class="clear"></div>
                    </div>
                    <div class="search">
                        <form method="get" action="/tim-kiem">
                            <input name="keyword" id="keyword" title="keyword" class="txt_field" placeholder="Search here" type="text">
                            <input value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn" type="submit">
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        var url = window.location.href;

                        activeMenu(url);

                        var a = $(".sitemap a");

                        if (a.length > 0) {
                            activeMenu(a.last().attr("href"));
                        }
                    });

                    function activeMenu(url) {
                        url = url.substring(url.lastIndexOf("/"), url.length);

                        $("ul.ul-main-menu a").each(function () {
                            var _this = $(this);
                            var href = _this.attr("href");
                            href = href.substring(href.lastIndexOf("/"), href.length);

                            if (href != url) {
                                return;
                            }
                            console.log(href.indexOf(url));
                            var parent = _this.parent();
                            var _class = parent.parent().attr("class");

                            while (_class == null || _class.indexOf("ul-main-menu") == -1) {
                                parent = parent.parent();
                                _class = parent.parent().attr("class");
                            }

                            parent.addClass("active");
                        });
                    }
                </script>



                <div class="menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </div>

            </div>
        </div>
    </div>
    <!-- end header-->