<?php
include "../admin/conn.php";
include "../admin/auth.php";

if (isset($_POST['continue'])) {
    // receive all input values from the register.php form
    $email = mysqli_real_escape_string($con, $_POST['client_email']);
    $password = mysqli_real_escape_string($con, $_POST['client_pass']);
    $phone = mysqli_real_escape_string($con, $_POST['client_phone']);
    $country = mysqli_real_escape_string($con, $_POST['client_country']);
    // by using array_push() corresponding errors in $errors() which is an array of errors.
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    //fistly check in database that a user does not already exist with the same username and/or email.
    $get_all = "SELECT * FROM tbl_users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $get_all);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['email'] === $email) {
            array_push($errors, "email already exists!");
        }
    }

    // Finally, register user if no error
    if (count($errors) == 0) { ?>
        <?php
        $pwd_enc = md5($password); //encrypt the password before inserting in the database

        $register = "INSERT INTO tbl_users (email, pwd, phone)
                            VALUES('$email', '$pwd_enc', '$country + $phone')";
        mysqli_query($con, $register);

        $check = mysqli_query($con, "select * from tbl_users where email='$email' and pwd='$pwd_enc'");
        $check_fetch = mysqli_fetch_array($check);

        if ($check_fetch['id'] != '') {
            $_SESSION['id'] = $check_fetch['id'];

            $_SESSION['email'] = $email;

            header('location: https://graduate-essay-helpers.com/order.php');
        } ?>
        <script>
            window.location.reload();
        </script>
    <?php


        // header('location: https://graduate-essay-helpers.com/order.php');
    }
}


if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['user_email']);
    $password = mysqli_real_escape_string($con, $_POST['user_pass']);

    $password = md5($password);

    $check = mysqli_query($con, "select * from tbl_users where email='$email' and pwd='$password'");
    $check_fetch = mysqli_fetch_array($check);

    if ($check_fetch['id'] != '') { ?>
    <?php
        $_SESSION['id'] = $check_fetch['id'];

        $_SESSION['email'] = $email;

        header('location: https://graduate-essay-helpers.com/order.php');
    }
    ?>
    <script>
        window.location.reload();
    </script>
<?php
} else {
?>
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
<?php
}
?>