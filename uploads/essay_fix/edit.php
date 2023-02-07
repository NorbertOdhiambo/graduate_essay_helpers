<?php
include "./admin/conn.php";
include "./admin/auth.php";

$user_id = $_SESSION['id'];
$order_id = $_GET['id'];
$_SESSION['email'] = $user_email;
$email = $_SESSION['email'];


if (isset($_POST['edit_btn'])) {
    
   header("location: ./order/order-checkout.php?id=" . $order_id);
?>
    <?php


    $title = $_POST['order_title'];
    $paper_type = $_POST['order_tpaper'];
    $subject = $_POST['order_subject'];
    $no_sources = $_POST['order_sources'];
    $format = $_POST['order_citation'];
    $instructions = $_POST['order_instructions'];

    $update = mysqli_query($con, "UPDATE orders SET title='$title', type_of_paper='$paper_type', subject_area='$subject', no_of_sources='$no_sources', pp_format='$format', instructions='$instructions' WHERE id = '$order_id'");

    if ($insertdata) {
        $subject = "Order Update";
        $message = "Changes in your order #$order_id have successfully been posted and addressed to writer";
        $sender = "From: graduateessaywriters@gmail.com";
        mail($email, $subject, $message, $sender);
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }

    if ($insertdata) {
        $subject1 = "Order Posting";
        $message1 = "User of email address $user_email has made changes to their order number #$order_id...";
        $to = "muuokiv@gmail.com";

        mail($to, $subject1, $message1);
    }

    ?>
    <script>
        alert("order edits updated successfully...");
    </script>
<?php



}
