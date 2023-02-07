<?php
include "../admin/conn.php";
include "../admin/auth.php";

if (isset($_POST['continue'])) {
    // receive all input values from the register.php form
    $fname = mysqli_real_escape_string($con, $_POST['first_name']);
    $lname = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['client_email']);
    $password = mysqli_real_escape_string($con, $_POST['client_pass']);
    $password2 = mysqli_real_escape_string($con, $_POST['confirm_pass']);
    $phone = mysqli_real_escape_string($con, $_POST['client_phone']);
    $country = $_REQUEST['client_country'];
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
?>
            <script>
                alert("Email already exists! \nIf already registered, login instead.");
                window.location.href = "../order.php";
            </script>
        <?php
        }
    }

    if ($password != $password2) {
        array_push($errors, "The two passwords do not match");
        ?>
        <script>
            alert("The two passwords do not match");
            window.location.href = "../order.php";
        </script>
    <?php
    }

    // Finally, register user if no error
    if (count($errors) == 0) {

        $pwd_enc = md5($password); //encrypt the password before inserting in the database

        $register = "INSERT INTO tbl_users (first_name, last_name, email, pwd, country, phone)
                                        VALUES('$fname', '$lname', '$email', '$pwd_enc', '$country', '$phone')";
        mysqli_query($con, $register);
        $dtsql = mysqli_query($con, $register);

        if ($dtsql) {
            $subject = "Account Registration";
            $message = "Your account was successfully created. Thank you for creating an accounting with us...";
            $sender = "From: graduateessaywriters@gmail.com";
            mail($email, $subject, $message, $sender);
        }

        // header('location: ../essay-helpers/order.php');
        $id = mysqli_insert_id($con);

        $check = mysqli_query($con, "select * from tbl_users where email='$email' and pwd='$pwd_enc' and id='$id'");
        $check_fetch = mysqli_fetch_array($check);

        if ($check_fetch['id'] != '') {
            $_SESSION['id'] = $check_fetch['id'];

            $_SESSION['email'] = $email;

            header('location: ../order.php');
        } ?>
        <script>
            window.location.reload();
        </script>
<?php
    }
}
?>