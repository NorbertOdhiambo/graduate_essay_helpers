<?php
include "../admin/conn.php";
// include "../admin/auth.php";

session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['user_email']);
    $password = mysqli_real_escape_string($con, $_POST['user_pass']);

    $password = md5($password);

    $con . open();

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
}
?>