<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div class="body-head">
    <div class="wrapper">
        <style type="text/css">
            marquee {
                width: 990px;
                height: 90px;
            }
        </style>

        <marquee direction="left" behavior="scroll">
            <?php $upload_dir = wp_upload_dir(); ?>
            <a title="" alt="" href="/">
                <img title="" alt="" src="<?php echo $upload_dir['baseurl']; ?>/dt1_243cd2ba.png" class="img-wapper">
            </a>
            <a title="" alt="" href="/">
                <img title="" alt="" src="<?php echo $upload_dir['baseurl']; ?>/dt2_2a3e3eff.png" class="img-wapper">
            </a>
            <a title="" alt="" href="/">
                <img title="" alt="" src="<?php echo $upload_dir['baseurl']; ?>/dt3_a07e5c9d.png" class="img-wapper">
            </a>
            <a title="" alt="" href="/">
                <img title="" alt="" src="<?php echo $upload_dir['baseurl']; ?>/dt4_78d510a5.png" class="img-wapper">
            </a>
            <a title="" alt="" href="/">
                <img title="" alt="" src="<?php echo $upload_dir['baseurl']; ?>/dt5_df5ce1ea.png" class="img-wapper">
            </a>
        </marquee>
    </div>
</div>
	</div><!-- #main -->
<div class="clear"></div>
<div class="body-head footer">
    <div class="wrapper footer">
        <div class="f-left">
            <p>Copyright IFK. Design by ADC Vietnam</p>

        </div>
        <div class="f-center">
            <p>
                <a class="link-bottom" href="/"> Home </a>
                <a class="link-bottom" href="/news-67"> News </a>
                <a class="link-bottom" href="/project-69"> Project </a>
                <a class="link-bottom" href="/introduction-66"> Imprint  </a>
                <a class="link-bottom" href="/invesment-areas-68"> Legal Disclaimer </a>
                <a class="link-bottom" href="/contact-us-71"> Contact us </a>


            </p>
        </div>
        <div class="f-right">
            <p>
                Follow us:
            </p>
            <a title="" alt="" href="#">
                <img title="" alt="" src="<?php bloginfo('template_directory'); ?>/images/youtube.png" class="img-wapper">
            </a>
            <a title="" alt="" href="#">
                <img title="" alt="" src="<?php bloginfo('template_directory'); ?>/images/youtube.png" class="img-wapper">
            </a>
            <a title="" alt="" href="#">
                <img title="" alt="" src="<?php bloginfo('template_directory'); ?>/images/youtube.png" class="img-wapper">
            </a>
            <a title="" alt="" href="#">
                <img title="" alt="" src="<?php bloginfo('template_directory'); ?>/images/google.png" class="img-wapper">
            </a>
        </div>
    </div>
</div>

</body>
</html>