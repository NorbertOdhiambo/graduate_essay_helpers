<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));


if (isset($data->name)) {

    $ordid = $data->ord_id;
    $usname = $data->name;

    $update = mysqli_query($db_conn, "UPDATE orders SET order_status = 'DELIVERED' where id='$ordid'");
    if ($update) {
        echo json_encode(["success" => true, "update" => "successful", "delivered" => "to $usname"]);
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
