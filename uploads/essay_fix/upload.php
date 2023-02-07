<?php
error_reporting(0);
include './admin/conn.php';
include './admin/auth.php';

$user_id = $_SESSION['id'];
$order_id = $_GET['id'];
$uploadDir = 'uploads';

$tmpFile = $_FILES['file']['tmp_name'];
$filetype = $_FILES["file"]["type"];
$filesize = $_FILES["file"]["size"];

// upload file to directory
// $filename = $uploadDir . '/' . time() . '-' . $_FILES['file']['name'];
$filename = $uploadDir . '/' . time() . '-' . $_FILES['file']['name'];
move_uploaded_file($tmpFile, $filename);

$_SESSION['upload'] = $filename;

if ($_SESSION['upload'] != "") {

    if ($_FILES['file']['name'] != "") {
        // insert file into db
        $sql = "INSERT INTO additional_material(order_id,user_id,file,type,size,time) VALUES('$order_id','$user_id','$filename','$filetype','$filesize',NOW())";
        mysqli_query($con, $sql);

        $file_id = mysqli_insert_id($con);
        $_SESSION['file_id'] = $file_id;
    }

    if ($_SESSION['file_id'] != "" || $_SESSION['file_id'] != 0) {

        $update = mysqli_query($con, "UPDATE additional_material SET order_id = $order_id WHERE time > now() - interval 3 minute AND user_id=$user_id");

    }
}


$nxt = mysqli_query($con, "SELECT * FROM orders WHERE id = $order_id");
// $pg = mysqli_fetch_assoc($nxt);

// while ($pg = mysqli_fetch_assoc($nxt)) {
    header("location: ./order/order-checkout.php?id=" . $order_id);
//     exit;
// }
