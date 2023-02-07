<?php

session_start();
if ($_SESSION['id'] == '') {
    // header('location: ./user/login.php');
}
// $_SESSION['id'] = '';

$id = $_SESSION['id'];
$result = mysqli_query($con, "SELECT * FROM tbl_users where id='$id'");
while ($row = mysqli_fetch_array($result)) {
    $user_role = $row['id'];
    $user_email = $row['email'];
    $user_name = $row['username'];
}
