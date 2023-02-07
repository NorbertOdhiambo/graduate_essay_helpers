<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));


if (isset($data->file_name)) {

    $ordid = $data->ord_id;
    $usname = $data->name;
    $ttl = $data->title;
    $conf_upload = $data->conf_upload;
    $email = $data->email;
    $userid = $data->user_id;
    $file_url = $data->file_url;

    // ===============================================================================================================

    // if ($conf_upload == "true") {

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


    $add = mysqli_query($db_conn, "INSERT INTO blog (name,email,user_id,title,order_id,text,file_url,type) VALUES('$clname','$clemail','$cln_id','$ordertitle','$order_id','null','$fileUrl','$fileType')");
    if ($add) {
        $last_id = mysqli_insert_id($db_conn);
        echo json_encode(["success" => true, "insertid" => $last_id]);
        return;
    } else {
        echo json_encode(["success" => false, "msg" => "Server Problem. Please Try Again"]);
        return;
    }
    // }
} else {
    echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
    return;
}

// ===============================================================================
