<?php
include('.././admin/conn.php');
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    extract($_POST);
    if ($new_pass == $conf_pass) {
        echo "$new_pass" . "<br />";
        echo "$id";
        $insertdata = mysqli_query($con, "UPDATE tbl_users SET pwd='$new_pass' WHERE id='$id'");
        if ($insertdata) {
//             echo "<script>alert('Updated Successfully');</script>
// 	<script>window.location.href = 'login.php'</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match!!');
        </script>";
    }
}
