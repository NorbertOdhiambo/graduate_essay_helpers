<?php
require 'db_conn.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->gen_coupon)) {

    $gen_coupon = mysqli_real_escape_string($db_conn, trim($data->gen_coupon));
    $discount = mysqli_real_escape_string($db_conn, trim($data->discount));
    $offer_to = mysqli_real_escape_string($db_conn, trim($data->offer_to));
    $user_id = mysqli_real_escape_string($db_conn, trim($data->user_id));
    $expiration_date = mysqli_real_escape_string($db_conn, trim($data->expiration_date));

    $qry = mysqli_query($db_conn, "SELECT * FROM tbl_users WHERE id = $user_id");
    $row = mysqli_fetch_array($qry);


    $add = mysqli_query($db_conn, "insert into coupon (coupon_code,discount,status,expiry_date,user_email,user_id) values('$gen_coupon','$discount','valid','$expiration_date','$offer_to','$user_id')");
    if ($add) {
        $last_id = mysqli_insert_id($db_conn);
        echo json_encode(["success" => true, "insertid" => $last_id]);

        // $subject = "Discount Coupon";
        $name = $row['first_name'];
        $email = $row['email'];
        // $message = "Hi $name, " . "<br />" . " We are greatful to have you as one of our clients on our " . '<a href="https://graduate-essay-helpers.com">site</a>' . ". Here is a discount coupon for your next order. " . "<br />" . "Coupon Code: $gen_coupon" . "<br />" . "Valid until: $expiration_date" . "<br />" . "<br />" . " Have a great day!";
        // $sender = "From: graduateessaywriters@gmail.com";
        // mail($email, $subject, $message, $sender);
        
        // $to = $row['email'];
        // $subject = "Discount Coupon";
        // $headers = array(
        //     "MIME-Version" => "1.0",
        //     "Content-Type" => "text/html;charset=UTF-8",
        //     "From" => "graduateessaywriters@gmail.com",
        //     // "Reply-To" => "graduateessaywriters@gmail.com"
        // );

        // ob_start();
        // include("./cpn_email.php");
        // $message = ob_get_contents();

        // ob_get_clean();

        // $sender = mail($to, $subject, $message, $headers);
        // mail($email, $subject, $message, $sender);
        
        $to = $email;
        $subject = "Discount Coupon";
        $headers = array(
            "MIME-Version" => "1.0",
            "Content-Type" => "text/html;charset=UTF-8",
            "From" => "graduateessaywriters@gmail.com",
            // "Reply-To" => "graduateessaywriters@gmail.com"
        );
        $message = file_get_contents("./cpn_email.php");
        $message = str_replace("Hello ", "Hello {$name}", $message);
        $message = str_replace("Coupon Code: ", "Coupon Code: {$data->gen_coupon}", $message);
        $message = str_replace("Valid until: ", "Valid until: {$data->expiration_date}", $message);
        $sender = mail($to, $subject, $message, $headers);

        return;
    } else {
        echo json_encode(["success" => false, "msg" => "Server Problem. Please Try Again"]);
        return;
    }
} else {
    echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
    return;
}

echo "add user test file...";
