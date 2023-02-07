<?php
include "./admin/conn.php";
include "./admin/auth.php";
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
    <link href="./order_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
    <link href="./order_assets/css/opskill-styles.css" rel="stylesheet">
    <link href="./order_assets/css/header-style-eleven.css" rel="stylesheet">
    <script src="./order_assets/js/bootstrap/jquery.sidr.min.js"></script>
    <script src="./order_assets/js/bootstrap/jquery.min.js"></script>
    <script src="./order_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="./order_assets/js/bootstrap/megamenu.js"></script>

</head>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">


    <script src="./order_assets/js/webfont.js"></script>

    <link rel='stylesheet' id='opskill-css' href='./order_assets/css/opskill-css.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='wp-block-library-css' href='./order_assets/css/block-library-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rt-megamenu-front-end-style-css' href='./order_assets/css/megamenu-front.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='./order_assets/css/plugin-settings-css.css' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css' href='./order_assets/css/bootstrap-css.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='animate-css' href='./order_assets/css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-custom-css' href='./order_assets/css/rt/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-responsive-css' href='./order_assets/css/rt/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-header-style-eleven-css' href='./order_assets/css/rt/style-eleven.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-footer-style-one-css' href='./order_assets/css/rt/footer-style-one.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-user-custom-css' href='./order_assets/css/rt/user-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-dynamic-css' href='./order_assets/css/rt/dynamic-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-button-element-one-css' href='./order_assets/css/rt/button-element.css' type='text/css' media='all' />

    <script type='text/javascript' src='./order_assets/js/jquery.js'></script>
    <script type='text/javascript' src='./order_assets/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='./order_assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='./order_assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='./order_assets/js/retina.min.js'></script>
    <!-- <link rel='https://api.w.org/' href='https://akademicwriters.com/wp-json/' /> -->
    <!-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://akademicwriters.com/xmlrpc.php?rsd" /> -->
    <!-- <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://akademicwriters.com/wp-includes/wlwmanifest.xml" /> -->
    <script src="./order_assets/js/setStartSize.js"></script>
    <link rel="stylesheet" href="./order_assets/css/custom-css.css">
    <link rel="stylesheet" href="./order_assets/css/dynamic-css.css">
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
        
        .tawk-branding{
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


        <?php include "./order_assets/navbar.php" ?>

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

                <?php include "./user/loggedin_user-profile.php" ?>

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
                                            <form role="form" action="https://akademicwriters.com/order/user/loginprocess" method="POST">
                                                <div class="ops-form-group row">
                                                    <label for="inputEmail3" class="ops-sm-3 col-form-label text-right text-muted">Email</label>
                                                    <div class="ops-sm-9">
                                                        <input type="email" name="user_email" class="form-control" id="inputEmail3" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="ops-form-group row">
                                                    <label for="inputPassword3" class="ops-sm-3 col-form-label text-right text-muted">Password</label>
                                                    <div class="ops-sm-9">
                                                        <input type="password" name="user_pass" class="form-control" id="inputPassword3" placeholder="Password">
                                                        <small><a href="https://akademicwriters.com/order//user/resetpass">Forgot
                                                                Password</a></small>
                                                    </div>
                                                </div>
                                                <div class="ops-form-group row">
                                                    <div class="ops-sm-7 mx-auto">
                                                        <button type="submit" class="btn ops-sm-12 btn-warning">Sign
                                                            in</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <hr />
                                            <form role="form" action="https://akademicwriters.com/order/client/register" method="POST">
                                                <div class="ops-form-group row">
                                                    <label for="exampleInputEmail1" class="ops-sm-3 col-form-label text-right text-muted">Email
                                                        address</label>
                                                    <div class="ops-sm-9">
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="client_email">
                                                        <small id="emailHelp" class="form-text text-muted">We'll email
                                                            your passsword here.</small>
                                                    </div>
                                                </div>
                                                <div class="ops-sm-7 mx-auto">
                                                    <button type="submit" class="btn ops-sm-12 btn-warning">Continue</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <link rel="stylesheet" type="text/css" href="./order_assets/css/dropzone/basic.min.css">
                <script type="text/javascript" src="./order_assets/js/dropzone/dropzone.min.js"></script>
                <script src="./order_assets/js/dropzone/ckeditor.js"></script>
                <style>
                    .row {
                        margin-right: -15px !important;
                        margin-left: -15px !important;

                    }
                </style>

                <section class="ops-features" id="ops-features">
                    <div class="container">
                        <div class="section-heading">
                            <h4>Place Order</h4>
                            <p>Fast, secure, and confidential</p>

                        </div>
                        <div class="row">
                            <div class="ops-lg-9 ops-md-12">
                                <div class="borderdottedleft">
                                   

                                    <?php

                                    // $ins_dt = json_decode($_POST['dt']);
                                    // // print_r($ins_dt);
                                    // $var = $ins_dt[0];
                                    // $var1 = $ins_dt[1];
                                    // $var2 = $ins_dt[2];
                                    // $var3 = $ins_dt[3];
                                    // $var4 = $ins_dt[4];
                                    // $var5 = $ins_dt[5];
                                    // $var6 = $ins_dt[6];
                                    // $var7 = $ins_dt[7];
                                    // $var8 = $ins_dt[8];
                                    // $var9 = $ins_dt[9];
                                    // 
                                    ?>
                                    
                                    <?php include "./order_assets/signup-login.php" ?>
                                    <br />
                                    
                                     <div class="row">
                                        <div class="ops-sm-6">
                                            <div class="rc-orderform__step-flag">
                                                <h6> 1. ORDER DETAILS </h6>
                                            </div>
                                        </div>


                                    </div>


                                    <hr />
                                    <form role="form" name="form" id="myform" action="./create.php" method="POST">

                                        <div class="ops-form-group opclick row">
                                            <label class="ops-sm-3"> Academic level </label>
                                            <div class="ops-sm-8 btn-group">
                                                <div class="row buttoncente" data-toggle="buttons">
                                                    <label class="btn btn-default ops-sm-4 active">
                                                        <input type="radio" checked name="ops_aclevel" id="ops_aclevel" value="0.91#High School">High School</input>
                                                    </label>
                                                    <label class="btn btn-default ops-sm-4 ">
                                                        <input type="radio" name="ops_aclevel" id="ops_aclevel" value="1#College">College</input>
                                                    </label>
                                                    <label class="btn btn-default ops-sm-4 ">
                                                        <input type="radio" name="ops_aclevel" id="ops_aclevel" value="1.15#Undergraduate">Undergraduate</input>
                                                    </label>
                                                    <label class="btn btn-default ops-sm-4 ">
                                                        <input type="radio" name="ops_aclevel" id="ops_aclevel" value="1.2#Masters">Masters</input>
                                                    </label>
                                                    <label class="btn btn-default ops-sm-4 ">
                                                        <input type="radio" name="ops_aclevel" id="ops_aclevel" value="1.3#PHD">PHD</input>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="ops-form-group row">
                                            <label for="exampleSelect1" class="ops-sm-3">Type of Paper</label>
                                            <select name="order_tpaper" class="form-control custom-select border-default ops-sm-8" id="exampleSelect1">
                                                <option value="1#essay" selected="selected">Essay (Any Type)</option>
                                                <option value="0.7#Accounting">Accounting</option>
                                                <option value="0.7#Admission Essay">Admission Essay</option>
                                                <option value="0.7#Annotated Bibliography">Annotated Bibliography
                                                </option>
                                                <option value="0.8#Argumentative Essay">Argumentative Essay</option>
                                                <option value="0.8#Article (Any Type)">Article (Any Type)</option>
                                                <option value="0.8#Article Review">Article Review</option>
                                                <option value="1.1#Assignment">Assignment</option>
                                                <option value="1#Book/Movie Review">Book/Movie Review</option>
                                                <option value="1#Business Plan">Business Plan</option>
                                                <option value="1#Capstone Project">Capstone Project</option>
                                                <option value="1#Case Study">Case Study</option>
                                                <option value="1#Content (Any Type)">Content (Any Type)</option>
                                                <option value="1.1#Coursework">Coursework</option>
                                                <option value="1#Creative Writing">Creative Writing</option>
                                                <option value="1#Critical Thinking">Critical Thinking</option>
                                                <option value="1.1#Dissertation">Dissertation</option>
                                                <option value="1.3#Dissertation chapter">Dissertation chapter</option>
                                                <option value="1#Essay (Any Type)">Essay (Any Type)</option>
                                                <option value="1.3#Lab Report">Lab Report</option>
                                                <option value="1.2#Math Problem">Math Problem</option>
                                                <option value="1#Other">Other</option>
                                                <option value="1#Presentation or Speech">Presentation or Speech</option>
                                                <option value="1#Q&A">Q&A</option>
                                                <option value="1.1#Research Paper">Research Paper</option>
                                                <option value="1.1#Research Proposal">Research Proposal</option>
                                                <option value="1#Research Summary">Research Summary</option>
                                                <option value="1#Scholarship Essay">Scholarship Essay</option>
                                                <option value="1#Speech">Speech</option>
                                                <option value="1#speech work">speech work</option>
                                                <option value="1.3#Statistic Project">Statistic Project</option>
                                                <option value="1.1#Term Paper">Term Paper</option>
                                                <option value="1.2#Thesis">Thesis</option>
                                            </select>
                                        </div>
                                        <div class="ops-form-group row">
                                            <label for="exampleSelect2" class="ops-sm-3">Subject Area</label>
                                            <select name="order_subject" class="form-control ops-sm-8 custom-select border-default" id="exampleSelect2">
                                                <option value="1#Any" selected="selected"> Select Subject </option>

                                                <option value="0.9#Accounting">Accounting</option>
                                                <option value="1#Actuarial Science ">Actuarial Science </option>
                                                <option value="0.9#Business">Business</option>
                                                <option value="1#Computer Science">Computer Science</option>
                                                <option value="1#Economics">Economics</option>
                                                <option value="0.9#Education">Education</option>
                                                <option value="1.2#Engineering">Engineering</option>
                                                <option value="1#English Literature">English Literature</option>
                                                <option value="1#Finance ">Finance </option>
                                                <option value="1.2#Health Science">Health Science</option>
                                                <option value="0.9#Healthcare">Healthcare</option>
                                                <option value="0.7#Law">Law</option>
                                                <option value="0.9#Media">Media</option>
                                                <option value="1.1#Physics">Physics</option>
                                                <option value="0.9#Political Science ">Political Science </option>
                                                <option value="1#Procurement ">Procurement </option>
                                                <option value="1#Social Science">Social Science</option>
                                            </select>
                                        </div>

                                        <div class="ops-form-group row">
                                            <label class="ops-sm-3" for="order_title">Title</label>
                                            <input type="text" name="order_title" class="form-control ops-sm-8 border-default" id="order_title" aria-describedby="emailHelp" placeholder="Enter topic" required>
                                        </div>

                                        <div class="ops-form-group row">
                                            <label for="exampleTextarea" class="ops-sm-3">Paper Instructions (optional)</label>
                                            <div class="ops-sm-8">
                                                <div class="row">
                                                    <textarea class="form-control border-default" name="order_instructions" id="editor"></textarea>

                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#editor'))
                                                            .catch(error => {
                                                                console.error(error);
                                                            });
                                                    </script>


                                                </div>
                                            </div>
                                        </div>




                                        <div class="ops-form-group row">
                                            <label for="exampleTextarea" class="ops-sm-3">Additional materials (optional)</label>
                                            <div class="dropzone text-center padding20 ops-sm-8">
                                                <div class="dz-message">
                                                    <p> Drag and Drop your files here Or Click here to upload</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ops-form-group opclick row">
                                            <label class="ops-sm-3"> Paper format </label>
                                            <div class="ops-sm-8 btn-group">
                                                <div class="row buttoncente" data-toggle="buttons">
                                                    <label class="ops-sm-3 btn btn-default active">
                                                        <input type="radio" name="order_citation" value="APA" checked>APA
                                                    </label>
                                                    <label class="btn btn-default ops-sm-3">
                                                        <input type="radio" name="order_citation" value="MLA">MLA
                                                    </label>
                                                    <label class="btn btn-default ops-sm-3">
                                                        <input type="radio" name="order_citation" value="Havard">Havard
                                                    </label>
                                                    <label class="btn btn-default ops-sm-3">
                                                        <input type="radio" name="order_citation" value="Other">Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="rc-orderform__step-flag">
                                            <h6> 2. PRICING DETAILS </h6>
                                        </div>
                                        <hr />
                                        <div class="ops-form-group row">
                                            <label class="ops-sm-3">Number of Pages</label>
                                            <div class="input-group ops-sm-4">

                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default border-default btn-number" disabled="disabled" data-type="minus" data-field="order_pages">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                </span>
                                                <input type="text" id="order_pages" name="order_pages" id="order_pages" class="form-control input-number border-default ops-sm-5 text-center" value="1" min="1" max="100" />
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default border-default btn-number" data-type="plus" data-field="order_pages">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                                <br />


                                            </div>



                                            <div class="ops-sm-4">
                                                <div class="btn-group">
                                                    <div class="row opclick" data-toggle="buttons">
                                                        <label class="ops-sm-6 btn btn-default active">
                                                            <input type="radio" name="order_spacing" value="1#Double" checked>Double Spaced
                                                        </label>
                                                        <label class="btn btn-default ops-sm-6">
                                                            <input type="radio" name="order_spacing" value="2#Single">Single Spaced
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <input id="words" name="words" type="hidden" value="275" />
                                        <div class="ops-form-group row">
                                            <label class="ops-sm-3" for="order_title"></label>
                                            <div class="ops-sm-8 wordcount"> 275 word approx </div>
                                        </div>



                                        <div class="ops-form-group opclick row">
                                            <label class="ops-sm-3" hidden> Currency </label>
                                            <div class="ops-sm-8 btn-group" hidden>
                                                <div class="row buttoncente" data-toggle="buttons" hidden>
                                                    <label class="btn btn-default ops-sm-3 active">
                                                        <input type="radio" id="cc" value="1#USD" name="order_currency" checked>USD

                                                    </label>

                                                    <label class="btn btn-default ops-sm-3">
                                                        <input type="radio" id="a1" value="0.88#GBP" name="order_currency">GBP
                                                    </label>
                                                    <label class="btn btn-default ops-sm-3">
                                                        <input type="radio" id="a1" value="1.3#EUR" name="order_currency">EUR
                                                    </label>
                                                    <label class="btn btn-default ops-sm-3">
                                                        <input type="radio" id="a1" value="1.3#AUD" name="order_currency">AUD
                                                    </label>

                                                    <!-- <input type="text" name="vals" hidden value=""> -->


                                                </div>

                                            </div>

                                        </div>



                                        <div class="ops-form-group row">
                                            <label class="ops-sm-3">Sources</label>
                                            <div class="input-group ops-sm-4">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default border-default btn-number" disabled="disabled" data-type="minus" data-field="order_sources">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                </span>
                                                <input type="text" id="order_sources" name="order_sources" class="form-control border-default input-number ops-sm-5 text-center" value="0" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-number border-default" data-type="plus" data-field="order_sources">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>

                                        <input type="text" hidden name="aclevel" id="aclevel" value="">
                                        <input type="text" hidden name="typaper" id="typaper" value="">
                                        <input type="text" hidden name="sbjct" id="sbjct" value="">
                                        <input type="text" hidden name="spcing" id="spcing" value="">
                                        <input type="text" hidden name="ddline" id="ddline" value="">
                                        <input type="text" hidden name="ntime" id="ntime" value="">
                                        <input type="text" hidden name="qlty" id="qlty" value="">

                                        <div class="ops-form-group row">
                                            <label class="ops-sm-3">PowerPoint Slides</label>
                                            <div class="input-group ops-sm-4">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default border-default btn-number" disabled="disabled" data-type="minus" data-field="order_pptslides">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                </span>
                                                <input type="text" id="order_pptslides" name="order_pptslides" class="form-control border-default input-number ops-sm-5 text-center" value="0" min="0" max="50">
                                                <input type="hidden" id="config_priceperslide" name="config_priceperslide" value="10">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-number border-default" data-type="plus" data-field="order_pptslides">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>


                                        <?php include "./order_assets/deadline.php" ?>



                                        <script type="text/javascript">
                                            Dropzone.autoDiscover = false;
                                            var file = new Dropzone(".dropzone", {
                                                url: "./upload.php",
                                                // maxFilesize: 30,  // maximum size to uplaod 
                                                acceptedFiles: ".pdf,.doc,.dot,.docx,.docm,.dotx,.dotm,.docb,.xls,.xlsx,.xlt,.xlm,.xlsm,.xltx,.xltm,.csv,.txt,.rtf,.htm,.html,.zip,.mp3,.mp4,.wma,.mpg,.flv,.avi,.jpg,.jpeg,.png,.gif,.pptx,.pptm,.ppt,.pot,.potx,.potm,.ppam,.ppsx,.ppsm,.sldx,.sldm,.accdb,.accde,.accdt,.accdr,.csv",

                                                method: "post",
                                                // acceptedFiles:"image/*", // allow only images
                                                paramName: "file",
                                                // dictInvalidFileType:"Image files only allowed", // error message for other files on image only restriction 
                                                addRemoveLinks: true,

                                            });


                                            file.on("sending", function(a, b, c) {
                                                a.token = Math.random();
                                                c.append("token", a.token); //Random Token generated for every files 
                                                c.append("file_orderid", 15); //pass order id 

                                            });


                                            // delete on upload 

                                            file.on("removedfile", function(a) {
                                                var token = a.token;
                                                $.ajax({
                                                    type: "post",
                                                    data: {
                                                        token: token
                                                    },
                                                    url: "",
                                                    cache: false,
                                                    dataType: 'json',
                                                    success: function(res) {
                                                        // alert('Selected file removed !');      

                                                    }

                                                });
                                            });
                                        </script>


                                        <div class="ops-form-group opclick row">
                                            <label class="ops-lg-3"> Writer category </label>
                                            <div class="ops-lg-8 btn-group">
                                                <div class="row" data-toggle="buttons">


                                                    <label class="btn  btn-default ops-sm-4 active">
                                                        <input type="radio" name="order_wquality" value="1#Standard" checked>

                                                        <h6> Standard </h6>
                                                        <hr />
                                                        <small> Standard Price writers</small>
                                                    </label>
                                                    <label class="btn  btn-default ops-sm-4">
                                                        <input type="radio" name="order_wquality" value="1.25#Premium">

                                                        <h6> Premium </h6>
                                                        <hr />
                                                        <small> High-rank professional writer,<br /> proficient in
                                                            <br /> the requested field of study</small>
                                                    </label>
                                                    <label class="btn  btn-default ops-sm-4 ">
                                                        <input type="radio" name="order_wquality" value="1.35#Platinum">

                                                        <h6> Platinum </h6>
                                                        <hr />
                                                        <small> English as a native <br /> language writer <br />(US,
                                                            UK, CA, AU writers)<br /> </small>
                                                    </label>


                                                </div>
                                            </div>
                                        </div>


                                        <div class="ops-form-group row">
                                            <label class="ops-sm-3" for="order_title" hidden>Preferred writer's ID</label>
                                            <input type="text" name="order_writer" hidden class="form-control ops-sm-8 border-default" id="order_prefwriter" aria-describedby="emailHelp" placeholder="optional" value="">
                                        </div>




                                        <div class="ops-form-group row">
                                            <label class="ops-sm-3" for="order_title">Additional services</label>
                                            <div class="ops-sm-8 addons">
                                                <label class="text-left checkbox" style="width: 100%;" for="Checkbox1">
                                                    <input value="0" name="order_upsells[]" type="checkbox" checked class="addon" data-toggle="checkbox" 0> VIP support <p style="float: right"> free </p>
                                                </label>




                                                <label class="text-left checkbox" style="width: 100%;" for="Checkbox1">
                                                    <input value="0" name="order_upsells[]" type="checkbox" checked class="addon" data-toggle="checkbox" 0> Plagiarism Report <p style="float: right"> free </p>
                                                </label>





                                            </div>
                                        </div>


                                        <div class="ops-form-group">
                                            <input type="hidden" name="order_clientid" class="form-control border-default" value="">
                                            <input type="hidden" name="client_email" value="">
                                        </div>

                                        <input id="order_amount" class="form-control fontbig form-control-plaintext" type="hidden" name="order_amount" value="" id="example-text-input">

                                        <input id="order_coupon" class="form-control" type="hidden" name="order_coupon" value="" id="example-text-input">

                                        <div id="subcontact" class="ops-form-group">

                                        </div>
                                        <input type="hidden" name="cpn_namedb" class="form-control ops-sm-8" required>
                                        <input type="hidden" name="order_timeline" value="">
                                        <input type="hidden" name="order_client" value="">

                                        <?php include "./order_assets/proceed_btn.php" ?>

                                    </form>


                                    <!-- Modal -->
                                    <div class="modal fade" id="loginerror" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ooops! Something
                                                        Wrong</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p> Appears your login or password is wrong </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Try Again</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 
                                    <script type="text/javascript">
                                        //callback handler for form submit
                                        $("#loginprocess").submit(function(e) {
                                            // prevent default submit behaviour 
                                            e.preventDefault();
                                            // serialize total form data
                                            var postData = $(this).serializeArray();

                                            // get form action url
                                            var formActionURL = $(this).attr("action");
                                            $("#submit").val('please wait...');
                                            // JQuery ajax method , for post we can directly use $.post({}); this is shortcut method for sending post request 
                                            $.ajax({
                                                url: formActionURL,
                                                type: "POST",
                                                data: postData,
                                            }).done(function(data) {
                                                $("#subcontact").html("<button class='btn-outline btn-xl js-scroll-trigger'>Proceed to Payment</button>");
                                                $('#signlogin').hide();
                                            }).fail(function() {
                                                $('#loginerror').modal('show');
                                            }).always(function() {
                                                $("#submit").val('submit');
                                            });
                                        });
                                    </script>


                                    <script type="text/javascript">
                                        //callback handler for form submit
                                        $("#contactForm").submit(function(e) {
                                            // prevent default submit behaviour 
                                            e.preventDefault();
                                            // serialize total form data
                                            var postData = $(this).serializeArray();

                                            // get form action url
                                            var formActionURL = $(this).attr("action");
                                            $("#submit").val('please wait...');
                                            // JQuery ajax method , for post we can directly use $.post({}); this is shortcut method for sending post request 
                                            $.ajax({
                                                url: formActionURL,
                                                type: "POST",
                                                data: postData,
                                            }).done(function(data) {
                                                $("#subcontact").html("<button class='btn-outline btn-xl js-scroll-trigger'>Proceed to Payment</button>");
                                                $('#signlogin').hide();
                                            }).fail(function() {
                                                alert("You are registered, log in instead");
                                            }).always(function() {
                                                $("#submit").val('submit');
                                            });
                                        });
                                    </script> -->



                                </div>
                            </div>
                            <div class="ops-lg-3 ops-md-12">
                                <div class="sticky-top">

                                    <div class="pricecalculate">


                                        <div style="font-size: 15px; font-weight: bold" class="topicright"> </div>
                                        <div class="ops_aclevelright"></div>
                                        <hr style="margin-bottom: 0px" />
                                        <div class="order_tpaperright"></div>
                                        <div class="order_subjectright"></div>

                                        <div class="row">
                                            <div class="ops-sm-6">
                                                <div class="order_pagesright float-left"></div>
                                            </div>
                                            <div class="ops-sm-6 font-weight-bold">
                                                <div class="totalsumright"> </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="ops-sm-6">
                                                <div class="order_slidesright"></div>
                                            </div>
                                            <div class="ops-sm-6 font-weight-bold">
                                                <div class="order_slidesrightprice"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="ops-sm-6">
                                                <div class="order_discountright"></div>
                                            </div>
                                            <div class="ops-sm-6 font-weight-bold">
                                                <div class="order_discountrightprice"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="ops-sm-6">
                                                <div class="dicontn"></div>
                                            </div>
                                            <div class="ops-sm-6 font-weight-bold">
                                                <div class="couponvv"></div>
                                            </div>
                                        </div>

                                        <hr style="margin-bottom: 0px" />
                                        <div class="row">
                                            <div class="ops-sm-6 font-weight-bold"> Total price </div>
                                            <div class="ops-sm-6 text-success font-weight-bold">
                                                <div class="orderamountc">$</div>
                                            </div>
                                        </div>
                                        <hr />

                                        <input id="words" type="hidden" value="275" style="width: 100px;border: 0px solid #fff;text-align: right" />
                                        <input id="addontotal" type="hidden" name="addontotal" value="0" id="df" readonly>
                                        <input id="addontotalp" type="hidden" name="addontotalp" value="1" id="df" readonly>
                                        <input type="hidden" name="cpn_value" id="cpn_value" class="form-control" value="1">
                                        <div class="alert alert-danger print-error-msg" style="display:none"> </div>


                                        <form class="coupon_area">

                                            <div class="ops-form-group row">
                                                <input type="text" name="cpn_name" class="form-control ops-sm-8" placeholder="Enter coupon" required>
                                                <button class="btn btn-success btn-submit ops-sm-3">Apply</button>

                                            </div>

                                        </form>

                                        <!--<img src="https://platinumassignments.com/order/uploads/5-discount.png" class="imgcenter" alt="DiscountCode" >-->


                                        <script type="text/javascript">
                                            $(document).ready(function() {

                                                $(".btn-submit").click(function(e) {

                                                    e.preventDefault();


                                                    var _token = $("input[name='_token']").val();

                                                    var cpn_name = $("input[name='cpn_name']").val();

                                                    $.ajax({

                                                        url: "./coupon.php",

                                                        type: 'POST',

                                                        // dataType: "json",

                                                        data: {
                                                            cpn_name: cpn_name
                                                        },

                                                        success: function(dataResult) {

                                                            var dataResult = JSON.parse(dataResult);

                                                            // if ($.isEmptyObject(data.error)) {
                                                            if (dataResult.statusCode != 200) {

                                                                $(".print-error-msg").css('display', 'block');

                                                                $(".print-error-msg").html("invalid code");

                                                            } else {
                                                                //Get

                                                                var bla = $('input[name="order_amount"]').val();
                                                                var code = dataResult.value
                                                                // var num = parseFloat(code) * parseFloat(bla);
                                                                var num = dataResult.value;
                                                                var discount_amount = parseFloat(bla) - parseFloat(num);
                                                                var discount_amnt = discount_amount;
                                                                var n_dic = discount_amnt.toFixed(2);

                                                                $(".success-msg").css('display', 'block');
                                                                $(".order_discountright").html('Discount');
                                                                // $(".order_discountrightprice").html('-$' + discount_amnt);
                                                                $(".order_discountrightprice").html('-$' + dataResult.value);
                                                                $(".orderamountc").html(n_dic);
                                                                // $('input[name="cpn_value"]').val(code);
                                                                $('input[name="cpn_namedb"]').val(cpn_name);
                                                                // $('input[name="order_coupon"]').val(code);
                                                                $('input[name="order_amount"]').val(n_dic);
                                                                $(".coupon_area").css('display', 'none');
                                                                $(".print-error-msg").css('display', 'none');


                                                                console.log(dataResult.value);

                                                            }
                                                            // else {

                                                            //     $(".print-error-msg").css('display', 'block');

                                                            //     $(".print-error-msg").html("Promocode can not be blank .Enter a Valid Promocode !");
                                                            // }

                                                        }


                                                    });


                                                });


                                            });
                                        </script>


                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </section>



                <span id="payment-total" class="hidden" style="font-size: 0px">0</span>
                <span id="payment-totalp" class="hidden" style="font-size: 0px">0</span>
                <script type="text/javascript">
                    var addon = document.getElementsByClassName('addon'),
                        total = document.getElementById('payment-total');
                    for (var i = 0; i < addon.length; i++) {
                        addon[i].onchange = function() {
                            var add = this.value * (this.checked ? 1 : -1);
                            total.innerHTML = parseFloat(total.innerHTML) + add
                            document.getElementById('addontotal').value = total.innerHTML;
                        }
                    }

                    var addonp = document.getElementsByClassName('addonp'),
                        totalp = document.getElementById('payment-totalp');
                    for (var i = 0; i < addonp.length; i++) {
                        addonp[i].onchange = function() {
                            var add = this.value * (this.checked ? 1 : -1);
                            totalp.innerHTML = parseFloat(totalp.innerHTML) + add
                            document.getElementById('addontotalp').value = totalp.innerHTML;
                        }
                    }
                </script>




                <script type="text/javascript">
                    $(document).on("change", function() {
                        var pptslides = $('[name="order_pptslides"]').val();
                        var slides = $('[name="order_pptslides"]').val() * $('[name="config_priceperslide"]').val();
                        var pages = $('[name="order_pages"]').val();
                        var ac = $('[name="order_deadline"]:checked').val();
                        var addon = $('[name="addontotal"]').val();
                        var addonp = $('[name="addontotalp"]').val();
                        if (addonp == 0) {
                            var addonpv = 1;
                        } else {
                            var addonpv = (addonp / 100) + 1;
                        }



                        var cap = $('[name="ops_aclevel"]:checked').val();
                        var currency = $('[name="order_currency"]:checked').val();
                        var tier = $('[name="order_wquality"]:checked').val();
                        var cpn_value = $('[name="cpn_value"]').val();
                        var spacing = $('[name="order_spacing"]:checked').val();
                        var subject = $('[name="order_subject"]').val();
                        var tpaper = $('[name="order_tpaper"]').val();
                        var num = ((parseFloat(cap) * parseFloat(currency) * parseFloat(ac) * parseFloat(tpaper) * parseFloat(addonpv) * parseFloat(subject) * parseFloat(tier) * parseFloat(spacing) * parseFloat(pages)) + 0 + parseFloat(addon) + parseFloat(slides)) * parseFloat(cpn_value);
                        var ordert = parseFloat(cap) * parseFloat(currency) * parseFloat(ac) * parseFloat(tpaper) * parseFloat(subject) * parseFloat(tier) * parseFloat(spacing) * parseFloat(pages);


                        var orderts = ordert.toFixed(2);

                        var n = num.toFixed(2);

                        //$(".coupon_area").css('display','block');

                        var currency = $('[name="order_currency"]:checked').val();
                        var currency_right = currency.split('#');
                        var currency_right1 = currency_right[1];

                        document.getElementById('order_amount').value = parseFloat(n);
                        document.getElementById('words').value = parseFloat(pages) * 275;

                        var perpageright = parseFloat(cap) * parseFloat(currency) * parseFloat(ac) * parseFloat(tier) * parseFloat(spacing);
                        var perpagerightn = perpageright.toFixed(2);

                        $(".totalsumright").html(currency_right1 + " " + orderts);

                        var cczero = 1 - cpn_value;
                        var ccone = parseFloat(cczero) * parseFloat(orderts);

                        var cctwo = ccone.toFixed(2);
                        if (cctwo > 0) {
                            $(".order_discountrightprice").html("-$" + cctwo);
                        }

                        $(".wordcount").html(parseFloat(pages) * parseFloat(spacing) * 275 + " words approx");
                        $(".orderamountc").html(currency_right1 + " " + n);
                        $(".topicright").html($('[name="order_title"]').val());
                        $(".order_pagesright").html($('[name="order_pages"]').val() + " pages x " + perpagerightn);

                        if (pptslides > -1) {
                            $(".order_slidesright").html($('[name="order_pptslides"]').val() + " PPT slides");
                            $(".order_slidesrightprice").html(currency_right1 + " " + slides);
                        }



                        var select_level = $('[name="ops_aclevel"]:checked').val();
                        var level_right = select_level.split('#');
                        var level_right1 = level_right[1];
                        $(".ops_aclevelright").html(level_right1);

                        var select_space = $('[name="order_spacing"]:checked').val();
                        var space_right = select_space.split('#');
                        var space_right1 = space_right[1];

                        var select_quality = $('[name="order_wquality"]:checked').val();
                        var quality_right = select_quality.split('#');
                        var select_quality1 = quality_right[1];

                        var select_subject = $('[name="order_subject"]').val();
                        var subject_right = select_subject.split('#');
                        var subject_right1 = subject_right[1];
                        $(".order_subjectright").html(subject_right1);

                        var select_tpaper = $('[name="order_tpaper"]').val();
                        var select_tpaper = select_tpaper.split('#');
                        var select_tpaper1 = select_tpaper[1];
                        $(".order_tpaperright").html(select_tpaper1);


                        var deadline = $('[name="order_deadline"]').val();
                        var theTime = new Date();

                        var deadline0 = deadline;
                        var deadline1 = deadline0.split('#');
                        var deadline2 = deadline1[1];
                        var deadline3 = deadline2.split(' ');
                        var duration = deadline3[1];
                        var dvalue = deadline3[0];

                        console.log(deadline0);
                        console.log(deadline1);
                        console.log(deadline2);


                        if (duration == 'Hours') {
                            var chosentime = dvalue * 60 * 60 * 1000;

                        } else {
                            var timeHours = dvalue * 24;
                            var chosentime = dvalue * 24 * 60 * 60 * 1000;
                        }

                        var newTime = new Date(Date.parse(theTime) + chosentime);


                        $(".newdeadline").html(newTime);

                        var vals = [level_right1, select_tpaper1,
                            subject_right1, space_right1, deadline2,
                            newTime, select_quality1
                        ];

                        var val1 = level_right1;
                        var val2 = select_tpaper1;
                        var val3 = subject_right1;
                        var val4 = space_right1;
                        var val5 = deadline2;
                        var val6 = newTime;
                        var val7 = select_quality1;


                        // $.ajax({
                        //     url: "./create.php",
                        //     method: "post",
                        //     data: {
                        //         vals: JSON.stringify(vals)
                        //     },
                        //     success: function(res) {
                        //         console.log(res);
                        //         $("#my_data").val(vals);
                        //     }
                        // });

                        $("#aclevel").val(val1);
                        $("#typaper").val(val2);
                        $("#sbjct").val(val3);
                        $("#spcing").val(val4);
                        $("#ddline").val(val5);
                        $("#ntime").val(val6);
                        $("#qlty").val(val7);


                    });


                    function myFunction() {
                        var y = document.getElementById("a4").value;
                        var z = document.getElementById("a3").value;
                        var x = y + z;
                        document.getElementById('a5').value = parseFloat(NameValue);
                    }
                </script>



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

                <div class="pricingbottom">
                    <div class="row ops-sm-12">
                        <div class="col">
                            <div class="order_pagesright float-left"></div>
                        </div>
                        <div class="col font-weight-bold">
                            <div class="orderamountc"> </div>
                        </div>
                    </div>

                </div>
            </div>
            
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/633ba07654f06e12d89847d1/1gegeljq6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
            
        </div>
    </div>
    
    
</body>