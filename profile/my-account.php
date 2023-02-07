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
    <title>Login/Register | GraduateEssayHelpers</title>
    <meta name="description" content="Register today and get not just Only a quality paper, but also 0% plagiarism.">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="../order_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
    <link href="../order_assets/css/opskill-styles.css" rel="stylesheet">
    <link href="../order_assets/css/header-style-eleven.css" rel="stylesheet">
    <script src="../order_assets/js/bootstrap/jquery.sidr.min.js"></script>
    <script src="../order_assets/js/bootstrap/jquery.min.js"></script>
    <script src="../order_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="../order_assets/js/bootstrap/megamenu.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js" integrity="sha512-jKxp7JHEN6peEmzmg6a7XJBORNTB0ITD2Pi+6FUkc16PCaNAJX2ahZ1ejn1p1uY37Pxyirn/0OMNZbITbEg3jw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script type='text/javascript' src='../assets/js/mega-menu.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sidr/2.2.1/jquery.sidr.min.js" integrity="sha512-HvecYeVgMOaHjNBv7DnIvCpVb7ad5FPEhnU/PMhp41YTcgNymgOKfsVioe/9QaeCnadAeoL9ZxEhaHtWN8Sc9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type='text/javascript' src='../assets/js/custom.js'></script>


</head>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">


    <script src="../order_assets/js/webfont.js"></script>

    <link rel='stylesheet' id='opskill-css' href='../order_assets/css/opskill-css.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='wp-block-library-css' href='../order_assets/css/block-library-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rt-megamenu-front-end-style-css' href='../order_assets/css/megamenu-front.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='../order_assets/css/plugin-settings-css.css' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css' href='../order_assets/css/bootstrap-css.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='animate-css' href='../order_assets/css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-custom-css' href='../order_assets/css/rt/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-responsive-css' href='../order_assets/css/rt/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-header-style-eleven-css' href='../order_assets/css/rt/style-eleven.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-footer-style-one-css' href='../order_assets/css/rt/footer-style-one.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-user-custom-css' href='../order_assets/css/rt/user-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-dynamic-css' href='../order_assets/css/rt/dynamic-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-button-element-one-css' href='../order_assets/css/rt/button-element.css' type='text/css' media='all' />

    <script type='text/javascript' src='../order_assets/js/jquery.js'></script>
    <script type='text/javascript' src='../order_assets/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../order_assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='../order_assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='../order_assets/js/retina.min.js'></script>
    <!-- <link rel='https://api.w.org/' href='https://akademicwriters.com/wp-json/' /> -->
    <!-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://akademicwriters.com/xmlrpc.php?rsd" /> -->
    <!-- <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://akademicwriters.com/wp-includes/wlwmanifest.xml" /> -->
    <script src="../order_assets/js/setStartSize.js"></script>
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


        <?php include "../header/nav.php" ?>

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


                <section class="download features" id="download">
                    <div class="container">
                        <div class="row">

                            <div class="ops-sm-12">
                                <h4> My Details </h4>
                                <hr />
                                <div class="row">

                                    <ul class="nav nav-tabs ops-sm-12" role="tablist">
                                        <li class="nav-item ops-sm-4 text-center">
                                            <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">My Profile</a>
                                        </li>
                                        <li class="nav-item ops-sm-4 text-center">
                                            <a class="nav-link alert alert-warning" href="#buzz" role="tab" data-toggle="tab">Edit Profile</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row ">
                                    <!-- Tab panes -->
                                    <div class="tab-content ops-sm-12 padding20">
                                        <div role="tabpanel" class="tab-pane fade in show active" id="profile">

                                            <?php
                                            $id = $_SESSION['id'];

                                            $sql = "SELECT * FROM tbl_users WHERE id = $id";
                                            $user = mysqli_query($con, $sql);
                                            $row = mysqli_fetch_assoc($user);
                                            ?>

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 25%" class="text-right">My ID:</th>
                                                        <th style="width: 75%">#<?php echo $row['id'] ?></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="text-right">Full Name:</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Nickname:</th>
                                                        <td>C<?php echo $row['id'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Email:</th>
                                                        <td><?php echo $row['email'] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Time Zone (required):</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Country:</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Phone:</th>
                                                        <td>+</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right">Password:</th>
                                                        <td><i>Hidden</i></td>
                                                    </tr>
                                                </tbody>
                                            </table>



                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="buzz">

                                            <form role="form" action="" method="POST">

                                                <div class="ops-form-group row">
                                                    <label for="staticEmail" class="ops-sm-4 col-form-label">Client ID</label>
                                                    <div class="ops-sm-8">
                                                        <input type="text" class="form-control" name="client_id" id="inputPassword" placeholder="Password" value="<?php echo $row['id'] ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="ops-form-group row">
                                                    <label for="inputPassword" class="ops-sm-4 col-form-label">Email</label>
                                                    <div class="ops-sm-8">
                                                        <input type="email" class="form-control" name="client_email" id="inputPassword" placeholder="Password" value="<?php echo $row['email'] ?>">
                                                    </div>
                                                </div>

                                                <div class="ops-form-group row">
                                                    <label for="inputPassword" class="ops-sm-4 col-form-label">Password</label>
                                                    <div class="ops-sm-8">
                                                        <input type="text" class="form-control" id="inputPassword" name="client_pass" value="" placeholder="hidden">
                                                        <input type="hidden" class="form-control" id="inputPassword" name="client_pass_old" value="5f4dcc3b5aa765d61d8327deb882cf99">
                                                    </div>
                                                </div>

                                                <?php include "./timezone.php" ?>


                                                <div class="ops-form-group row">
                                                    <div class="ops-sm-10">
                                                        <button type="submit" class="btn btn-primary">Edit Profile</button>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>
                </section>
            </div>