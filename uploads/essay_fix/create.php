<?php
include "./admin/conn.php";
include "./admin/auth.php";

$user_id = $_SESSION['id'];
$_SESSION['email'] = $user_email;
$email = $_SESSION['email'];

if (isset($_POST['proceed'])) {


    $type_of_paper = $_REQUEST['typaper'];
    $subject_area = $_REQUEST['sbjct'];
    $academic_level = $_REQUEST['aclevel'];
    $title = mysqli_real_escape_string($con, $_POST['order_title']);
    $no_of_pages = $_POST['order_pages'];
    $no_of_sources = mysqli_real_escape_string($con, $_POST['order_sources']);
    $pp_format = mysqli_real_escape_string($con, $_POST['order_citation']);
    $spacing = $_REQUEST['spcing'];
    $ppt_slides = mysqli_real_escape_string($con, $_POST['order_pptslides']);
    $deadline = $_REQUEST['ddline'];
    $quality_level = $_REQUEST['qlty'];
    $timeline = $_REQUEST['ntime'];
    $referencing_style = mysqli_real_escape_string($con, $_POST['order_sources']);
    $total = $_REQUEST['order_amount'];
    $instructions = mysqli_real_escape_string($con, $_POST['order_instructions']);


    $insertdata = mysqli_query($con, "INSERT INTO orders(user_id, type_of_paper, subject_area, academic_level,
title, no_of_pages, no_of_sources, pp_format, spacing, ppt_slides, writer_id, deadline,
quality_level, timeline, referencing_style, total, order_status, instructions, payment_status)VALUES('$user_id',
'$type_of_paper','$subject_area','$academic_level', '$title', '$no_of_pages','$no_of_sources','$pp_format','$spacing','$ppt_slides','null',
'$deadline','$quality_level','$timeline','$referencing_style','$total','PENDING','$instructions',
'pending')");

    $order_id = mysqli_insert_id($con);

    if ($insertdata) {
        $subject = "Order Posting";
        $message = "Your order #$order_id has been posted successfully...";
        $sender = "From: graduateessaywriters@gmail.com";
        mail($email, $subject, $message, $sender);
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }

    if ($insertdata) {
        $subject1 = "Order Posting";
        $message1 = "User of email address $user_email made a new order number #$order_id...";
        $to = "muuokiv@gmail.com";

        mail($to, $subject1, $message1);
    }


    $words = $_REQUEST['words'];
    $client_id = $_REQUEST['order_clientid'];
    $client_email = $_REQUEST['client_email'];
    $amount = $_REQUEST['order_amount'];
    $coupon = $_REQUEST['order_coupon'];
    $cpn_namedb = $_REQUEST['cpn_namedb'];
    $timeline = $_REQUEST['order_timeline'];
    $order_client = $_REQUEST['order_client'];
    $total_p = $_REQUEST['addontotalp'];

    $datainsert = mysqli_query($con, "INSERT INTO hidden(client_id,client_email,words,amount,coupon,cpn_namedb,order_client,
        total,total_p,cpn_value,timeline)VALUES('$user_id', '$user_email', '$words', '$amount', '$coupon', '$cpn_namedb', '$order_client',
        'null', '$total_p', 'null', '$timeline')");


    header("location: ./upload.php?id=" . $order_id);
}
