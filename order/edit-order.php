<?php
include "../admin/conn.php";
include "../admin/auth.php";
include "../admin/pg_auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="graduate essay helpers, graduate-essay-helpers.com, graduateessaywriters.com, graduate essay writers, graduate writers, graduate helpers, essay writers, essay helpers, essaywriters.com, graduatewriters.com, graduatehelpers.com, essaywriters.com, essayhelpers.com, writers.com, assignment helpers, assignmenthelpers.com, assignmentwriters.com, assignment writers">
    <title>Login/Register | GraduateEssayHelpers</title>
    <meta name="description" content="Register today and get not just Only a quality paper, but also 0% plagiarism.">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="../order_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
    <link href="../order_assets/css/opskill-styles.css" rel="stylesheet">
    <script src="../order_assets/js/jquery.sidr.min.js"></script>
    <script src="../order_assets/js/jquery.min.js"></script>
    <script src="../order_assets/js/bootstrap.min.js"></script>
    <script src="../order_assets/js/rt-megamenu.js"></script>

</head>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">


    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Graduate Essay Writers</title>
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

    <link rel='stylesheet' href='../order_assets/css/opskill-widgets.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='../order_assets/css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../order_assets/css/rt-megamenu.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../order_assets/css/settings.css' type='text/css' media='all' />

    <link rel='stylesheet' href='../order_assets/css/theme/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../order_assets/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../order_assets/css/radiantthemes-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../order_assets/css/radiantthemes-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../order_assets/css/radiantthemes-header-style-eleven.css' type='text/css' media='all' />
    <style type='text/css'>
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
    <script type='text/javascript' src='../order_assets/js/jquery.js'></script>
    <script type='text/javascript' src='../order_assets/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../order_assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='../order_assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='../order_assets/js/retina.min.js'></script>

    <link rel="icon" href="../images/grad_books.png" sizes="32x32" />

    <link rel="icon" href="../images/grad_books.png" sizes="192x192">

    <link rel="apple-touch-icon-precomposed" href="../images/grad_books.png" />

    <meta name="msapplication-TileImage" content="../images/grad_books.png" />

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
    <link rel="stylesheet" href="../order_assets/css/custom-css.css">
    <link rel="stylesheet" href="../order_assets/css/dynamic-css.css">
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <style>
        @media screen and (max-width: 455px) {
            /* .navbar-light {
                    background: red;
                } */

            .opskillheader {
                position: relative;
                right: 25%;
                z-index: 0;
            }
        }

        .lg-deadline {
            display: none;
        }

        @media screen and (min-width: 1440px) {
            .mobile-deadline {
                display: none;
            }

            .lg-deadline {
                display: block;
            }
        }

        @media screen and (min-width: 1024px) {
            .mobile-deadline {
                display: none;
            }

            .lg-deadline {
                display: block;
            }
        }

        @media screen and (min-width: 768px) {
            .mobile-deadline {
                display: none;
            }

            .lg-deadline {
                display: block;
            }
        }

        .tawk-branding {
            display: none;
        }
    </style>
</head>



<body class="hfeed wpb-js-composer js-comp-ver-6.0.3 vc_responsive" data-header-style="header-style-eleven" data-nicescroll-cursorcolor="#ffbc13" data-nicescroll-cursorwidth="7px">



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


        <!-- wraper_header -->
        <?php include "../assets/header.php" ?>
        <!-- hamburger-menu-holder -->

        <!-- wraper_header_bannerinner -->
        <div class="wraper_inner_banner">
            <!-- wraper_inner_banner_main -->
            <div class="wraper_inner_banner_main">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- inner_banner_main -->
                            <div class="inner_banner_main">
                                <p class="title">
                                    GraduateEssayHelpers </p>
                                <p class="subtitle">
                                    Academic and Essay Writing Service </p>
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
                                <div id="crumbs"><a href="https://graduate-essay-helpers.com">Home</a> <span class="gap"><i class="el el-chevron-right"></i></span> <span class="current"></span></div>
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

                <header class="opskillheader">
                    <!-- Navigation -->

                    <?php include "../user/loggedin_user-profile.php" ?>

                </header>

                <?php

                $order_id = $_GET['id'];

                $sql = mysqli_query($con, "SELECT * FROM orders WHERE id = '$order_id'");
                $row = mysqli_fetch_array($sql);

                ?>


                <script src="../order_assets/js/ckeditor.js"></script>
                <section class="features" id="features">
                    <div class="container">
                        <div class="section-heading">
                            <h4>Place Order</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="ops-sm-12">
                                <div class="">

                                    <form role="form" action="https://graduate-essay-helpers.com/edit.php?id=<?php echo $order_id ?>" method="POST">


                                        <div class="row">
                                            <div class="ops-md-12">
                                                <div class="ops-form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="input" name="order_title" class="form-control border-info" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['title'] ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="ops-md-3">
                                                <div class="ops-form-group">
                                                    <label for="exampleSelect1">Type of Paper</label>
                                                    <select name="order_tpaper" class="form-control custom-select border-info" id="exampleSelect1">
                                                        <option value="<?php echo $row['type_of_paper'] ?>"><?php echo $row['type_of_paper'] ?></option>
                                                        <option value="Assignment">Assignment</option>
                                                        <option value="Article (Any Type)">Article (Any Type)</option>
                                                        <option value="Assignment">Assignment</option>
                                                        <option value="Content (Any Type)">Content (Any Type)</option>
                                                        <option value="Admission Essay">Admission Essay</option>
                                                        <option value="Annotated Bibliography">Annotated Bibliography</option>
                                                        <option value="Argumentative Essay">Argumentative Essay</option>
                                                        <option value="Article Review">Article Review</option>
                                                        <option value="Book/Movie Review">Book/Movie Review</option>
                                                        <option value="Business Plan">Business Plan</option>
                                                        <option value="Capstone Project">Capstone Project</option>
                                                        <option value="Case Study">Case Study</option>
                                                        <option value="Coursework">Coursework</option>
                                                        <option value="Creative Writing">Creative Writing</option>
                                                        <option value="Critical Thinking">Critical Thinking</option>
                                                        <option value="Dissertation">Dissertation</option>
                                                        <option value="Dissertation chapter">Dissertation chapter</option>
                                                        <option value="Lab Report">Lab Report</option>
                                                        <option value="Math Problem">Math Problem</option>
                                                        <option value="Research Paper">Research Paper</option>
                                                        <option value="Research Proposal">Research Proposal</option>
                                                        <option value="Research Summary">Research Summary</option>
                                                        <option value="Scholarship Essay">Scholarship Essay</option>
                                                        <option value="Speech">Speech</option>
                                                        <option value="Statistic Project">Statistic Project</option>
                                                        <option value="Term Paper">Term Paper</option>
                                                        <option value="Thesis">Thesis</option>
                                                        <option value="Other">Other</option>
                                                        <option value="Presentation or Speech">Presentation or Speech</option>
                                                        <option value="QandA">Q&amp;A</option>
                                                    </select>
                                                </div>

                                            </div>


                                            <div class="ops-md-3">
                                                <div class="ops-form-group">
                                                    <label for="exampleSelect1">Select your subject</label>
                                                    <select name="order_subject" class="form-control custom-select border-info" id="exampleSelect1">

                                                        <option value="<?php echo $row['subject_area'] ?>"><?php echo $row['subject_area'] ?></option>
                                                        <option value="Other">Other</option>
                                                        <option value="Any">Any</option>
                                                        <option value="Archaeology">Archaeology</option>
                                                        <option value="Architecture">Architecture</option>
                                                        <option value="Arts">Arts</option>
                                                        <option value="Astronomy">Astronomy</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Chemistry">Chemistry</option>
                                                        <option value="Childcare">Childcare</option>
                                                        <option value="Computers">Computers</option>
                                                        <option value="Counseling">Counseling</option>
                                                        <option value="Criminology">Criminology</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Education">Education</option>
                                                        <option value="Engineering">Engineering</option>
                                                        <option value="Environmental-Studies">Environmental-Studies</option>
                                                        <option value="Ethics">Ethics</option>
                                                        <option value="Ethnic-Studies">Ethnic-Studies</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="Food-Nutrition">Food-Nutrition</option>
                                                        <option value="Geography">Geography</option>
                                                        <option value="Healthcare">Healthcare</option>
                                                        <option value="History">History</option>
                                                        <option value="Law">Law</option>
                                                        <option value="Linguistics">Linguistics</option>
                                                        <option value="Literature">Literature</option>
                                                        <option value="Management">Management</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Mathematics">Mathematics</option>
                                                        <option value="Medicine">Medicine</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Nursing">Nursing</option>
                                                        <option value="Philosophy">Philosophy</option>
                                                        <option value="Physical-Education">Physical-Education</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value="Political-Science">Political-Science</option>
                                                        <option value="Programming">Programming</option>
                                                        <option value="Psychology">Psychology</option>
                                                        <option value="Religion">Religion</option>
                                                        <option value="Sociology">Sociology</option>
                                                        <option value="Statistics">Statistics</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="ops-md-3">
                                                <div class="input-group">
                                                    <label> Number of sources </label>
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default border-info btn-number" disabled="disabled" data-type="minus" data-field="order_sources">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="order_sources" class="form-control border-info input-number ops-sm-4 text-center" value="<?php echo $row['no_of_sources'] ?>" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default btn-number border-info" data-type="plus" data-field="order_sources">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="ops-md-3">
                                                <div class="ops-form-group">
                                                    <label for="exampleSelect1">Format of citation</label>
                                                    <select name="order_citation" class="form-control border-info custom-select" value="hello" id="exampleSelect1">
                                                        <option value="APA">APA</option>
                                                        <option value="Other">Other</option>
                                                        <option value="MLA">MLA</option>
                                                        <option value="Havard">Havard</option>
                                                        <option value="Chicago">Chicago</option>
                                                        <option value="Turabian">Turabian</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>



                                        <script type="text/javascript">
                                            $('#datetimepicker').datepicker();
                                        </script>


                                        <div class="ops-form-group">
                                            <label for="exampleTextarea">Paper Instructions</label>
                                            <textarea class="form-control border-info" name="order_instructions" id="editor" rows="3"><?php echo $row['instructions'] ?></textarea>
                                            <small> If you have any additional files please upload them in order manage area </small>
                                        </div>


                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#editor'))
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>




                                        <div class="ops-form-group">
                                            <input type="hidden" name="order_clientid" class="form-control border-info" value="7">
                                            <input type="hidden" name="order_writer" class="form-control border-info" value="0">
                                        </div>



                                        <div class="ops-form-group">
                                            <button name="edit_btn" class="btn-outline btn-xl js-scroll-trigger">Edit Order</button>
                                        </div>


                                    </form>




                                </div>
                            </div>


                        </div>
                    </div>
                </section>

                <script type="text/javascript">
                    //plugin bootstrap minus and plus
                    //http://jsfiddle.net/laelitenetwork/puJ6G/
                    $('.btn-number').click(function(e) {
                        e.preventDefault();

                        fieldName = $(this).attr('data-field');
                        type = $(this).attr('data-type');
                        var input = $("input[name='" + fieldName + "']");
                        var currentVal = parseInt(input.val());
                        if (!isNaN(currentVal)) {
                            if (type == 'minus') {

                                if (currentVal > input.attr('min')) {
                                    input.val(currentVal - 1).change();
                                }
                                if (parseInt(input.val()) == input.attr('min')) {
                                    $(this).attr('disabled', true);
                                }

                            } else if (type == 'plus') {

                                if (currentVal < input.attr('max')) {
                                    input.val(currentVal + 1).change();
                                }
                                if (parseInt(input.val()) == input.attr('max')) {
                                    $(this).attr('disabled', true);
                                }

                            }
                        } else {
                            input.val(0);
                        }
                    });
                    $('.input-number').focusin(function() {
                        $(this).data('oldValue', $(this).val());
                    });
                    $('.input-number').change(function() {

                        minValue = parseInt($(this).attr('min'));
                        maxValue = parseInt($(this).attr('max'));
                        valueCurrent = parseInt($(this).val());

                        name = $(this).attr('name');
                        if (valueCurrent >= minValue) {
                            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                        } else {
                            alert('Sorry, the minimum value was reached');
                            $(this).val($(this).data('oldValue'));
                        }
                        if (valueCurrent <= maxValue) {
                            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                        } else {
                            alert('Sorry, the maximum value was reached');
                            $(this).val($(this).data('oldValue'));
                        }


                    });
                    $(".input-number").keydown(function(e) {
                        // Allow: backspace, delete, tab, escape, enter and .
                        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                            // Allow: Ctrl+A
                            (e.keyCode == 65 && e.ctrlKey === true) ||
                            // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
                            // let it happen, don't do anything
                            return;
                        }
                        // Ensure that it is a number and stop the keypress
                        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                            e.preventDefault();
                        }
                    });
                </script>


                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#watch-me").click(function() {
                            $("#show-me:hidden").show('slow');
                            $("#show-me-two").hide();
                            $("#show-me-three").hide();
                        });
                        $("#watch-me").click(function() {
                            if ($('watch-me').prop('checked') === false) {
                                $('#show-me').hide();
                            }
                        });





                        $("#see-me").click(function() {
                            $("#show-me-two:hidden").show('slow');
                            $("#show-me").hide();
                            $("#show-me-three").hide();
                        });
                        $("#see-me").click(function() {
                            if ($('see-me-two').prop('checked') === false) {
                                $('#show-me-two').hide();
                            }
                        });







                        $("#look-me").click(function() {
                            $("#show-me-three:hidden").show('slow');
                            $("#show-me").hide();
                            $("#show-me-two").hide();
                        });
                        $("#look-me").click(function() {
                            if ($('see-me-three').prop('checked') === false) {
                                $('#show-me-three').hide();
                            }
                        });

                    });
                </script>

            </div>