<?php
include "./admin/conn.php";

$qry = mysqli_query($con, "SELECT * FROM blog ORDER BY id DESC LIMIT 12");
// $row = mysqli_fetch_array($qry);

?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Our Writing Samples | Graduate Academic Writers</title>
    <script>
        /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
        if (typeof WebFontConfig === "undefined") {
            WebFontConfig = new Object();
        }
        WebFontConfig['google'] = {
            families: ['Rubik:500,400', 'Poppins:400,700,500']
        };

        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>



    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet' id='opskill-css' href='assets/css/opskill-widgets.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='wp-block-library-css' href='assets/css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rt-megamenu-front-end-style-css' href='assets/css/rt-megamenu.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='assets/css/settings.css' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css' href='assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elusive-icons-css' href='assets/css/elusive-icons.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css' href='assets/css/animate.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-custom-css' href='assets/css/radiantthemes-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-responsive-css' href='assets/css/radiantthemes-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-header-style-eleven-css' href='assets/css/radiantthemes-header-style-eleven.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-footer-style-one-css' href='assets/css/radiantthemes-footer-style-one.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-user-custom-css' href='assets/css/radiantthemes-user-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-dynamic-css' href='assets/css/radiantthemes-dynamic.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-button-element-one-css' href='assets/css/radiantthemes-button-element-one.css' type='text/css' media='all' />
    <link rel="stylesheet" href="assets/css/radiantthemes-button-element-one-inline-css.css">

    <link rel='stylesheet' id='js_composer_front-css' href='assets/css/js_composer.min.css' type='text/css' media='all' />
    <link rel="stylesheet" href="css/blog/js_composer_front-inline.css">
    <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.js'></script>
    <script type='text/javascript' src='assets/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='assets/js/retina.min.js'></script>
    <link rel='shortlink' href='https://graduate-essay-helpers.com/blog.php' />

    <link rel="icon" href="images/grad_books.png" sizes="32x32" />

    <link rel="icon" href="images/grad_books.png" sizes="192x192">

    <link rel="apple-touch-icon-precomposed" href="images/grad_books.png" />

    <meta name="msapplication-TileImage" content="images/grad_books.png" />

    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <link rel="stylesheet" href="assets/css/custom-css.css">
    <link rel="stylesheet" href="assets/css/dynamic-css.css">
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>



<body data-rsssl=1 class="page-template-default page page-id-8459 wpb-js-composer js-comp-ver-6.0.3 vc_responsive" data-header-style="header-style-eleven" data-nicescroll-cursorcolor="#ffbc13" data-nicescroll-cursorwidth="7px">



    <!-- overlay -->
    <div class="overlay"></div>
    <!-- overlay -->

    <!-- scrollup -->
    <div class="scrollup left">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- scrollup -->


    <!-- radiantthemes-website-layout -->
    <div class="radiantthemes-website-layout full-width">

        <?php include "assets/header.php" ?>

        <!-- wraper_header_bannerinner -->
        <div class="wraper_inner_banner" style="background-image:url('images/Banner-Backgrund-1.png')">
            <!-- wraper_inner_banner_main -->
            <div class="wraper_inner_banner_main">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- inner_banner_main -->
                            <div class="inner_banner_main">
                                <p class="title">
                                    Testimonial </p>
                            </div>
                            <!-- inner_banner_main -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
            </div>
            <!-- wraper_inner_banner_main -->
            <!-- wraper_inner_banner_breadcrumb -->
            <div class="wraper_inner_banner_breadcrumb">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- inner_banner_breadcrumb -->
                            <div class="inner_banner_breadcrumb">
                                <div id="crumbs"><a href="https://graduate-essay-helpers.com">Home</a> <span class="gap"><i class="el el-chevron-right"></i></span> <span class="current">Our Writing Samples | Graduate Essay Writers</span></div>
                            </div>
                            <!-- inner_banner_breadcrumb -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
            </div>
            <!-- wraper_inner_banner_breadcrumb -->
        </div>
        <!-- wraper_header_bannerinner -->
        <!-- wraper_header_bannerinner -->


        <!-- #page -->
        <div id="page" class="site">
            <!-- #content -->
            <div id="content" class="site-content">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="container page-container">
                            
                            <style>
                                .wpb_wrapper .element-two .holder .main-link p {
                                    /* background: red; */
                                    overflow: hidden;
                                    display: -webkit-box;
                                    text-overflow: ellipsis;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                }
                            </style>

                            <article id="post-8459" class="post-8459 page type-page status-publish has-post-thumbnail hentry">
                                <header class="entry-header">
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <section data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section vc_custom_1562492095140">
                                        <div class="vc_row wpb_row vc_row-fluid vc_column-gap-30">
                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                <div class="vc_column-inner vc_custom_1527765435779">
                                                    <div class="wpb_wrapper">
                                                        <h6 style="font-size: 15px;color: #0c121f;line-height: 26px;text-align: left" class="vc_custom_heading font-weight-medium letter-spacing-1 vc_custom_1580476666967">BUY A PAPER</h6>
                                                        <h3 style="font-size: 30px;color: #0c121f;line-height: 40px;text-align: left" class="vc_custom_heading font-weight-bold vc_custom_1580476685758">Check our previous samples of work</h3>
                                                        <p style="color: #0c121f;text-align: left" class="vc_custom_heading vc_custom_1562510868525">The shared samples below are in acceptance for display from some of our clients.</p>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1530789923352">


                                                            <?php
                                                            while ($row = mysqli_fetch_array($qry)) {
                                                                if ($row['content'] == "") {
                                                            ?>
                                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                        <div class="vc_column-inner vc_custom_1530789866926">
                                                                            <div class="wpb_wrapper">
                                                                                <div class="wpb_single_image wpb_content_element vc_align_center   pdfimg">

                                                                                    <figure class="wpb_wrapper vc_figure">
                                                                                        <a href="<?php echo $row['file_url'] ?>" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="images/worksamplepdf-150x150.jpg" class="vc_single_image-img attachment-thumbnail" alt="" /></a>
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="rt-animated-link element-two    rt981026130">
                                                                                    <div class="holder"><a class="main-link" href="<?php echo $row['file_url'] ?>" target=" _blank" rel="nofollow">
                                                                                            <p><?php echo $row['title'] ?></p>
                                                                                        </a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                        <div class="vc_column-inner vc_custom_1530789866926">
                                                                            <div class="wpb_wrapper">
                                                                                <div class="wpb_single_image wpb_content_element vc_align_center   pdfimg">

                                                                                    <figure class="wpb_wrapper vc_figure">
                                                                                        <a href="blogpost.php?i=<?php echo $row['id'] ?>?blog=<?php echo $row['title'] ?>" class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="images/worksamplepdf-150x150.jpg" class="vc_single_image-img attachment-thumbnail" alt="" /></a>
                                                                                    </figure>
                                                                                </div>
                                                                                <div class="rt-animated-link element-two    rt981026130">
                                                                                    <div class="holder"><a class="main-link" href="blogpost.php?i=<?php echo $row['id'] ?>?blog=<?php echo $row['title'] ?>" rel="nofollow">
                                                                                            <p><?php echo $row['title'] ?></p>
                                                                                            <!-- <p><?php echo "(edited)" ?></p> -->
                                                                                        </a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            <?php

                                                                }
                                                            }
                                                            ?>


                                                        </div>
                                                        <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div>
                                                        <!-- radiantthemes-custom-button -->
                                                        <!-- <div class="radiantthemes-custom-button hover-style-four rt412486803  font-weight-medium" data-button-direction="center" data-button-fullwidth="false"><a style=" color: #ffffff; line-height: 25PX; font-size: 13PX;" class="radiantthemes-custom-button-main  vc_custom_1591361189269" href="https://drive.google.com/drive/folders/1xx0CG7dJ4_7Zo3zsOEKpfjk-OKOn4qxK" rel="nofollow" title="" target=" _blank">
                                                                <div class="placeholder">CHECK OUT MORE SAMPLES</div>
                                                            </a></div> -->
                                                        <!-- radiantthemes-custom-button -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stickycolumn sticky-wrapper wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner vc_custom_1591360995867">
                                                    <div class="wpb_wrapper">
                                                        <!-- radiantthemes-custom-menu -->
                                                        <div class="radiantthemes-custom-menu element-one rt1362274710 ">
                                                            <ul id="menu-creative-mega-menu-2" class="menu rt-mega-menu-transition-default">
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-8658"><a href="summary.php">Summary Writing</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-8656"><a href="analysis.php">Analysis</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-8661"><a href="academic-ghost-writing.php">Academic Ghost-writing</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-8660"><a href="lab-report.php">Lab Report</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-8657"><a href="letter.php">Letter</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-8655"><a href="question-and-answer.php">Question and Answer</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-8659"><a href="business-plan.php">Business plan Writing</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- radiantthemes-custom-menu -->
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1562492765484">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner vc_custom_1527836076177">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                <a href="/order/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"></a>
                                                                            </figure>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                </div><!-- .entry-content -->
                            </article><!-- #post-8459 -->
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->


            </div>
            <!-- #content -->
        </div>
        <!-- #page -->

        <!-- wraper_footer -->
        <?php include "assets/footer.php" ?>
        <!-- wraper_footer -->

    </div>
    <!-- radiantthemes-website-layout -->

    <!--Start of Tawk.to Script -->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/633ba07654f06e12d89847d1/1gegeljq6';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script -->
    <link rel='stylesheet' id='radiantthemes_animated_link_two-css' href='assets/css/radiantthemes-animated-link-element-two.css' type='text/css' media='all' />
    <link rel="stylesheet" href="assets/css/radiantthemes_animated_link_two-inline.css">
    <link rel='stylesheet' id='radiantthemes-custom-button-css' href='assets/css/radiantthemes-custom-button.css' type='text/css' media='all' />
    <style id='radiantthemes-custom-button-inline-css' type='text/css'>
        .radiantthemes-custom-button.rt294242267 .radiantthemes-custom-button-main:hover {
            background-color: #ffffff !important;
            border-top-color: #434444 !important;
            border-bottom-color: #434444 !important;
            border-left-color: #434444 !important;
            border-right-color: #434444 !important;
            color: #434444 !important;
        }
    </style>
    <link rel='stylesheet' id='radiantthemes_menu_one-css' href='assets/css/radiantthemes-menu-element-one.css' type='text/css' media='all' />
    <script type='text/javascript' src='assets/js/rt-megamenu.js'></script>
    <script type='text/javascript' src='https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.sidr.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.matchHeight-min.js'></script>
    <script type='text/javascript' src='assets/js/wow.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.nicescroll.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.sticky.min.js'></script>
    <script type='text/javascript' src='assets/js/radiantthemes-custom.js'></script>
    <script type='text/javascript' src='assets/js/wp-embed.min.js'></script>
    <script type='text/javascript' src='assets/js/js_composer_front.min.js'></script>

</body>

</html>