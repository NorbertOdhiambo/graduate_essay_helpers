<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));


if (isset($data->name)) {

    $ordid = $data->ord_id;
    $usname = $data->name;
    $ttl = $data->title;
    $msg = $data->message;
    $email = $data->email;
    $userid = $data->user_id;
    $file_url = $data->file_url;
    $file_name = $data->file_name;

    // ===============================================================================================================

    $ordertitle = mysqli_real_escape_string($db_conn, trim($data->title));
    $clname = mysqli_real_escape_string($db_conn, trim($data->name));
    $clemail = mysqli_real_escape_string($db_conn, trim($data->email));
    $admsg = mysqli_real_escape_string($db_conn, trim($data->message));
    $order_id = mysqli_real_escape_string($db_conn, trim($data->ord_id));
    $cln_id = mysqli_real_escape_string($db_conn, trim($data->user_id));
    $fileUrl = mysqli_real_escape_string($db_conn, trim($data->file_url));
    $fileName = mysqli_real_escape_string($db_conn, trim($data->file_name));
    $fileType = mysqli_real_escape_string($db_conn, trim($data->file_type));
    $fileSize = mysqli_real_escape_string($db_conn, trim($data->file_size));

    $add = mysqli_query($db_conn, "INSERT INTO delivered (name,email,user_id,title,order_id,file_url,file_name,type,size,message) VALUES('$clname','$clemail','$cln_id','$ordertitle','$order_id','$fileUrl','$fileName','$fileType','$fileSize','$admsg')");
    if ($add) {
        
        
        $to = $email;
        $subject = "Order Delivery";
        $headers = array(
            "MIME-Version" => "1.0",
            "Content-Type" => "text/html;charset=UTF-8",
            "From" => "graduateessaywriters@gmail.com",
            // "Reply-To" => "graduateessaywriters@gmail.com"
            "Reply-To" => "odhiambonorbert194@gmail.com"
        );
        $message = file_get_contents("email/index.php");
        $message = str_replace("your order of id no #", "your order of id no #{$ordid}", $message);
        $message = str_replace("Dear ", "Dear {$usname}", $message);
        $message = str_replace("href='' ", "href='{$file_url}'", $message);
        $sender = mail($to, $subject, $message, $headers);

        
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
