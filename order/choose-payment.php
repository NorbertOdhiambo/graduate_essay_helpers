<?php
include "../admin/conn.php";
include "../admin/auth.php";
include "../admin/pg_auth.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <title>Choose Payment | Graduate Essay Helpers</title>
    <script src="../js/webfontloader.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='bootstrap-css' href='https://cdn.usebootstrap.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' media='all' />

    <!-- <link rel='stylesheet' href='../css/mega-menu.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../css/header-style.css' type='text/css' media='all' /> -->

    <link rel="stylesheet" href="../css/payment.css">
    <link href="../order_assets/css/opskill-styles.css" rel="stylesheet">
    <link href="./css/skill-style.css" rel="stylesheet">

    <link rel='stylesheet' id='animate-css' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css' href='../css/rt-custom.css' type='text/css' media='all' />

    <link rel='stylesheet' id='dynamic-css' href='../css/rt-dynamic.css' type='text/css' media='all' />

    <link rel="stylesheet" href="../css/footer-style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-migrate-1.4.1.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js" integrity="sha512-oa3uxr5BZK3h58O9sYSH4Tx6CyZrYVpIpq6jq01gymOTACaXoqA998MJkyRuIeNs+QuVHJUqr1tBsmbjwdTKBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/dynamic.css" class="options-output" />
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
    </style>
</head>



<body data-rsssl=1 class="page-template-default page page-id-8634 wpb-js-composer js-comp-ver-6.0.3 vc_responsive" data-header-style="header-style-eleven" data-nicescroll-cursorcolor="#ffbc13" data-nicescroll-cursorwidth="7px">


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

        <?php
        // include "./header/nav.php" 
        ?>

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
                                    Service Sidebar </p>
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
                                <div id="crumbs"><a href="index.php">Home</a> <span class="gap"><i class="el el-chevron-right"></i></span> <span class="current">Speeches</span></div>
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

                <div class="container d-flex justify-content-center mt-5 mb-5">

                    <?php
                    $user_id = $_SESSION['id'];
                    $id = $_GET['id'];

                    $order = mysqli_query($con, "SELECT * FROM orders WHERE id=$id");
                    $fetch = mysqli_fetch_array($order);
                    ?>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <input type="hidden" id="order_id" name="order_id" value=<?php echo $id ?>>
                            <input type="hidden" id="user_id" name="user_id" value=<?php echo $user_id ?>>

                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM payments WHERE ord_id = $id");
                            $qry = mysqli_fetch_array($sql);
                            ?>

                            <?php
                            if ($qry['ord_id'] == $id && $qry['status'] == "COMPLETED") {
                            ?>

                                <h5>Payment Information</h5>
                                <div class="card">

                                    <div class="accordion" id="accordionExample">

                                        <p><b>Id: <?php echo $qry['payer_id'] ?></b></p>
                                        <p><b>Reference No: <?php echo $qry['order_id'] ?></b></p>
                                        <p><b>Transaction Id: <?php echo $qry['transaction_id'] ?></b></p>
                                        <p><b>Amount paid: $<?php echo $qry['amount'] ?></b></p>
                                        <p><b>Payment status: <?php echo $qry['status'] ?></b></p>


                                    </div>

                                </div>

                            <?php
                            } else {
                            ?>

                                <span>Choose Preferred Payment Method</span>
                                <div class="card">

                                    <div class="accordion" id="accordionExample">

                                        <?php include "../payments/pay.php" ?>

                                    </div>

                                </div>

                            <?php
                            }
                            ?>

                        </div>

                        <div class=" col-md-6">
                            <span>Summary</span>

                            <div class="card">

                                <div class="d-flex justify-content-between p-3">

                                    <div class="d-flex flex-column">

                                        <span> <i class="fa fa-caret-down"></i></span>
                                        <!-- <a href="#" class="billing">Save 20% with annual billing</a> -->
                                        <p>Academic level: <?php echo $fetch['academic_level'] ?></p>
                                        <p>Type of paper: <?php echo $fetch['type_of_paper'] ?></p>
                                        <p>Subject: <?php echo $fetch['subject_area'] ?></p>

                                    </div>

                                    <div class="mt-1">
                                        <sup class="super-price">$<?php echo $fetch['total'] ?></sup>
                                        <!-- <span class="super-month">/Month</span> -->
                                    </div>

                                </div>

                                <hr class="mt-0 line">

                                <div class="p-3">

                                    <div class="d-flex justify-content-between mb-2">

                                        <!-- <span>Refferal Bonouses</span>
                    <span>-$2.00</span> -->

                                    </div>

                                    <div class="d-flex justify-content-between">

                                        <!-- <span>Vat <i class="fa fa-clock-o"></i></span>
                    <span>-20%</span> -->

                                    </div>


                                </div>

                                <hr class="mt-0 line">


                                <!-- <div class="p-3 d-flex justify-content-between">

                                    <div class="d-flex flex-column">

                                        <span>Today you pay</span>
                                        <small>After 30 days $9.59</small>

                                    </div>
                                    <span>$
                                        <?php
                                        echo $fetch['total'] ?>
                                    </span>



                                </div>


                                <div class="p-3">

                                    <button class="btn btn-primary btn-block free-button">Pay</button>
                                    <input type="submit" name="submit" class="btn btn-primary btn-block free-button" value="Pay Now">
                                    <div class="text-center">
                                        <a href="#">Have a promo code?</a>
                                    </div>

                                </div> -->






                            </div>
                        </div>

                    </div>


                </div>


            </div>
            <!-- #content -->
        </div>
        <!-- #page -->

        <?php
        include "../assets/footer.php"
        ?>

    </div>
    <!-- radiantthemes-website-layout -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type='text/javascript' src='../js/mega-menu.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sidr/2.2.1/jquery.sidr.min.js" integrity="sha512-HvecYeVgMOaHjNBv7DnIvCpVb7ad5FPEhnU/PMhp41YTcgNymgOKfsVioe/9QaeCnadAeoL9ZxEhaHtWN8Sc9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>