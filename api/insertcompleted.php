<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));


if (isset($data->name)) {

    $ordid = $data->ord_id;
    $wrtname = $data->name;
    $ttl = $data->title;
    // $msg = $data->message;
    // $email = $data->email;
    $wrtid = $data->wrtid;
    $file_url = $data->file_url;

    // ===============================================================================================================

    $ordertitle = mysqli_real_escape_string($db_conn, trim($data->title));
    $wrt_name = mysqli_real_escape_string($db_conn, trim($data->name));
    // $clemail = mysqli_real_escape_string($db_conn, trim($data->email));
    // $admsg = mysqli_real_escape_string($db_conn, trim($data->message));
    $order_id = mysqli_real_escape_string($db_conn, trim($data->ord_id));
    $wrt_id = mysqli_real_escape_string($db_conn, trim($data->wrtid));
    $fileUrl = mysqli_real_escape_string($db_conn, trim($data->file_url));
    $fileName = mysqli_real_escape_string($db_conn, trim($data->file_name));
    $fileType = mysqli_real_escape_string($db_conn, trim($data->file_type));
    $fileSize = mysqli_real_escape_string($db_conn, trim($data->file_size));

    $add = mysqli_query($db_conn, "INSERT INTO completed (name,email,writer_id,title,order_id,file_url,file_name,type,size,message) VALUES('$wrt_name','null','$wrt_id','$ordertitle','$order_id','$fileUrl','$fileName','$fileType','$fileSize','null')");
    if ($add) {

        $last_id = mysqli_insert_id($db_conn);
        // $fl = mysqli_query($db_conn, "SELECT * FROM completed WHERE order_id = '$ordid' AND id = '$last_id'");

        $update = mysqli_query($db_conn, "UPDATE orders SET order_status = 'COMPLETED' WHERE id = '$ordid'");
        // $to = $email;
        // $subject = "Order Delivery";
        // $headers = array(
        //     "MIME-Version" => "1.0",
        //     "Content-Type" => "text/html;charset=UTF-8",
        //     "From" => "graduateessaywriters@gmail.com",
        //     "Reply-To" => "graduateessaywriters@gmail.com"
        // );
        // $message = file_get_contents("gmail.php");
        // $message = str_replace("your order of id no #", "your order of id no #{$ordid}", $message);

        // ob_start();
        // include("email/index.php");
        // $message = ob_get_contents();

        // ob_get_clean();

        // $sender = mail($to, $subject, $message, $headers);
        // mail($email, $subject, $message, $sender);

        // echo ($sender ? "Mail is sent" : "There was an error sending");



        $last_id = mysqli_insert_id($db_conn);
        echo json_encode(["success" => true, "insertid" => $last_id]);
        return;
    } else {
        echo json_encode(["success" => false, "msg" => "Server Problem. Please Try Again"]);
        return;
    }
} else {
    echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
    return;
}

// ===============================================================================
