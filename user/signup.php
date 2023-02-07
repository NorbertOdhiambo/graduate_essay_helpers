<?php
include('.././admin/conn.php');
// include('error.php');

// Starting the session, necessary
// for using session variables
session_start();

// Declaring and hoisting the variables
$fname = "";
$lname = "";
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
// $db = mysqli_connect('localhost', 'root', '', 'registration');

// Registration code
if (isset($_POST['reg_user'])) {

    // Receiving the values entered and storing
    // in the variables
    // Data sanitization is done to prevent
    // SQL injections
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

    // Ensuring that the user has not left any input field blank
    // error messages will be displayed for every blank input
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "Unfortunately passwords do not match!");
        // Checking if the passwords match
    }

    // If the form is error free, then register the user
    if (count($errors) == 0) {

        // Password encryption to increase data security
        $password = md5($password_1);

        // Inserting data into table
        $query = "INSERT INTO tbl_users (first_name, last_name, email, username, pwd)
                  VALUES('$fname', '$lname', '$email', '$username', '$password')";

        mysqli_query($con, $query);

        // Storing username of the logged in user,
        // in the session variable
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        // Welcome message
        $_SESSION['success'] = "You have logged in";

        // Page on which the user will be
        // redirected after logging in
        header('location: ../order.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' id='bootstrap-css' href='https://cdn.usebootstrap.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' media='all' />

    <link rel='stylesheet' href='../css/mega-menu.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../css/header-style.css' type='text/css' media='all' />

    <link rel="stylesheet" href="../css/icofont/icofont.min.css">

    <link rel='stylesheet' id='animate-css' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css' href='../css/rt-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='radiantthemes-user-custom-css' href='../css/rt-custom.css' type='text/css' media='all' />

    <link rel='stylesheet' id='dynamic-css' href='../css/rt-dynamic.css' type='text/css' media='all' />
    <link rel="stylesheet" href="../css/button-element.css">
    <link rel='stylesheet' id='js_composer_front-css' href='../css/js_composer.min.css' type='text/css' media='all' />
    <link rel="stylesheet" href="../css/writers/js_composer.css">


    <!-- Bootstrap core CSS -->
    <link href="https://akademicwriters.com/order/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://akademicwriters.com/order/public/font-awesome/css/fontawesome-all.min.css">
    <!-- Custom styles for this template -->
    <link href="https://akademicwriters.com/order/public/opskill-styles.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-migrate-1.4.1.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js" integrity="sha512-oa3uxr5BZK3h58O9sYSH4Tx6CyZrYVpIpq6jq01gymOTACaXoqA998MJkyRuIeNs+QuVHJUqr1tBsmbjwdTKBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/startsize.js"></script>
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/dynamic.css" class="options-output" />

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

        <?php
        include "../assets/header.php"
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


                <section class="download features" id="download">
                    <div class="row">
                        <div class="ops-md-5 mx-auto box-shadow">
                            <h4 class="text-center">Sign Up</h4>
                            <div class="ops-md-12">
                                <form role="form" action="signup.php" method="POST">
                                    <div class="ops-form-group row">
                                        <label for="inputEmail3" class="ops-sm-3 col-form-label text-muted">First name</label>
                                        <div class="ops-sm-9">
                                            <input type="text" name="fname" class="form-control" id="inputEmail3" placeholder="First name" required>
                                        </div>
                                    </div>
                                    <div class="ops-form-group row">
                                        <label for="inputEmail3" class="ops-sm-3 col-form-label text-muted">Last name</label>
                                        <div class="ops-sm-9">
                                            <input type="text" name="lname" class="form-control" id="inputEmail3" placeholder="Last name" required>
                                        </div>
                                    </div>
                                    <div class="ops-form-group row">
                                        <label for="inputEmail3" class="ops-sm-3 col-form-label text-muted">Email</label>
                                        <div class="ops-sm-9">
                                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="ops-form-group row">
                                        <label for="inputEmail3" class="ops-sm-3 col-form-label text-muted">Username</label>
                                        <div class="ops-sm-9">
                                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="ops-form-group row">
                                        <label for="inputPassword3" class="ops-sm-3 col-form-label text-muted">Password</label>
                                        <div class="ops-sm-9">
                                            <input type="password" name="password_1" class="form-control" id="inputPassword3" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="ops-form-group row">
                                        <label for="inputPassword3" class="ops-sm-3 col-form-label text-muted">Confirm password</label>
                                        <div class="ops-sm-9">
                                            <input type="password" name="password_2" class="form-control" id="inputPassword3" placeholder="Confirm password" required>
                                            <small>Already have an account?</small> &nbsp;&nbsp;&nbsp;&nbsp;
                                            <small><a href="login.php">Login</a></small>
                                        </div>
                                    </div>
                                    <div class="ops-form-group row">
                                        <div class="offset-sm-2 ops-sm-10">
                                            <button type="submit" class="btn btn-primary" name="reg_user">Sign up</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>