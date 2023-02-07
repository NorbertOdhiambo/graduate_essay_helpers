<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));

$ordid = $data->ord_id;



$files = mysqli_query($db_conn, "SELECT * FROM additional_material WHERE order_id = '$ordid'");
if (mysqli_num_rows($files) > 0) {
    while ($row = mysqli_fetch_array($files)) {
        $viewjson["id"] = $row['id'];
        $viewjson["user_id"] = $row['user_id'];
        $viewjson["order_id"] = $row['order_id'];
        $viewjson["file"] = $row['file'];
        $json_array["filedata"][] = $viewjson;
    }
    echo json_encode(["success" => true, "filelist" => $json_array]);
    return;
} else {
    echo json_encode(["success" => false]);
    return;
}
