<?php
include "../admin/conn.php";
include "../admin/auth.php";
include "../admin/pg_auth.php";

$order_id = $_GET['id'];
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


                <link rel="stylesheet" type="text/css" href="../order_assets/css/dropzone/basic.min.css">
                <script type="text/javascript" src="../order_assets/js/dropzone/dropzone.min.js"></script>
                <script src="../order_assets/js/dropzone/ckeditor.js"></script>

                <style type="text/css">
                    td,
                    th {
                        border: 1px solid #dddddd;
                        border-top-color: rgb(221, 221, 221);
                        border-top-style: solid;
                        border-top-width: 1px;
                        padding: 1px;
                        text-align: left;
                        font-size: 13px;
                    }

                    .table td,
                    .table th {
                        padding: .5rem;
                        vertical-align: top;
                        border-top: 1px solid #dee2e6;
                    }

                    .titlecolumn {

                        background: whitesmoke;
                        white-space: nowrap;
                        text-align: right;
                        font-weight: bold;
                        width: 30%
                    }
                </style>





                <section class="download features orderview" id="">
                    <div class="container">
                        <?php include "./status.php" ?>

                        <?php
                        // $order_id = mysqli_insert_id($con)
                        $user_id = $_SESSION['id'];

                        $order_id = $_GET['id'];

                        $ordr = mysqli_query($con, "SELECT * FROM orders WHERE id = $order_id");
                        $fetch = mysqli_fetch_array($ordr);

                        $order_id = $fetch['id'];


                        $add_mat = mysqli_query($con, "SELECT * FROM additional_material WHERE user_id = $user_id AND order_id = $order_id ORDER BY id DESC");

                        $uplds = mysqli_query($con, "SELECT * FROM delivered WHERE user_id = $user_id AND order_id = $order_id");
                        $delv = mysqli_query($con, "SELECT * FROM delivered WHERE user_id = $user_id AND order_id = $order_id");


                        // $ord_id = $fetch['id'];
                        $sql = mysqli_query($con, "SELECT * FROM payments WHERE ord_id = $order_id");
                        $qry = mysqli_fetch_array($sql);
                        $sts = $qry['status'];
                        ?>

                        <hr />
                        <div class="row">
                            <div class="ops-sm-10">
                                <h5><?php echo $fetch['title'] ?></h5>
                            </div>
                            <div class="ops-sm-2"><a class="btn btn-danger" href="./edit-order.php?id=<?php echo $fetch['id'] ?>">Edit Order</a>
                            </div>

                        </div>
                        <div class="row ops-sm-10 mx-auto">
                            <div class="ops-sm-6">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <td class="titlecolumn">Type of Paper</td>
                                            <td><?php echo $fetch['type_of_paper'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Subject Area</td>
                                            <td><?php echo $fetch['subject_area'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Academic Level</td>
                                            <td><?php echo $fetch['academic_level'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Number of Pages</td>
                                            <td><?php echo $fetch['no_of_pages'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Number of Sources</td>
                                            <td><?php echo $fetch['no_of_sources'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Spacing</td>
                                            <td><?php echo $fetch['spacing'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Writer ID</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Deadline</td>
                                            <td><?php echo $fetch['deadline'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="ops-sm-6">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <td class="titlecolumn">Quality Level</td>
                                            <td><?php echo $fetch['quality_level'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Number of Sources </td>
                                            <td><?php echo $fetch['no_of_sources'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Referencing Style</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Total</td>
                                            <td><?php echo $fetch['total'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Order Status</td>
                                            <?php
                                            if ($sts == "PENDING") {
                                            ?>
                                                <td>paid</td>
                                            <?php
                                            } else {
                                            ?>
                                                <td>bidding</td>
                                            <?php
                                            }
                                            ?>

                                        </tr>

                                        <tr>
                                            <td class="titlecolumn">Upsells</td>
                                            <td>VIP support, Plagiarism Report </td>
                                        </tr>
                                        <tr>
                                            <td class="titlecolumn">Payment Status</td>
                                            <td>



                                                <?php
                                                if ($sts == "PENDING") {
                                                    echo "Paid"; ?>
                                                <?php
                                                } else {
                                                ?>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#unpaid">
                                                        Pay ($<?php echo $fetch['total'] ?>)
                                                    </button>
                                                <?php
                                                }
                                                ?>

                                                <!-- <small> Wallet balance $0 </small><br /> -->




                                                <!-- Modal -->
                                                <div class="modal fade" id="unpaid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Pay Order
                                                                    #<?php echo $fetch['id'] ?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6> Choose payment, pay for your order</h6>
                                                                        <hr />
                                                                        <a class="btn ops-sm-12 btn-danger text-white" href="./choose-payment.php?id=<?php echo $fetch['id'] ?>">Pay
                                                                            ($<?php echo $fetch['total'] ?>) </a>


                                                                    </div>

                                                                </div>



                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <?php

                        $del = mysqli_query($con, "SELECT * FROM orders WHERE user_id = '$user_id' AND id = '$order_id'");
                        $req = mysqli_fetch_array($del);

                        if ($req['order_status'] == "DELIVERED") {
                        ?>
                            <h5> Instructions <p>[by client]</p>
                            </h5>
                            <div class="row">
                                <div class="ops-sm-12">
                                    <p><?php echo $fetch['instructions'] ?></p>
                                </div>
                            </div>

                            <?php
                            $msg = mysqli_fetch_array($delv);

                            if ($msg['message'] != "") {
                            ?>
                                <hr>
                                <h5> Message <p>[by admin]</p>
                                </h5>
                                <div class="row">
                                    <div class="ops-sm-12">
                                        <?php echo $msg['message'] ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        <?php
                        } else {
                        ?>
                            <h5> Instructions </h5>
                            <div class="row">
                                <div class="ops-sm-12">
                                    <p><?php echo $fetch['instructions'] ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>


                        <?php

                        if ($req['order_status'] != "DELIVERED") {
                        ?>
                            <hr />
                            <h5> Coupon </h5>
                            <div class="row">
                                <div class="ops-sm-12" style="display: flex; align-items: center; justify-content: space-between; gap: 3rem;">
                                    <p>Coupon code: <?php echo $fetch['coupon_code'] ?></p>
                                    <p>Discount:
                                    <div>
                                        <p> $<?php echo $fetch['discount'] ?></p>
                                        <p> %</p>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <hr />
                        <div class="row">
                            <div class="ops-sm-12">
                                <p> Files </p>
                            </div>
                            <div class="ops-sm-12">
                                <?php while ($files = mysqli_fetch_array($add_mat)) {
                                ?>
                                    <a href="../<?php echo $files['file'] ?>" download target="_blank">
                                        <?php echo $files['file'] . "<br>" ?>
                                    </a>
                                    <?php
                                }
                                    ?>[by client]
                            </div>

                        </div>

                        <?php
                        if ($req['order_status'] == "DELIVERED") {
                        ?>

                            <hr />
                            <div class="row">
                                <div class="ops-sm-12">
                                    <p> Finished Work </p>
                                </div>
                                <div class="ops-sm-12">
                                    <?php while ($docs = mysqli_fetch_array($uplds)) {
                                    ?>
                                        <a href="<?php echo $docs['file_url'] ?>" download target="_blank">
                                            <?php echo $docs['file_name'] . "<br>" ?>
                                        </a>
                                        <?php
                                    }
                                        ?>[by writer]
                                </div>

                            </div>

                        <?php
                        }

                        ?>


                        <hr />
                        <p class="text-center"> Additional Files (files will be uploaded once you submit) </p>
                        <hr />

                        <form action="" class="dropzone text-center padding20" id="my-dropzone"></form>
                        <br />
                        <div class="submitall"><button id="submit-all" class="btn btn-info">Submit all files</button>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        Dropzone.options.myDropzone = {

            // Prevents Dropzone from uploading dropped files immediately
            parallelUploads: 30,
            autoProcessQueue: false,

            init: function() {
                var submitButton = document.querySelector("#submit-all")
                myDropzone = this; // closure

                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                });

                // You might want to show the submit button only when 
                // files are dropped here:
                this.on("addedfile", function() {
                    // Show submit button here and/or inform user to click it.
                });

            }
        };




        Dropzone.autoDiscover = false;
        var file = new Dropzone(".dropzone", {
            url: "https://akademicwriters.com/order/corders/upload_files",
            // maxFilesize: 2,  // maximum size to uplaod 
            acceptedFiles: ".pdf,.doc,.dot,.docx,.docm,.dotx,.dotm,.docb,.xls,.xlsx,.xlt,.xlm,.xlsm,.xltx,.xltm,.csv,.txt,.rtf,.htm,.html,.zip,.mp3,.mp4,.wma,.mpg,.flv,.avi,.jpg,.jpeg,.png,.gif,.pptx,.pptm,.ppt,.pot,.potx,.potm,.ppam,.ppsx,.ppsm,.sldx,.sldm,.accdb,.accde,.accdt,.accdr,.csv",
            method: "post",
            // acceptedFiles:"image/*", // allow only images
            paramName: "userfile",
            // dictInvalidFileType:"Image files only allowed", // error message for other files on image only restriction 
            addRemoveLinks: true,
            success: function(file, response) {
                this.on("queuecomplete", function(file) {
                    location.reload();
                });
            }
        });


        file.on("sending", function(a, b, c) {
            a.token = Math.random();
            c.append("token", a.token); //Random Token generated for every files 
            c.append("file_orderid", 12); //pass order id 

        });


        // delete on upload 

        file.on("removedfile", function(a) {
            var token = a.token;
            $.ajax({
                type: "post",
                data: {
                    token: token
                },
                url: "https://akademicwriters.com/order/corders/delete",
                cache: false,
                dataType: 'json',
                success: function(res) {
                    // alert('Selected file removed !');      

                }

            });
        });
    </script>

</body>