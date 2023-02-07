<?php
include('.././admin/conn.php');
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    extract($_POST);
    if ($new_pass == $conf_pass) {
        $password = md5($new_pass);
        $insertdata = mysqli_query($con, "UPDATE tbl_users SET pwd='$password' WHERE id='$id'");
        if ($insertdata) {
            echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'login.php'</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match!!');
        </script>";
    }
}

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
    <link href="../login_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
    <link href="../login_assets/css/opskill-style.css" rel="stylesheet">
    <link href="../login_assets/css/header-style-eleven.css" rel="stylesheet">
    <script src="../login_assets/js/jquery.sidr.min.js"></script>
    <script src="../login_assets/js/jquery.min.js"></script>
    <script src="../login_assets/js/bootstrap.min.js"></script>
    <script src="../login_assets/js/megamenu.js"></script>

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

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-127724450-4');
    </script>

    <title>Graduate Essay Helpers</title>
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

    <link rel='stylesheet' id='opskill-css' href='../writers_assets/css/opskill.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='wp-block-library-css' href='../writers_assets/css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rt-megamenu-front-end-style-css' href='../writers_assets/css/megamenu-front.css' type='text/css' media='all' />
    <!-- <link rel='stylesheet' id='rs-plugin-settings-css' href='https://akademicwriters.com/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.8.3' type='text/css' media='all' /> -->

    <link rel='stylesheet' id='bootstrap-css' href='../writers_assets/css/bootstrap.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='animate-css' href='../writers_assets/css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-custom-css' href='../writers_assets/css/rt/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-responsive-css' href='../writers_assets/css/rt/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-header-style-eleven-css' href='../writers_assets/css/rt/header-style-eleven.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-user-custom-css' href='../writers_assets/css/rt/user-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-dynamic-css' href='../writers_assets/css/rt/dynamic.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-button-element-one-css' href='../writers_assets/css/rt/button-element.css' type='text/css' media='all' />

    <!-- <script type='text/javascript' src='https://akademicwriters.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script> -->
    <script type='text/javascript' src='../writers_assets/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../writers_assets/js/themepunch-tools.min.js'></script>
    <script type='text/javascript' src='../writers_assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='../writers_assets/js/retina.min.js'></script>
    <script src="./writers_assets/js/setStartSize.js"></script>
    <link rel="stylesheet" href="../writers_assets/css/custom-css.css">
    <link rel="stylesheet" href="../writers_assets/css/dynamic-css.css">
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
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

                <!-- Modal -->
                <div class="modal fade text-muted" id="loginbox">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header" style="text-align: center">
                                <h4 class="modal-title">You must login/register to place order</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="bd-example bd-example-tabs">
                                    <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-expanded="true">User log in</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-expanded="true">Client register</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <hr />
                                            <form role="form" action="password-reset.php" method="POST">
                                                <div class="ops-form-group row">
                                                    <label for="inputEmail3" class="ops-sm-3 col-form-label text-right text-muted">Email</label>
                                                    <div class="ops-sm-9">
                                                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="ops-form-group row">
                                                    <label for="inputPassword3" class="ops-sm-3 col-form-label text-right text-muted">Password</label>
                                                    <div class="ops-sm-9">
                                                        <input type="password" name="user_pass" class="form-control" id="inputPassword3" placeholder="Password">
                                                        <small><a href="">Forgot Password</a></small>
                                                    </div>
                                                </div>
                                                <div class="ops-form-group row">
                                                    <div class="ops-sm-7 mx-auto">
                                                        <button type="submit" class="btn ops-sm-12 btn-warning">Sign in</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <hr />
                                            <form role="form" action="" method="POST">
                                                <div class="ops-form-group row">
                                                    <label for="exampleInputEmail1" class="ops-sm-3 col-form-label text-right text-muted">Email address</label>
                                                    <div class="ops-sm-9">
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="client_email">
                                                        <small id="emailHelp" class="form-text text-muted">We'll email your passsword here.</small>
                                                    </div>
                                                </div>
                                                <div class="ops-sm-7 mx-auto">
                                                    <button type="submit" name="submit" class="btn ops-sm-12 btn-warning">Continue</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="download features text-center" id="download">
                    <div class="container">
                        <div class="row">
                            <div class="ops-md-6 mx-auto box-shadow">
                                <h4>Reset Password</h4>
                                <hr />
                                <!-- <p> Enter your email address and you'll receive a link in your inbox to reset your password. </p>
                                <hr /> -->

                                <form role="form" action="" method="POST">
                                    <div class="ops-form-group row">
                                        <label for="inputPassword3" class="ops-sm-3 col-form-label text-muted">New Password</label>
                                        <div class="ops-sm-9">
                                            <input type="password" name="new_pass" class="form-control" id="inputPassword3" placeholder="New Password" required>
                                        </div>
                                    </div>

                                    <div class="ops-form-group row">
                                        <label for="inputPassword3" class="ops-sm-3 col-form-label text-muted">Confirm Password</label>
                                        <div class="ops-sm-9">
                                            <input type="password" name="conf_pass" class="form-control" id="inputPassword3" placeholder="Confirm Password" required>
                                            <small><a href="reset-password.php"></a></small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <small><a href="login.php">Login</a></small>
                                        </div>
                                    </div>

                                    <div class="ops-form-group row">
                                        <div class="offset-sm-2 ops-sm-10">
                                            <button type="submit" name="submit" id="pass-reset" style="background: green" class="btn btn-info">Submit</button>
                                        </div>
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            
            // <script>
            //     document.getElementById('pass-reset').addEventListener('click', function(e) {
            //         e.preventDefault();
            //     })
            // </script>