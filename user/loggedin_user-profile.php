<?php
// include "../admin/conn.php";
// include "../admin/auth.php";
// Starting the session, to use and
// store data in session variable
// session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['id'])) {

    $_SESSION['msg'] = "You have to log in first";
    // header('location: ./user/login.php');
?>
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
                                <form role="form" action="" method="POST">
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
<?php
} else {
?>
    <header class="opskillheader">
        <!-- Navigation -->

        <?php
        $user_id = $_SESSION['id'];

        $orders = mysqli_query($con, "SELECT count(user_id) FROM orders WHERE user_id=$user_id");
        $fetch = mysqli_fetch_array($orders);
        ?>

        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container">
                <a class="navbar-brand  ops-sm-2 js-scroll-trigger" href="https://graduate-essay-helpers.com/profile/my-account.php">My Profile

                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse ops-sm-10  navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger mail" href="https://graduate-essay-helpers.com/profile/my-account.php"><i class="fa fa-user-o" aria-hidden="true"></i>
                                <?php echo strtoupper($_SESSION['email']); ?> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="https://graduate-essay-helpers.com/order/my-order.php">My Orders (<?php echo $fetch[0]; ?>)
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i> (0)
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="dropdown-divider"></div>
                                <p style="margin-bottom: 0px" class="text-center"> <a href=""> Old Msgs </a></p>

                            </div>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="">Wallet ($0) </a>
                        </li> -->

                        <!-- <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="https://akademicwriters.com/order/affiliate">Affiliate </a>
                    </li> -->
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="https://graduate-essay-helpers.com/user/logout.php?logout='1'">Logout</a>
                        </li>

                        <li class="nav-item">
                            <a class="orderhire-bg border rounded" href="https://graduate-essay-helpers.com/order.php">Place Order </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <style>
            .mail {
                text-transform: lowercase;
            }
        </style>

    </header>
<?php } ?>


<?php
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    header("location: ./login.php");
}
?>

<?php
if ($_SESSION['id'] != '') {
    // echo "session on";
}
?>