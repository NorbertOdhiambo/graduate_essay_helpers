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


        <?php include "../assets/header.php" ?>

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
                                    Graduate Essay Helpers </p>
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

                <?php include "../user/loggedin_user-profile.php" ?>


                <section class="orders features orderview" id="">
                    <div class="container">
                        <br />
                        <?php include "./../order/status.php" ?>
                        <hr />

                        <?php

                        $user_id = $_SESSION['id'];

                        $order = "SELECT * FROM orders WHERE user_id = $user_id AND order_status = 'pending' ORDER BY id DESC";
                        $result = mysqli_query($con, $order);
                        // $row = mysqli_fetch_assoc($result);

                        // $ord = mysqli_query($con, "SELECT * FROM orders");
                        // $sqlqry = mysqli_fetch_array($ord);
                        // $id_ord = $sqlqry['id'];

                        // $sql = mysqli_query($con, "SELECT * FROM payments WHERE ord_id = $id_ord ORDER BY id DESC");
                        // $qry = mysqli_fetch_array($sql);
                        // $sts = $qry['status'];

                        $sql = mysqli_query($con, "SELECT * FROM payments");
                        $qry = mysqli_fetch_array($sql);
                        $ord = $qry['ord_id'];
                        $sts = $qry['status'];
                        $amt = $qry['amount'];
                        ?>

                        <div class="row">

                            <div class="ops-sm-1">ID</div>
                            <div class="ops-sm-2">Topic/Title</div>
                            <div class="ops-sm-2">Due Time</div>
                            <div class="ops-sm-2">Status</div>
                            <div class="ops-sm-1"> Writer</div>
                            <div class="ops-sm-2">Pay</div>
                            <div class="ops-sm-2"></div>
                        </div>
                        <hr />

                        <div class="orderlib">



                            <?php while ($fetch = mysqli_fetch_array($result)) {
                                $id_ord = $fetch['id'];

                                $sql = mysqli_query($con, "SELECT status FROM payments WHERE ord_id = $id_ord");
                                $qry = mysqli_fetch_array($sql);
                                $sts = $qry[0];
                            ?>
                                <div class="row">
                                    <div class="ops-sm-1">#<?php echo $fetch['id'] ?></div>
                                    <div class="ops-sm-2">
                                        <a href="./../order/order-checkout.php?id=<?php echo $fetch['id'] ?>"> <?php echo $fetch['title'] ?> </a>
                                    </div>
                                    <div class="ops-sm-2">


                                        <?php echo $fetch['deadline'] ?>
                                    </div>

                                    <?php
                                    $mnt = $fetch['total'];
                                    if ($sts == "PENDING") {
                                    ?>
                                        <div class="ops-sm-2">paid</div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="ops-sm-2">bidding || unpayments</div>
                                    <?php
                                    }
                                    ?>



                                    <div class="ops-sm-1 text-center">0</div>
                                    <div class="ops-sm-2">

                                        <?php
                                        // $ord_id = $fetch['id'];
                                        // echo $ord_id;
                                        // $sql = mysqli_query($con, "SELECT * FROM payments WHERE ord_id = $ord_id");
                                        // $qry = mysqli_fetch_array($sql);
                                        // $sts = $qry['ord_id'];
                                        // echo $sts;
                                        ?>

                                        <?php
                                        $mnt = $fetch['total'];
                                        if ($sts == "PENDING") {
                                            echo "paid $$mnt";
                                        ?>
                                        <?php
                                        } else {
                                        ?>
                                            <!-- Button trigger modal -->

                                            <button type="button" class="btn ops-sm-12 text-white btn-warning" data-toggle="modal" data-target="#<?php echo $fetch['id'] ?>">
                                                Pay ($<?php echo $fetch['total'] ?>)
                                            </button>
                                        <?php
                                        }
                                        ?>

                                    </div>

                                    <!-- ======================================================================= -->


                                    <div class="ops-sm-2">

                                        <?php
                                        // $ord_id = $fetch['id'];
                                        // echo $ord_id;
                                        // $sql = mysqli_query($con, "SELECT * FROM payments WHERE ord_id = $ord_id");
                                        // $qry = mysqli_fetch_array($sql);
                                        // $sts = $qry['ord_id'];
                                        // echo $sts;
                                        ?>

                                        <?php
                                        if ($sts == "PENDING") {
                                        ?>
                                            <!-- Button trigger modal -->

                                            <button type="button" class="btn ops-sm-12 text-white btn-warning" data-toggle="modal" data-target="#<?php echo $fetch['id'] ?>">
                                                Payment Details
                                            </button>
                                        <?php
                                        } else {
                                        ?>
                                        <?php
                                        }
                                        ?>


                                        <?php
                                        $mnt = $fetch['total'];
                                        if ($sts == "PENDING") {
                                        ?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="<?php echo $fetch['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Order #<?php echo $fetch['id'] ?></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <div class="row text-center">
                                                                <div class="col">
                                                                    <h6> View details for your order</h6>
                                                                    <hr />
                                                                    <a class="btn ops-sm-12 btn-danger text-white" href="../order/choose-payment.php?id=<?php echo $fetch['id'] ?>">Payment </a>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="<?php echo $fetch['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Pay Order #<?php echo $fetch['id'] ?></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <div class="row text-center">
                                                                <div class="col">
                                                                    <h6> Pay for your order</h6>
                                                                    <hr />
                                                                    <a class="btn ops-sm-12 btn-danger text-white" href="../order/choose-payment.php?id=<?php echo $fetch['id'] ?>">Pay ($<?php echo $fetch['total'] ?>) </a>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                        <hr />
                        <div class="pagination float-right">
                            <li></li>
                        </div>







                </section>
            </div>