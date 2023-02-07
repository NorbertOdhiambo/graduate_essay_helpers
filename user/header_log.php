<?php
include "./admin/conn.php";
include "./admin/auth.php"
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

                            <?php
                            if (isset($_POST['submit'])) {
                                $email = mysqli_real_escape_string($con, $_POST['user_email']);
                                $password = mysqli_real_escape_string($con, $_POST['user_pass']);

                                $password = md5($password);

                                $check = mysqli_query($con, "select * from tbl_users where email='$email' and pwd='$password'");
                                $check_fetch = mysqli_fetch_array($check);

                                if ($check_fetch['id'] != '') {
                                    $_SESSION['id'] = $check_fetch['id'];

                                    $_SESSION['email'] = $email;

                                    header('location: ../order.php');
                                }
                            }
                            ?>

                            <form role="form" action="login.php" method="POST">
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
                                        <small><a href="reset-password.php">Forgot
                                                Password</a></small>
                                    </div>
                                </div>
                                <div class="ops-form-group row">
                                    <div class="ops-sm-7 mx-auto">
                                        <button type="submit" name="submit" class="btn ops-sm-12 btn-warning">Sign
                                            in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <hr />
                            <form role="form" action="register.php" method="POST">
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
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>