<?php
include('.././admin/conn.php');

if(isset($_POST['submit'])){
    $from = 'graduateessaywriters@gmail.com';
    $subject     = 'Reset Password';
    // $email = mysqli_real_escape_string($con, $_POST['email']);
    extract($_POST);
    $to = $email;
    $check = mysqli_query($con, "select * from tbl_users where email='$email'");
    $check_fetch = mysqli_fetch_array($check);

    if ($check_fetch['id'] != '') { ?>
        <?php
        $id = $check_fetch['id'];
        $headers .= 'From: ' . $from . "\r\n" .
            // 'Reply-To: ' . $to . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $message = 'https://' . $_SERVER['HTTP_HOST'] . '/user/password-reset.php?id=' . $id . '';
        mail($to, $subject, $message, $headers);
        ?>
        <script>alert('Please verify your email and change password...');
        window.location.href = "login.php";
        </script>
        <?php
        //echo 'Your mail has been sent successfully.';
        // header('location: login.php');
    } else {
        echo 'Unable to send email. Please try again.';
    }
}

?>