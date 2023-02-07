<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));

$ordid = $data->ord_id;

$sql = mysqli_query($db_conn, "SELECT * FROM delivered WHERE order_id = '$ordid'");

if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) {
        $viewjson["id"] = $row['id'];
        $viewjson["name"] = $row['name'];
        $viewjson["email"] = $row['email'];
        $viewjson["user_id"] = $row['user_id'];
        $viewjson["title"] = $row['title'];
        $viewjson["order_id"] = $row['order_id'];
        $viewjson["file_url"] = $row['file_url'];
        $viewjson["file_name"] = $row['file_name'];
        $viewjson["type"] = $row['type'];
        $viewjson["size"] = $row['size'];
        $viewjson["message"] = $row['message'];
        $viewjson["created_at"] = $row['created_at'];
        $json_array["deliverdata"][] = $viewjson;
    }
    echo json_encode(["success" => true, "deliverlist" => $json_array]);
    return;
} else {
    echo json_encode(["success" => false]);
    return;
}
