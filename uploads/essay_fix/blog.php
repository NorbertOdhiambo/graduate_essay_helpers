<?php
include "./admin/conn.php";
// include "./admin/auth.php";

$qry = mysqli_query($con, "SELECT * FROM blog ORDER BY id DESC LIMIT 12");
// $row = mysqli_fetch_array($qry);

?>

<!doctype html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <title>Our Writing Samples | Graduate Essay Helpers</title>

    <link rel='stylesheet' id='opskill-css' href='https://akademicwriters.com/wp-content/plugins/opskill-widgets/css/opskill-widgets.css?ver=1.0' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='wp-block-library-css' href='https://akademicwriters.com/wp-includes/css/dist/block-library/style.min.css?ver=5.2.16' type='text/css' media='all' />
    <link rel='stylesheet' id='rt-megamenu-front-end-style-css' href='https://akademicwriters.com/wp-content/plugins/radiantthemes-mega-menu/assets/css/rt-megamenu.css?ver=5.2.16' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='https://akademicwriters.com/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.8.3' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elusive-icons-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/elusive-icons.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/animate.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-custom-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/radiantthemes-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-responsive-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/radiantthemes-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-header-style-eleven-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/radiantthemes-header-style-eleven.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-footer-style-one-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/radiantthemes-footer-style-one.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-style-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/style.css?ver=5.2.16' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-user-custom-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/radiantthemes-user-custom.css?ver=1664082077' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-dynamic-css' href='https://akademicwriters.com/wp-content/themes/Akademicwriters/css/radiantthemes-dynamic.css?ver=1664082077' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-button-element-one-css' href='https://akademicwriters.com/wp-content/plugins/radiantthemes-addons/button/css/radiantthemes-button-element-one.css?ver=5.2.16' type='text/css' media='all' />
    <style id='radiantthemes-button-element-one-inline-css' type='text/css'>
        .gdpr-notice .btn,
        .team.element-six .team-item>.holder .data .btn,
        .radiantthemes-button>.radiantthemes-button-main,
        .rt-fancy-text-box>.holder>.more .btn,
        .rt-call-to-action-wraper .rt-call-to-action-item .btn:hover,
        .radiant-contact-form .form-row input[type=submit],
        .wraper_error_main.style-one .error_main .btn,
        .wraper_error_main.style-two .error_main .btn,
        .wraper_error_main.style-three .error_main_item .btn,
        .wraper_error_main.style-four .error_main .btn {
            border-radius: 30px 30px 30px 30px;
        }
    </style>


    <link rel='stylesheet' id='js_composer_front-css' href='https://akademicwriters.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.0.3' type='text/css' media='all' />
    <style id='js_composer_front-inline-css' type='text/css'>
        .vc_custom_1562492095140 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 40px !important;
            padding-bottom: 75px !important;
        }

        .vc_custom_1527765435779 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .vc_custom_1591360995867 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1580476666967 {
            margin-top: 0px !important;
            margin-bottom: 12px !important;
            padding-top: 0px !important;
        }

        .vc_custom_1580476685758 {
            margin-top: 0px !important;
            margin-bottom: 20px !important;
        }

        .vc_custom_1562510868525 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .vc_custom_1530789923352 {
            margin-top: 40px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1530789923352 {
            margin-top: 40px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1530789923352 {
            margin-top: 40px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1530789923352 {
            margin-top: 40px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1591361189269 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            border-top-width: 2px !important;
            border-right-width: 2px !important;
            border-bottom-width: 2px !important;
            border-left-width: 2px !important;
            padding-top: 10px !important;
            padding-right: 35px !important;
            padding-bottom: 11px !important;
            padding-left: 35px !important;
            background-color: #f80303 !important;
            border-left-color: #f80303 !important;
            border-right-color: #f80303 !important;
            border-top-color: #f80303 !important;
            border-bottom-color: #f80303 !important;
            border-radius: 5px !important;
        }

        .vc_custom_1580476579926 {
            margin-top: 40px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1530789866926 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1530789866926 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1530789866926 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1530789866926 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1530789866926 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1562492698419 {
            margin-top: 45px !important;
            margin-right: 0px !important;
            margin-bottom: 45px !important;
            margin-left: 0px !important;
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            padding-top: 16px !important;
            padding-right: 10px !important;
            padding-bottom: 16px !important;
            padding-left: 10px !important;
            border-left-color: #d3d3d3 !important;
            border-left-style: solid !important;
            border-right-color: #d3d3d3 !important;
            border-right-style: solid !important;
            border-top-color: #d3d3d3 !important;
            border-top-style: solid !important;
            border-bottom-color: #d3d3d3 !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1562492765484 {
            margin-top: 0px !important;
            margin-right: 0px !important;
            margin-bottom: 0px !important;
            margin-left: 0px !important;
            padding-top: 20px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1527833921599 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1527835138751 {
            padding-bottom: 16px !important;
        }

        .vc_custom_1527835351771 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1527836076177 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }
    </style>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/plugins/opskill-widgets/css/jquery.min.js?ver=12.0'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.8.3'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.8.3'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/themes/Akademicwriters/js/retina.min.js?ver=1'></script>

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
    <style type="text/css" id="wp-custom-css">
        /*footer padding*/
        .wraper_footer_main>.container {
            padding-top: 30px;
            padding-bottom: 0px;
        }

        /*box shadow*/
        .software-firm-journeys-box-item {
            box-shadow: 0 0px 25px rgba(0, 0, 0, 0.15);
        }

        /*menu icon size & icon*/
        .fa {
            font-size: 20px;
            padding-right: 5px;
        }

        /*displaying 2 colums side by side on mobile*/
        @media (max-width: 767px) {
            .custom-x-1-3 {
                width: 50% !important;
                float: left !important;
                margin-right: 0% !important;
                margin-left: 0% !important;
            }
        }

        /*breadcrumb color*/
        .inner_banner_main .title {
            color: #cddbf8 !important;
        }

        /*footer padding bottom*/
        .footer_main_item {
            margin-bottom: 0px;
        }

        /*social icon color on footer*/
        .footer_main_item ul.social li a {
            display: block;
            width: 30px;
            height: 30px;
            background-color: initial;
            border: 1px rgba(255, 255, 255, 0.3) solid;
            border-radius: 30%;
            text-align: center;
            color: rgb(255, 255, 255);
        }


        /*sticky menu */
        .wraper_header.floating-header {
            position: fixed;
            background-color:
                #c8d9f8 !important;
        }

        /*Header cust*/
        .wraper_header_main>.container {
            padding-top: 20px;
            padding-bottom: 0px;
        }

        .header_main .brand-logo {
            float: left;
            margin-top: -12px;
            text-align: center;
            font-size: 0;
        }

        .header_main .brand-logo img {
            max-width: 210px;
        }

        /*menu padding top*/
        .nav {
            float: right;
            margin-top: 25px;
            text-align: right;
        }

        /*menu button padding top*/
        .header_main_action_buttons {
            float: right;
            margin-top: 15px;
            margin-left: 20px;
            text-align: center;
            font-size: 0;
        }

        /*mobile menu icon*/
        .header_main .responsive-nav {
            float: right;
            margin-top: 25px;
        }

        /*menu padding right*/
        .nav>[class*="menu-"]>ul.menu>li {
            position: relative;
            display: inline-block;
            vertical-align: top;
            width: auto;
            height: auto;
            margin-right: 25px;
        }

        .btn-group .btn+.btn,
        .btn-group .btn+.btn-group,
        .btn-group .btn-group+.btn,
        .btn-group .btn-group+.btn-group {
            margin-left: 0px;
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        /*center button text*/
        .btn-group>.btn {
            position: relative;
            float: left;
            text-align: center !important;
        }

        .btn:focus,
        .btn:hover {
            text-decoration: none;
            background-color: #2c3e50 !important;
            color: #fff
        }

        .btn.btn-default.active,
        .btn-default:active,
        .open>.dropdown-toggle.btn-default {
            color: #fff !important;
            background-color: #2c3e50 !important;
            border-color: #adadad;
        }

        .btn-success {
            color:
                #fff;
            background-color:
                #f80303;
            border-color:
                #f80303;
        }

        .text-success {
            color:
                #f80303 !important;
        }

        /*form adding buttons*/
        .input-group-btn {
            width: 29%;
        }

        .form-control {
            display: inline;
        }

        #myTab {
            float: left !important;
            margin-top: 0px !important;
            display: contents !important;
        }

        hr {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        @media (max-width: 767px) {
            .input-group .form-control {
                position: relative;
                z-index: 2;
                float: left;
                width: 40%;
                margin-bottom: 0;
            }
        }

        .header_main_action_buttons .btn {
            border-radius: 5px;
        }

        .btn-primary {
            color:
                #fff;
            background-color:
                #f80303;
            border-color:
                #f80303;
            float: right;
        }

        .testimonial.element-four .testimonial-item>.holder>.testimonial-pic>.testimonial-title-pic {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0px;
            left: 152px !important;
            z-index: 1;
            background: center top no-repeat;
            background-image: none;
            background-size: auto;
            background-size: cover;
        }

        /*menu close*/
        .mobile-menu-close {
            padding: 10px 15px 8px 15px;
            border-bottom: 1px rgba(0, 0, 0, 0.075) solid;
            text-align: center;
            cursor: pointer;
        }

        .mobile-menu-nav>[class*="menu-"]>ul.menu>li.menu-item-has-children>.radiantthemes-open-submenu {
            width: 100px;
        }

        .mobile-menu-nav>[class*="menu-"]>ul.menu>li.menu-item-has-children>.radiantthemes-open-submenu::before {
            content: "+";
            font-size: 230%;
            line-height: 47px;
        }

        .fa-bars {
            font-size: 25px;
            padding-right: 5px;
        }

        element {}

        .testimonial.element-four .testimonial-item>.holder>.testimonial-data .title {
            margin-bottom: 3px;
            font-weight: 700 !important;
            color: #2c3e50 !important;
        }

        .testimonial.element-five .testimonial-item>.holder>.testimonial-data .btn {
            display: none !important;
        }

        .order-image {
            max-width: 65% !important;
        }

        .vc_custom_1580475232462 {
            border-radius: 5px !important;
        }

        .radiantthemes-custom-button.rt471629194 .radiantthemes-custom-button-main:hover {
            background-color: #2c3e50 !important;
        }

        .radiantthemes-custom-button.rt606432727 .radiantthemes-custom-button-main:hover {
            background-color: #2c3e50 !important;
        }

        .vc_custom_1562867186665 {
            background-color: #f80303 !important;
            color: #fff !important;
        }

        .rt-call-to-action-wraper.element-one .rt-call-to-action-item .btn:hover {
            background-color: #2c3e50 !important;
            color: #FFFFFF;
        }

        .btn-warning {
            color: #fff;
            background-color: #f80303;
            border-color: #eea23600;
            padding-top: 10px !important;
            padding-bottom: 10px !important;
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #ec971f;
            border-color: #d5851200;
        }

        .btn:focus,
        .btn:hover {
            text-decoration: none;
            background-color: #2c3e50 !important;
            color: #fff;
        }

        .vc_custom_1562101931924 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            border-right-width: 1px !important;
            padding-top: 0px !important;
            padding-right: 15px !important;
            padding-bottom: 0px !important;
            padding-left: 15px !important;
            border-right-style: none !important;
        }

        /*post styling hiding date*/
        .published-on {
            display: none;
        }

        .post.single-post .entry-header .entry-meta>.holder>.author-image {
            position: absolute;
            top: -11px;
            left: 0;
            z-index: 1;
            width: 50px;
            height: auto;
            text-align: center;
        }

        .related-post-box-item>.holder>.title .date {
            margin-bottom: 7px;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 10px;
            color: #0c121f;
            line-height: 20px;
            letter-spacing: 1px;
            display: none;
        }

        .post.style-four .post-meta>span::after {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            width: 7px;
            height: 2px;
            margin-left: 7px;
            margin-right: 7px;
            background-color: #999;
            display: none;
        }

        .date {
            display: none;
        }

        .btn-warning {
            color: #fff;
            background-color: #f80303;
            border-color: #eea23600;
            padding-top: 4px !important;
            padding-bottom: 4px !important;
        }

        .btn-danger {
            color: #fff;
            background-color: #f80303;
            border-color: #f80303;
        }

        .btn-info {
            color: #fff;
            background-color: #f80303;
            border-color: #f80303;
        }

        .submitall {
            text-align: center;
        }

        .btn-danger:hover {
            color: #fff;
            border-color: #2c3e50 !important;
        }

        .orderhire-bg.border.rounded:hover {
            background-color: #2c3e50 !important;
        }

        .btn-outline:hover,
        .btn-outline:focus,
        .btn-outline:active,
        .btn-outline.active {
            color: #ffffff !important;
            border-color: #4eafcb;
            background-color: #2c3e50 !important;
        }

        .pdfimg {
            margin-bottom: 5px !important;
        }

        .rt-animated-link.element-two>.holder>.main-link {
            position: relative;
            display: inline-block;
            vertical-align: top;
            font-weight: 500;
            font-size: 14px !important;
            line-height: 28px;
        }

        .wpb_single_image.wpb_content_element.vc_align_center.pdfimg:hover {
            transform: scale(1.09);
        }


        a.radiantthemes-button-main {
            background-color: #f80303 !important;
            border-radius: 5px !important;
        }

        a.radiantthemes-button-main:hover {
            background-color: #167397 !important;
            border-radius: 5px !important;
        }

        #tawkchat-message-preview-messages-container .messageBody {
            background-color: #f80303 !important;
            color: #fff !important;
        }

        #tawkchat-message-preview-messages-container .message {
            color: #fff;
            font-weight: 400;
            font-size: 14px;
            white-space: pre-wrap;
            white-space: -moz-pre-wrap;
            white-space: -pre-wrap;
            white-space: -o-pre-wrap;
            word-wrap: break-word;
        }
    </style>
    <style type="text/css" title="dynamic-css" class="options-output">
        body {
            background-color: #ffffff;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 28px;
            font-weight: 400;
            font-style: normal;
            color: #0f192d;
            font-size: 15px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body {
            opacity: 0;
        }

        .ie.wf-loading body {
            visibility: hidden;
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 48px;
            letter-spacing: -1px;
            font-weight: 700;
            font-style: normal;
            color: #0f192d;
            font-size: 40px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h1 {
            opacity: 0;
        }

        .ie.wf-loading h1 {
            visibility: hidden;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 48px;
            letter-spacing: -1px;
            font-weight: 700;
            font-style: normal;
            color: #0f192d;
            font-size: 40px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h2 {
            opacity: 0;
        }

        .ie.wf-loading h2 {
            visibility: hidden;
        }

        h3 {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 48px;
            letter-spacing: -1px;
            font-weight: 700;
            font-style: normal;
            color: #0f192d;
            font-size: 40px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h3 {
            opacity: 0;
        }

        .ie.wf-loading h3 {
            visibility: hidden;
        }

        h4 {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 35px;
            font-weight: 700;
            font-style: normal;
            color: #0f192d;
            font-size: 30px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h4 {
            opacity: 0;
        }

        .ie.wf-loading h4 {
            visibility: hidden;
        }

        h5 {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 26px;
            font-weight: normal;
            font-style: normal;
            color: #0f192d;
            font-size: 18px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h5 {
            opacity: 0;
        }

        .ie.wf-loading h5 {
            visibility: hidden;
        }

        h6 {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 26px;
            font-weight: normal;
            font-style: normal;
            color: #0f192d;
            font-size: 15px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h6 {
            opacity: 0;
        }

        .ie.wf-loading h6 {
            visibility: hidden;
        }

        .wraper_header.style-one .wraper_header_main {
            background-color: rgba(0, 0, 0, 0.01);
        }

        .wraper_header.style-one .wraper_header_main {
            border-bottom-color: rgba(255, 255, 255, 0.2);
        }

        .wraper_header.style-one .is-sticky .wraper_header_main {
            background-color: rgba(0, 0, 0, 0.85);
        }

        .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>a {
            font-family: Rubik;
            text-transform: uppercase;
            line-height: 27px;
            font-weight: 500;
            font-style: normal;
            color: #ffffff;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>a {
            visibility: hidden;
        }

        .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            font-family: Rubik;
            text-align: left;
            text-transform: uppercase;
            line-height: 25px;
            font-weight: 400;
            font-style: normal;
            color: #0c121f;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-one .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            visibility: hidden;
        }

        .wraper_header.style-one .header_main_action ul>li.header-cart-bar i {
            color: #ffffff;
        }

        .wraper_header.style-one .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-one .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #ffffff;
        }

        .wraper_flyout_search.header-style-one {
            background-color: rgba(0, 0, 0, 0.85);
        }

        .wraper_header.style-one .header_main_action ul>li.header-hamburger i {
            color: #ffffff;
        }

        body[data-header-style="header-style-one"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-one .header_main .responsive-nav i {
            color: #838383;
        }

        body[data-header-style="header-style-one"] #mobile-menu {
            background-color: #ffffff;
        }

        body[data-header-style="header-style-one"] .mobile-menu-nav {
            font-family: Poppins;
            text-transform: uppercase;
            line-height: 27px;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-style: normal;
            color: #838383;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body[data-header-style="header-style-one"] .mobile-menu-nav {
            opacity: 0;
        }

        .ie.wf-loading body[data-header-style="header-style-one"] .mobile-menu-nav {
            visibility: hidden;
        }

        body[data-header-style="header-style-one"] .mobile-menu-close i {
            color: #838383;
        }

        .wraper_header.style-two .wraper_header_main {
            background-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>a {
            font-family: Rubik;
            text-transform: uppercase;
            line-height: 27px;
            font-weight: 500;
            font-style: normal;
            color: #454545;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>a {
            visibility: hidden;
        }

        .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            font-family: Rubik;
            text-align: left;
            text-transform: uppercase;
            line-height: 25px;
            font-weight: 400;
            font-style: normal;
            color: #454545;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-two .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            visibility: hidden;
        }

        .wraper_header.style-two .header_main_action ul>li.header-cart-bar i {
            color: #454545;
        }

        .wraper_header.style-two .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-two .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #454545;
        }

        .wraper_header.style-two .header_main_action ul>li.header-hamburger i {
            color: #454545;
        }

        body[data-header-style="header-style-two"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-two .header_main .responsive-nav i {
            color: #ffffff;
        }

        body[data-header-style="header-style-two"] #mobile-menu {
            background-color: #ffffff;
        }

        body[data-header-style="header-style-two"] .mobile-menu-nav {
            font-family: Poppins;
            text-transform: uppercase;
            line-height: 27px;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-style: normal;
            color: #838383;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body[data-header-style="header-style-two"] .mobile-menu-nav {
            opacity: 0;
        }

        .ie.wf-loading body[data-header-style="header-style-two"] .mobile-menu-nav {
            visibility: hidden;
        }

        body[data-header-style="header-style-two"] .mobile-menu-close i {
            color: #838383;
        }

        .wraper_header.style-three .wraper_header_top {
            background-color: rgba(0, 0, 0, 0.01);
        }

        .wraper_header.style-three .wraper_header_top {
            border-bottom-color: rgba(255, 255, 255, 0.1);
        }

        .wraper_header.style-three .wraper_header_main {
            background-color: rgba(0, 0, 0, 0.01);
        }

        .wraper_header.style-three .wraper_header_main {
            border-bottom-color: rgba(255, 255, 255, 0.1);
        }

        .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>a {
            font-family: Rubik;
            text-transform: uppercase;
            line-height: 27px;
            font-weight: 500;
            font-style: normal;
            color: #ffffff;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>a {
            visibility: hidden;
        }

        .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            font-family: Rubik;
            text-align: left;
            text-transform: uppercase;
            line-height: 25px;
            font-weight: 400;
            font-style: normal;
            color: #0c121f;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-three .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            visibility: hidden;
        }

        .wraper_header.style-three .header_main_action ul>li.header-cart-bar i {
            color: #ffffff;
        }

        .wraper_header.style-three .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-three .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #ffffff;
        }

        .wraper_header.style-three .header_main_action ul>li.header-hamburger i {
            color: #ffffff;
        }

        body[data-header-style="header-style-three"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-three .header_main .responsive-nav i {
            color: #838383;
        }

        body[data-header-style="header-style-three"] #mobile-menu {
            background-color: #ffffff;
        }

        body[data-header-style="header-style-three"] .mobile-menu-nav {
            font-family: Poppins;
            text-transform: uppercase;
            line-height: 27px;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-style: normal;
            color: #838383;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body[data-header-style="header-style-three"] .mobile-menu-nav {
            opacity: 0;
        }

        .ie.wf-loading body[data-header-style="header-style-three"] .mobile-menu-nav {
            visibility: hidden;
        }

        body[data-header-style="header-style-three"] .mobile-menu-close i {
            color: #838383;
        }

        .wraper_header.style-four .wraper_header_main {
            background-color: rgba(0, 0, 0, 0.01);
        }

        .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>a {
            font-family: Rubik;
            line-height: 28px;
            font-weight: 500;
            font-style: normal;
            color: #ffffff;
            font-size: 17px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>a {
            visibility: hidden;
        }

        .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            font-family: Rubik;
            text-align: left;
            text-transform: uppercase;
            line-height: 25px;
            font-weight: 400;
            font-style: normal;
            color: #0c121f;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-four .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            visibility: hidden;
        }

        .wraper_header.style-four .header_main_action ul>li.header-cart-bar i {
            color: #ffffff;
        }

        .wraper_header.style-four .header_main_action ul>li.header-hamburger i {
            color: #ffffff;
        }

        body[data-header-style="header-style-four"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-four .header_main .responsive-nav i {
            color: #838383;
        }

        body[data-header-style="header-style-four"] #mobile-menu {
            background-color: #ffffff;
        }

        body[data-header-style="header-style-four"] .mobile-menu-nav {
            font-family: Poppins;
            text-transform: uppercase;
            line-height: 27px;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-style: normal;
            color: #838383;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body[data-header-style="header-style-four"] .mobile-menu-nav {
            opacity: 0;
        }

        .ie.wf-loading body[data-header-style="header-style-four"] .mobile-menu-nav {
            visibility: hidden;
        }

        body[data-header-style="header-style-four"] .mobile-menu-close i {
            color: #838383;
        }

        .wraper_header.style-five .wraper_header_main {
            background-color: rgba(255, 255, 255, 0.75);
        }

        .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>a {
            font-family: Rubik;
            line-height: 28px;
            font-weight: 400;
            font-style: normal;
            color: #0c121f;
            font-size: 16px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>a {
            visibility: hidden;
        }

        .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            font-family: Rubik;
            text-align: left;
            text-transform: uppercase;
            line-height: 25px;
            font-weight: 400;
            font-style: normal;
            color: #0c121f;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-five .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            visibility: hidden;
        }

        .wraper_header.style-five .header_main_action ul>li.header-cart-bar i {
            color: #454545;
        }

        .wraper_header.style-five .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-five .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #454545;
        }

        .wraper_header.style-five .header_main_action ul>li.header-hamburger i {
            color: #454545;
        }

        body[data-header-style="header-style-five"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-five .header_main .responsive-nav i {
            color: #838383;
        }

        body[data-header-style="header-style-five"] #mobile-menu {
            background-color: #ffffff;
        }

        body[data-header-style="header-style-five"] .mobile-menu-nav {
            font-family: Poppins;
            text-transform: uppercase;
            line-height: 27px;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-style: normal;
            color: #838383;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body[data-header-style="header-style-five"] .mobile-menu-nav {
            opacity: 0;
        }

        .ie.wf-loading body[data-header-style="header-style-five"] .mobile-menu-nav {
            visibility: hidden;
        }

        body[data-header-style="header-style-five"] .mobile-menu-close i {
            color: #838383;
        }

        .wraper_header.style-six .wraper_header_main {
            background-color: rgba(0, 0, 0, 0.01);
        }

        .wraper_header.style-six .header_main_action ul>li.header-cart-bar i {
            color: #ffffff;
        }

        .wraper_header.style-six .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-six .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #ffffff;
        }

        .wraper_header.style-six .header_main_action ul>li.header-hamburger i {
            color: #ffffff;
        }

        body[data-header-style="header-style-six"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-seven .wraper_header_main {
            background-color: rgba(0, 0, 0, 0.01);
        }

        .wraper_header.style-seven .header_main_action ul>li.header-cart-bar i {
            color: #0c121f;
        }

        .wraper_header.style-seven .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-seven .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #0c121f;
        }

        .wraper_header.style-seven .header_main_action ul>li.header-hamburger i {
            color: #0c121f;
        }

        body[data-header-style="header-style-seven"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-eight .wraper_header_main {
            background-color: #ffffff;
        }

        .wraper_header.style-eight .wraper_header_main {
            border-bottom-color: rgba(0, 0, 0, 0.07);
        }

        .wraper_header.style-eight .header_main_action ul>li.header-cart-bar i {
            color: #030712;
        }

        .wraper_header.style-eight .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-eight .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #030712;
        }

        .wraper_header.style-eight .header_main_action ul>li.header-hamburger i {
            color: #030712;
        }

        body[data-header-style="header-style-eight"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-nine .wraper_fullwidth_menu {
            background-color: #ffffff;
        }

        .wraper_header.style-nine .wraper_fullwidth_menu .full-inner nav {
            font-family: Poppins;
            line-height: 47px;
            letter-spacing: -1px;
            font-weight: 700;
            font-style: normal;
            color: #252525;
            font-size: 40px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-nine .wraper_fullwidth_menu .full-inner nav {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-nine .wraper_fullwidth_menu .full-inner nav {
            visibility: hidden;
        }

        .wraper_header.style-nine .wraper_fullwidth_menu .full-inner nav ul li ul {
            font-family: Poppins;
            line-height: 23px;
            font-weight: 500;
            font-style: normal;
            color: #252525;
            font-size: 15px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-nine .wraper_fullwidth_menu .full-inner nav ul li ul {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-nine .wraper_fullwidth_menu .full-inner nav ul li ul {
            visibility: hidden;
        }

        .wraper_header.style-nine .header_main_action ul>li.header-cart-bar i {
            color: #030712;
        }

        .wraper_header.style-nine .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-nine .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #030712;
        }

        .wraper_header.style-ten .wraper_header_top {
            background-color: #ffffff;
        }

        .wraper_header.style-ten .wraper_header_main {
            background-color: #bf9e58;
        }

        .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>a {
            font-family: Rubik;
            text-transform: uppercase;
            line-height: 27px;
            font-weight: 500;
            font-style: normal;
            color: #ffffff;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>a {
            visibility: hidden;
        }

        .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            font-family: Rubik;
            text-align: left;
            text-transform: uppercase;
            line-height: 25px;
            font-weight: 400;
            font-style: normal;
            color: #454545;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-ten .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            visibility: hidden;
        }

        .wraper_header.style-ten .header_main_action ul>li.header-cart-bar i {
            color: #ffffff;
        }

        .wraper_header.style-ten .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-ten .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #ffffff;
        }

        .wraper_header.style-ten .header_main_action ul>li.header-hamburger i {
            color: #ffffff;
        }

        body[data-header-style="header-style-ten"] #hamburger-menu {
            background-color: #ffffff;
        }

        .wraper_header.style-ten .header_main .responsive-nav i {
            color: #838383;
        }

        body[data-header-style="header-style-ten"] #mobile-menu {
            background-color: #ffffff;
        }

        body[data-header-style="header-style-ten"] .mobile-menu-nav {
            font-family: Poppins;
            text-transform: uppercase;
            line-height: 27px;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-style: normal;
            color: #838383;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body[data-header-style="header-style-ten"] .mobile-menu-nav {
            opacity: 0;
        }

        .ie.wf-loading body[data-header-style="header-style-ten"] .mobile-menu-nav {
            visibility: hidden;
        }

        body[data-header-style="header-style-ten"] .mobile-menu-close i {
            color: #838383;
        }

        .wraper_header.style-eleven .wraper_header_main {
            background-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_header.style-eleven .is-sticky .wraper_header_main {
            background-color: rgba(255, 255, 255, 0.85);
        }

        .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>a {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 27px;
            font-weight: normal;
            font-style: normal;
            color: #000000;
            font-size: 15px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>a {
            visibility: hidden;
        }

        .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            font-family: Arial, Helvetica, sans-serif;
            text-align: left;
            line-height: 25px;
            font-weight: 400;
            font-style: normal;
            color: #454545;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-eleven .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            visibility: hidden;
        }

        .wraper_header.style-eleven .header_main_action_buttons .btn.btn-one {
            background-color: #f80303;
        }

        .wraper_header.style-eleven .header_main .responsive-nav i {
            color: #838383;
        }

        body[data-header-style="header-style-eleven"] #mobile-menu {
            background-color: #ffffff;
        }

        body[data-header-style="header-style-eleven"] .mobile-menu-nav {
            font-family: Poppins;
            text-transform: uppercase;
            line-height: 27px;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-style: normal;
            color: #838383;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body[data-header-style="header-style-eleven"] .mobile-menu-nav {
            opacity: 0;
        }

        .ie.wf-loading body[data-header-style="header-style-eleven"] .mobile-menu-nav {
            visibility: hidden;
        }

        body[data-header-style="header-style-eleven"] .mobile-menu-close i {
            color: #838383;
        }

        .wraper_header.style-twelve .wraper_header_top {
            background-color: #253cac;
        }

        .wraper_header.style-twelve .wraper_header_main {
            background-color: #f5f5f5;
        }

        .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>a {
            font-family: Rubik;
            text-transform: uppercase;
            line-height: 27px;
            font-weight: 500;
            font-style: normal;
            color: #3c3d41;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>a {
            visibility: hidden;
        }

        .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            font-family: Rubik;
            text-align: left;
            text-transform: uppercase;
            line-height: 25px;
            font-weight: 400;
            font-style: normal;
            color: #3c3d41;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            opacity: 0;
        }

        .ie.wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li>a,
        .ie.wf-loading .wraper_header.style-twelve .nav>[class*="menu-"]>ul.menu>li>ul>li>ul>li>ul>li ul li a {
            visibility: hidden;
        }

        .wraper_header.style-twelve .header_main_action ul>li.header-cart-bar i {
            color: #3c3d41;
        }

        .wraper_header.style-twelve .header_main_action ul>li.floating-searchbar i,
        .wraper_header.style-twelve .header_main_action ul>li.flyout-searchbar-toggle i {
            color: #3c3d41;
        }

        .wraper_header.style-twelve .header_main .responsive-nav i {
            color: #838383;
        }

        body[data-header-style="header-style-twelve"] #mobile-menu {
            background-color: #ffffff;
        }

        body[data-header-style="header-style-twelve"] .mobile-menu-nav {
            font-family: Poppins;
            text-transform: uppercase;
            line-height: 27px;
            letter-spacing: 0.5px;
            font-weight: 400;
            font-style: normal;
            color: #838383;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body[data-header-style="header-style-twelve"] .mobile-menu-nav {
            opacity: 0;
        }

        .ie.wf-loading body[data-header-style="header-style-twelve"] .mobile-menu-nav {
            visibility: hidden;
        }

        body[data-header-style="header-style-twelve"] .mobile-menu-close i {
            color: #838383;
        }

        .wraper_inner_banner {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: inherit;
        }

        .wraper_inner_banner_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .inner_banner_main .title {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 45px;
            font-weight: 700;
            font-style: normal;
            color: #ffffff;
            font-size: 0px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .inner_banner_main .title {
            opacity: 0;
        }

        .ie.wf-loading .inner_banner_main .title {
            visibility: hidden;
        }

        .inner_banner_main .subtitle {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 29px;
            font-weight: 400;
            font-style: normal;
            color: #ffffff;
            font-size: 0px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .inner_banner_main .subtitle {
            opacity: 0;
        }

        .ie.wf-loading .inner_banner_main .subtitle {
            visibility: hidden;
        }

        .inner_banner_breadcrumb #crumbs {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 26px;
            font-weight: 400;
            font-style: normal;
            color: #cddbf8;
            font-size: 0px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .inner_banner_breadcrumb #crumbs {
            opacity: 0;
        }

        .ie.wf-loading .inner_banner_breadcrumb #crumbs {
            visibility: hidden;
        }

        .wraper_inner_banner_breadcrumb>.container {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .wraper_footer.style-one {
            background-color: #161616;
        }

        .wraper_footer.style-one .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-two {
            background-color: #161616;
        }

        .wraper_footer.style-two .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-three {
            background-color: #161616;
        }

        .wraper_footer.style-three .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-three .wraper_footer_copyright {
            background-color: #191818;
        }

        .wraper_footer.style-four {
            background-color: #161616;
        }

        .wraper_footer.style-four .wraper_footer_navigation {
            background-color: rgba(0, 23, 77, 0.01);
        }

        .wraper_footer.style-four .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-five {
            background-color: #161616;
        }

        .wraper_footer.style-five .wraper_footer_navigation {
            background-color: rgba(0, 23, 77, 0.01);
        }

        .wraper_footer.style-five .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-six {
            background-color: #161616;
        }

        .wraper_footer.style-six .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-seven {
            background-color: #161616;
        }

        .wraper_footer.style-seven .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-eight {
            background-color: #161616;
        }

        .wraper_footer.style-eight .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-nine {
            background-color: #161616;
        }

        .wraper_footer.style-nine .wraper_footer_navigation {
            background-color: rgba(0, 23, 77, 0.01);
        }

        .wraper_footer.style-nine .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .wraper_footer.style-ten {
            background-color: #042828;
        }

        .wraper_footer.style-ten .wraper_footer_main {
            border-bottom-color: rgba(255, 255, 255, 0.01);
        }

        .radiantthemes-button>.radiantthemes-button-main,
        .gdpr-notice .btn,
        .radiant-contact-form .form-row input[type=submit],
        .radiant-contact-form .form-row input[type=button],
        .radiant-contact-form .form-row button[type=submit],
        .post.style-two .post-read-more .btn,
        .post.style-three .entry-main .post-read-more .btn,
        .woocommerce #respond input#submit,
        .woocommerce .return-to-shop .button,
        .woocommerce form .form-row input.button,
        .widget-area>.widget.widget_price_filter .button,
        .wraper_error_main.style-one .error_main .btn,
        .wraper_error_main.style-two .error_main .btn,
        .wraper_error_main.style-three .error_main_item .btn,
        .wraper_error_main.style-four .error_main .btn {
            padding-top: 12px;
            padding-right: 35px;
            padding-bottom: 13px;
            padding-left: 35px;
        }

        .radiantthemes-button.hover-style-one .radiantthemes-button-main:hover,
        .radiantthemes-button.hover-style-two .radiantthemes-button-main>.overlay,
        .radiantthemes-button.hover-style-three .radiantthemes-button-main>.overlay,
        .radiantthemes-button.hover-style-four .radiantthemes-button-main:hover,
        .gdpr-notice .btn,
        .radiant-contact-form .form-row input[type=submit]:hover,
        .radiant-contact-form .form-row input[type=button]:hover,
        .radiant-contact-form .form-row button[type=submit]:hover,
        .post.style-two .post-read-more .btn:hover,
        .post.style-three .entry-main .post-read-more .btn:hover,
        .woocommerce #respond input#submit,
        .woocommerce .return-to-shop .button:hover,
        .woocommerce form .form-row input.button:hover,
        .widget-area>.widget.widget_price_filter .button:hover,
        .wraper_error_main.style-one .error_main .btn:hover,
        .wraper_error_main.style-two .error_main .btn:hover,
        .wraper_error_main.style-three .error_main_item .btn:hover,
        .wraper_error_main.style-four .error_main .btn:hover {
            background-color: #d60808;
        }

        .radiantthemes-button>.radiantthemes-button-main,
        .gdpr-notice .btn,
        .radiant-contact-form .form-row input[type=submit],
        .radiant-contact-form .form-row input[type=button],
        .radiant-contact-form .form-row button[type=submit],
        .post.style-two .post-read-more .btn,
        .post.style-three .entry-main .post-read-more .btn,
        .woocommerce #respond input#submit,
        .woocommerce .return-to-shop .button,
        .woocommerce form .form-row input.button,
        .widget-area>.widget.widget_price_filter .button,
        .wraper_error_main.style-one .error_main .btn,
        .wraper_error_main.style-two .error_main .btn,
        .wraper_error_main.style-three .error_main_item .btn,
        .wraper_error_main.style-four .error_main .btn {
            border-top: 0px solid #ffffff;
            border-bottom: 0px solid #ffffff;
            border-left: 0px solid #ffffff;
            border-right: 0px solid #ffffff;
        }

        .radiantthemes-button>.radiantthemes-button-main:hover,
        .gdpr-notice .btn:hover,
        .radiant-contact-form .form-row input[type=submit]:hover,
        .radiant-contact-form .form-row input[type=button]:hover,
        .radiant-contact-form .form-row button[type=submit]:hover,
        .post.style-two .post-read-more .btn:hover,
        .post.style-three .entry-main .post-read-more .btn:hover,
        .woocommerce #respond input#submit,
        .woocommerce .return-to-shop .button:hover,
        .woocommerce form .form-row input.button:hover,
        .widget-area>.widget.widget_price_filter .button:hover,
        .wraper_error_main.style-one .error_main .btn:hover,
        .wraper_error_main.style-two .error_main .btn:hover,
        .wraper_error_main.style-three .error_main_item .btn:hover,
        .wraper_error_main.style-four .error_main .btn:hover {
            border-top: 0px solid #ffffff;
            border-bottom: 0px solid #ffffff;
            border-left: 0px solid #ffffff;
            border-right: 0px solid #ffffff;
        }

        .radiantthemes-button>.radiantthemes-button-main,
        .gdpr-notice .btn,
        .radiant-contact-form .form-row input[type=submit],
        .radiant-contact-form .form-row input[type=button],
        .radiant-contact-form .form-row button[type=submit],
        .post.style-two .post-read-more .btn,
        .post.style-three .entry-main .post-read-more .btn,
        .woocommerce #respond input#submit,
        .woocommerce .return-to-shop .button,
        .woocommerce form .form-row input.button,
        .widget-area>.widget.widget_price_filter .button,
        .wraper_error_main.style-one .error_main .btn,
        .wraper_error_main.style-two .error_main .btn,
        .wraper_error_main.style-three .error_main_item .btn,
        .wraper_error_main.style-four .error_main .btn {
            -moz-box-shadow: 0 0 20px 0 rgba(54, 154, 212, 0.15);
            -webkit-box-shadow: 0 0 20px 0 rgba(54, 154, 212, 0.15);
            -ms-box-shadow: 0 0 20px 0 rgba(54, 154, 212, 0.15);
            -o-box-shadow: 0 0 20px 0 rgba(54, 154, 212, 0.15);
            box-shadow: 0 0 20px 0 rgba(54, 154, 212, 0.15);
        }

        .radiantthemes-button>.radiantthemes-button-main,
        .gdpr-notice .btn,
        .radiant-contact-form .form-row input[type=submit],
        .radiant-contact-form .form-row input[type=button],
        .radiant-contact-form .form-row button[type=submit],
        .post.style-two .post-read-more .btn,
        .post.style-three .entry-main .post-read-more .btn,
        .woocommerce #respond input#submit,
        .woocommerce .return-to-shop .button,
        .woocommerce form .form-row input.button,
        .widget-area>.widget.widget_price_filter .button,
        .wraper_error_main.style-one .error_main .btn,
        .wraper_error_main.style-two .error_main .btn,
        .wraper_error_main.style-three .error_main_item .btn,
        .wraper_error_main.style-four .error_main .btn {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 23px;
            font-weight: 400;
            font-style: normal;
            color: #fff;
            font-size: 14px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading .radiantthemes-button>.radiantthemes-button-main,
        .wf-loading .gdpr-notice .btn,
        .wf-loading .radiant-contact-form .form-row input[type=submit],
        .wf-loading .radiant-contact-form .form-row input[type=button],
        .wf-loading .radiant-contact-form .form-row button[type=submit],
        .wf-loading .post.style-two .post-read-more .btn,
        .wf-loading .post.style-three .entry-main .post-read-more .btn,
        .wf-loading .woocommerce #respond input#submit,
        .wf-loading .woocommerce .return-to-shop .button,
        .wf-loading .woocommerce form .form-row input.button,
        .wf-loading .widget-area>.widget.widget_price_filter .button,
        .wf-loading .wraper_error_main.style-one .error_main .btn,
        .wf-loading .wraper_error_main.style-two .error_main .btn,
        .wf-loading .wraper_error_main.style-three .error_main_item .btn,
        .wf-loading .wraper_error_main.style-four .error_main .btn {
            opacity: 0;
        }

        .ie.wf-loading .radiantthemes-button>.radiantthemes-button-main,
        .ie.wf-loading .gdpr-notice .btn,
        .ie.wf-loading .radiant-contact-form .form-row input[type=submit],
        .ie.wf-loading .radiant-contact-form .form-row input[type=button],
        .ie.wf-loading .radiant-contact-form .form-row button[type=submit],
        .ie.wf-loading .post.style-two .post-read-more .btn,
        .ie.wf-loading .post.style-three .entry-main .post-read-more .btn,
        .ie.wf-loading .woocommerce #respond input#submit,
        .ie.wf-loading .woocommerce .return-to-shop .button,
        .ie.wf-loading .woocommerce form .form-row input.button,
        .ie.wf-loading .widget-area>.widget.widget_price_filter .button,
        .ie.wf-loading .wraper_error_main.style-one .error_main .btn,
        .ie.wf-loading .wraper_error_main.style-two .error_main .btn,
        .ie.wf-loading .wraper_error_main.style-three .error_main_item .btn,
        .ie.wf-loading .wraper_error_main.style-four .error_main .btn {
            visibility: hidden;
        }

        .radiantthemes-button>.radiantthemes-button-main:hover,
        .gdpr-notice .btn:hover,
        .radiant-contact-form .form-row input[type=submit]:hover,
        .radiant-contact-form .form-row input[type=button]:hover,
        .radiant-contact-form .form-row button[type=submit]:hover,
        .post.style-two .post-read-more .btn:hover,
        .post.style-three .entry-main .post-read-more .btn:hover,
        .woocommerce #respond input#submit,
        .woocommerce .return-to-shop .button:hover,
        .woocommerce form .form-row input.button:hover,
        .widget-area>.widget.widget_price_filter .button:hover,
        .wraper_error_main.style-one .error_main .btn:hover,
        .wraper_error_main.style-two .error_main .btn:hover,
        .wraper_error_main.style-three .error_main_item .btn:hover,
        .wraper_error_main.style-four .error_main .btn:hover {
            color: #ffffff;
        }

        .radiantthemes-button>.radiantthemes-button-main i {
            color: #ffffff;
        }

        .radiantthemes-button>.radiantthemes-button-main:hover i {
            color: #ffffff;
        }

        .radiant-contact-form .form-row,
        div.wpcf7-response-output {
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 20px;
            margin-left: 0;
        }

        .radiant-contact-form .form-row input[type=text],
        .radiant-contact-form .form-row input[type=email],
        .radiant-contact-form .form-row input[type=url],
        .radiant-contact-form .form-row input[type=tel],
        .radiant-contact-form .form-row input[type=number],
        .radiant-contact-form .form-row input[type=password],
        .radiant-contact-form .form-row input[type=date],
        .radiant-contact-form .form-row input[type=time],
        .radiant-contact-form .form-row select {
            height: 45px;
        }

        .radiant-contact-form .form-row textarea {
            height: 100px;
        }

        .radiant-contact-form .form-row input[type=text]:focus,
        .radiant-contact-form .form-row input[type=email]:focus,
        .radiant-contact-form .form-row input[type=url]:focus,
        .radiant-contact-form .form-row input[type=tel]:focus,
        .radiant-contact-form .form-row input[type=number]:focus,
        .radiant-contact-form .form-row input[type=password]:focus,
        .radiant-contact-form .form-row input[type=date]:focus,
        .radiant-contact-form .form-row input[type=time]:focus,
        .radiant-contact-form .form-row select:focus,
        .radiant-contact-form .form-row textarea:focus {
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
        }

        .radiant-contact-form .form-row input[type=text],
        .radiant-contact-form .form-row input[type=email],
        .radiant-contact-form .form-row input[type=url],
        .radiant-contact-form .form-row input[type=tel],
        .radiant-contact-form .form-row input[type=number],
        .radiant-contact-form .form-row input[type=password],
        .radiant-contact-form .form-row input[type=date],
        .radiant-contact-form .form-row input[type=time],
        .radiant-contact-form .form-row select,
        .radiant-contact-form .form-row textarea {
            -moz-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
        }

        .wraper_error_main.style-one {
            background-color: #dedede;
            background-size: cover;
            background-image: url('https://platinumassignments.com/wp-content/themes/Platinum/images/404-Error-Style-One-Background-Image.png');
        }

        .wraper_error_main.style-two {
            background-color: #ffffff;
        }

        .wraper_error_main.style-three {
            background-color: #ffffff;
        }

        .wraper_error_main.style-four {
            background-color: #ffffff;
        }

        .wraper_maintenance_main.style-one {
            background-color: #ffffff;
            background-image: url('https://wymore.co.ke/platinum/wp-content/themes/Platinum/images/Maintenance-More-Style-One-Image.png');
        }

        .wraper_maintenance_main.style-two {
            background-color: #ffffff;
            background-image: url('https://wymore.co.ke/platinum/wp-content/themes/Platinum/images/Maintenance-More-Style-Two-Image.png');
        }

        .wraper_maintenance_main.style-three {
            background-color: #ffffff;
            background-image: url('https://wymore.co.ke/platinum/wp-content/themes/Platinum/images/Maintenance-More-Style-Three-Image.png');
        }

        .wraper_comingsoon_main.style-one {
            background-color: #000000;
            background-size: cover;
            background-image: url('https://wymore.co.ke/platinum/wp-content/themes/Platinum/images/Coming-Soon-Style-One-Background-Image.png');
        }

        .wraper_comingsoon_main.style-two {
            background-color: #000000;
            background-size: cover;
            background-image: url('https://wymore.co.ke/platinum/wp-content/themes/Platinum/images/Coming-Soon-Style-Two-Background-Image.png');
        }

        .wraper_comingsoon_main.style-three {
            background-color: #000000;
            background-size: cover;
            background-image: url('https://wymore.co.ke/platinum/wp-content/themes/Platinum/images/Coming-Soon-Style-Three-Background-Image.png');
        }
    </style>
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
        <div class="wraper_inner_banner" style="background-image:url('https://akademicwriters.com/wp-content/uploads/2019/07/Banner-Backgrund-1.png')">
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
                                                                                <div class="holder"><a class="main-link" href="<?php echo $row['file_url'] ?>" target=" _blank" rel="nofollow"><?php echo $row['title'] ?></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
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

    <!--Start of Tawk.to Script-->
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
    <!--End of Tawk.to Script-->

    <link rel='stylesheet' id='radiantthemes_animated_link_two-css' href='https://akademicwriters.com/wp-content/plugins/radiantthemes-addons/animated-link/css/radiantthemes-animated-link-element-two.css?ver=5.2.17' type='text/css' media='all' />
    <style id='radiantthemes_animated_link_two-inline-css' type='text/css'>
        .rt-animated-link.element-one.rt563376349>.holder>.main-link,
        .rt-animated-link.element-two.rt563376349>.holder>.main-link,
        .rt-animated-link.element-three.rt563376349>.holder>.main-link,
        .rt-animated-link.element-four.rt563376349>.holder>.main-link,
        .rt-animated-link.element-five.rt563376349>.holder>.main-link,
        .rt-animated-link.element-six.rt563376349>.holder>.main-link,
        .rt-animated-link.element-seven.rt563376349>.holder>.main-link,
        .rt-animated-link.element-eight.rt563376349>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt563376349>.holder>.main-link:before,
        .rt-animated-link.element-four.rt563376349>.holder>.main-link:before,
        .rt-animated-link.element-five.rt563376349>.holder>.main-link:before,
        .rt-animated-link.element-six.rt563376349>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt563376349>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt563376349>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt563376349>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt563376349>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt981026130>.holder>.main-link,
        .rt-animated-link.element-two.rt981026130>.holder>.main-link,
        .rt-animated-link.element-three.rt981026130>.holder>.main-link,
        .rt-animated-link.element-four.rt981026130>.holder>.main-link,
        .rt-animated-link.element-five.rt981026130>.holder>.main-link,
        .rt-animated-link.element-six.rt981026130>.holder>.main-link,
        .rt-animated-link.element-seven.rt981026130>.holder>.main-link,
        .rt-animated-link.element-eight.rt981026130>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt981026130>.holder>.main-link:before,
        .rt-animated-link.element-four.rt981026130>.holder>.main-link:before,
        .rt-animated-link.element-five.rt981026130>.holder>.main-link:before,
        .rt-animated-link.element-six.rt981026130>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt981026130>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt981026130>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt981026130>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt981026130>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt239600585>.holder>.main-link,
        .rt-animated-link.element-two.rt239600585>.holder>.main-link,
        .rt-animated-link.element-three.rt239600585>.holder>.main-link,
        .rt-animated-link.element-four.rt239600585>.holder>.main-link,
        .rt-animated-link.element-five.rt239600585>.holder>.main-link,
        .rt-animated-link.element-six.rt239600585>.holder>.main-link,
        .rt-animated-link.element-seven.rt239600585>.holder>.main-link,
        .rt-animated-link.element-eight.rt239600585>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt239600585>.holder>.main-link:before,
        .rt-animated-link.element-four.rt239600585>.holder>.main-link:before,
        .rt-animated-link.element-five.rt239600585>.holder>.main-link:before,
        .rt-animated-link.element-six.rt239600585>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt239600585>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt239600585>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt239600585>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt239600585>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt1717361550>.holder>.main-link,
        .rt-animated-link.element-two.rt1717361550>.holder>.main-link,
        .rt-animated-link.element-three.rt1717361550>.holder>.main-link,
        .rt-animated-link.element-four.rt1717361550>.holder>.main-link,
        .rt-animated-link.element-five.rt1717361550>.holder>.main-link,
        .rt-animated-link.element-six.rt1717361550>.holder>.main-link,
        .rt-animated-link.element-seven.rt1717361550>.holder>.main-link,
        .rt-animated-link.element-eight.rt1717361550>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt1717361550>.holder>.main-link:before,
        .rt-animated-link.element-four.rt1717361550>.holder>.main-link:before,
        .rt-animated-link.element-five.rt1717361550>.holder>.main-link:before,
        .rt-animated-link.element-six.rt1717361550>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt1717361550>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt1717361550>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt1717361550>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt1717361550>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt1521941554>.holder>.main-link,
        .rt-animated-link.element-two.rt1521941554>.holder>.main-link,
        .rt-animated-link.element-three.rt1521941554>.holder>.main-link,
        .rt-animated-link.element-four.rt1521941554>.holder>.main-link,
        .rt-animated-link.element-five.rt1521941554>.holder>.main-link,
        .rt-animated-link.element-six.rt1521941554>.holder>.main-link,
        .rt-animated-link.element-seven.rt1521941554>.holder>.main-link,
        .rt-animated-link.element-eight.rt1521941554>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt1521941554>.holder>.main-link:before,
        .rt-animated-link.element-four.rt1521941554>.holder>.main-link:before,
        .rt-animated-link.element-five.rt1521941554>.holder>.main-link:before,
        .rt-animated-link.element-six.rt1521941554>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt1521941554>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt1521941554>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt1521941554>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt1521941554>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt49663030>.holder>.main-link,
        .rt-animated-link.element-two.rt49663030>.holder>.main-link,
        .rt-animated-link.element-three.rt49663030>.holder>.main-link,
        .rt-animated-link.element-four.rt49663030>.holder>.main-link,
        .rt-animated-link.element-five.rt49663030>.holder>.main-link,
        .rt-animated-link.element-six.rt49663030>.holder>.main-link,
        .rt-animated-link.element-seven.rt49663030>.holder>.main-link,
        .rt-animated-link.element-eight.rt49663030>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt49663030>.holder>.main-link:before,
        .rt-animated-link.element-four.rt49663030>.holder>.main-link:before,
        .rt-animated-link.element-five.rt49663030>.holder>.main-link:before,
        .rt-animated-link.element-six.rt49663030>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt49663030>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt49663030>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt49663030>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt49663030>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt1366851796>.holder>.main-link,
        .rt-animated-link.element-two.rt1366851796>.holder>.main-link,
        .rt-animated-link.element-three.rt1366851796>.holder>.main-link,
        .rt-animated-link.element-four.rt1366851796>.holder>.main-link,
        .rt-animated-link.element-five.rt1366851796>.holder>.main-link,
        .rt-animated-link.element-six.rt1366851796>.holder>.main-link,
        .rt-animated-link.element-seven.rt1366851796>.holder>.main-link,
        .rt-animated-link.element-eight.rt1366851796>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt1366851796>.holder>.main-link:before,
        .rt-animated-link.element-four.rt1366851796>.holder>.main-link:before,
        .rt-animated-link.element-five.rt1366851796>.holder>.main-link:before,
        .rt-animated-link.element-six.rt1366851796>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt1366851796>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt1366851796>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt1366851796>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt1366851796>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt906619876>.holder>.main-link,
        .rt-animated-link.element-two.rt906619876>.holder>.main-link,
        .rt-animated-link.element-three.rt906619876>.holder>.main-link,
        .rt-animated-link.element-four.rt906619876>.holder>.main-link,
        .rt-animated-link.element-five.rt906619876>.holder>.main-link,
        .rt-animated-link.element-six.rt906619876>.holder>.main-link,
        .rt-animated-link.element-seven.rt906619876>.holder>.main-link,
        .rt-animated-link.element-eight.rt906619876>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt906619876>.holder>.main-link:before,
        .rt-animated-link.element-four.rt906619876>.holder>.main-link:before,
        .rt-animated-link.element-five.rt906619876>.holder>.main-link:before,
        .rt-animated-link.element-six.rt906619876>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt906619876>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt906619876>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt906619876>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt906619876>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt654093496>.holder>.main-link,
        .rt-animated-link.element-two.rt654093496>.holder>.main-link,
        .rt-animated-link.element-three.rt654093496>.holder>.main-link,
        .rt-animated-link.element-four.rt654093496>.holder>.main-link,
        .rt-animated-link.element-five.rt654093496>.holder>.main-link,
        .rt-animated-link.element-six.rt654093496>.holder>.main-link,
        .rt-animated-link.element-seven.rt654093496>.holder>.main-link,
        .rt-animated-link.element-eight.rt654093496>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt654093496>.holder>.main-link:before,
        .rt-animated-link.element-four.rt654093496>.holder>.main-link:before,
        .rt-animated-link.element-five.rt654093496>.holder>.main-link:before,
        .rt-animated-link.element-six.rt654093496>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt654093496>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt654093496>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt654093496>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt654093496>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt78290932>.holder>.main-link,
        .rt-animated-link.element-two.rt78290932>.holder>.main-link,
        .rt-animated-link.element-three.rt78290932>.holder>.main-link,
        .rt-animated-link.element-four.rt78290932>.holder>.main-link,
        .rt-animated-link.element-five.rt78290932>.holder>.main-link,
        .rt-animated-link.element-six.rt78290932>.holder>.main-link,
        .rt-animated-link.element-seven.rt78290932>.holder>.main-link,
        .rt-animated-link.element-eight.rt78290932>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt78290932>.holder>.main-link:before,
        .rt-animated-link.element-four.rt78290932>.holder>.main-link:before,
        .rt-animated-link.element-five.rt78290932>.holder>.main-link:before,
        .rt-animated-link.element-six.rt78290932>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt78290932>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt78290932>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt78290932>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt78290932>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt1923234603>.holder>.main-link,
        .rt-animated-link.element-two.rt1923234603>.holder>.main-link,
        .rt-animated-link.element-three.rt1923234603>.holder>.main-link,
        .rt-animated-link.element-four.rt1923234603>.holder>.main-link,
        .rt-animated-link.element-five.rt1923234603>.holder>.main-link,
        .rt-animated-link.element-six.rt1923234603>.holder>.main-link,
        .rt-animated-link.element-seven.rt1923234603>.holder>.main-link,
        .rt-animated-link.element-eight.rt1923234603>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt1923234603>.holder>.main-link:before,
        .rt-animated-link.element-four.rt1923234603>.holder>.main-link:before,
        .rt-animated-link.element-five.rt1923234603>.holder>.main-link:before,
        .rt-animated-link.element-six.rt1923234603>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt1923234603>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt1923234603>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt1923234603>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt1923234603>.holder:before {
            border-color: #000000;
        }

        .rt-animated-link.element-one.rt883676801>.holder>.main-link,
        .rt-animated-link.element-two.rt883676801>.holder>.main-link,
        .rt-animated-link.element-three.rt883676801>.holder>.main-link,
        .rt-animated-link.element-four.rt883676801>.holder>.main-link,
        .rt-animated-link.element-five.rt883676801>.holder>.main-link,
        .rt-animated-link.element-six.rt883676801>.holder>.main-link,
        .rt-animated-link.element-seven.rt883676801>.holder>.main-link,
        .rt-animated-link.element-eight.rt883676801>.holder>.main-link {
            color: #000000;
        }

        .rt-animated-link.element-three.rt883676801>.holder>.main-link:before,
        .rt-animated-link.element-four.rt883676801>.holder>.main-link:before,
        .rt-animated-link.element-five.rt883676801>.holder>.main-link:before,
        .rt-animated-link.element-six.rt883676801>.holder>.main-link>.dot-holder>.dots,
        .rt-animated-link.element-seven.rt883676801>.holder>.main-link:before,
        .rt-animated-link.element-seven.rt883676801>.holder>.main-link:after,
        .rt-animated-link.element-eight.rt883676801>.holder>.main-link-fliper {
            background-color: #000000;
        }

        .rt-animated-link.element-one.rt883676801>.holder:before {
            border-color: #000000;
        }
    </style>
    <link rel='stylesheet' id='radiantthemes-custom-button-css' href='https://akademicwriters.com/wp-content/plugins/radiantthemes-addons/custom-button/css/radiantthemes-custom-button.css?ver=5.2.17' type='text/css' media='all' />
    <style id='radiantthemes-custom-button-inline-css' type='text/css'>
        .radiantthemes-custom-button.rt412486803 .radiantthemes-custom-button-main:hover {
            background-color: #ffffff !important;
            border-top-color: #434444 !important;
            border-bottom-color: #434444 !important;
            border-left-color: #434444 !important;
            border-right-color: #434444 !important;
            color: #434444 !important;
        }
    </style>
    <link rel='stylesheet' id='radiantthemes_menu_one-css' href='https://akademicwriters.com/wp-content/plugins/radiantthemes-addons/custom-menu/css/radiantthemes-menu-element-one.css?ver=5.2.17' type='text/css' media='all' />
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/plugins/radiantthemes-mega-menu/assets/js/rt-megamenu.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/themes/Akademicwriters/js/bootstrap.min.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/themes/Akademicwriters/js/jquery.sidr.min.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/themes/Akademicwriters/js/jquery.matchHeight-min.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/themes/Akademicwriters/js/wow.min.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/themes/Akademicwriters/js/jquery.nicescroll.min.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/themes/Akademicwriters/js/jquery.sticky.min.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/themes/Akademicwriters/js/radiantthemes-custom.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-includes/js/wp-embed.min.js?ver=5.2.17'></script>
    <script type='text/javascript' src='https://akademicwriters.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.0.3'></script>

</body>

</html>