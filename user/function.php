<?php
include('./admin/conn.php');
session_start();

// Query checks if the email and password are present in the database.
$stmt = mysqli_prepare($con, "SELECT id, email, pwd FROM tbl_users WHERE email = ? AND pwd = ?");
$stmt->bind_param('s', $_POST['email'], md5($_POST['pwd']));
$stmt->execute();
$result = $stmt->get_result();

// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($result->num_rows === 0) {
    $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
    header('location: login.php?error=' . $error);
} else {
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location: products.php');
}
