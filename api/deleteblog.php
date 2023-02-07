<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));

$blogId = $data->blg_id;

$sql = mysqli_query($db_conn, "DELETE FROM blog WHERE id = '$blogId'");

if ($sql) {
    echo "item deleted";
}

// if (mysqli_num_rows($sql) > 0) {
//     while ($row = mysqli_fetch_array($sql)) {
//         $viewjson["id"] = $row['id'];
//         $viewjson["name"] = $row['name'];
//         $viewjson["email"] = $row['email'];
//         $viewjson["user_id"] = $row['user_id'];
//         $viewjson["title"] = $row['title'];
//         $viewjson["order_id"] = $row['order_id'];
//         $viewjson["text"] = $row['text'];
//         $viewjson["file_url"] = $row['file_url'];
//         $viewjson["type"] = $row['type'];
//         $viewjson["created_at"] = $row['created_at'];
//         $json_array["blogdata"][] = $viewjson;
//     }
//     echo json_encode(["success" => true, "bloglist" => $json_array]);
//     return;
// } else {
//     echo json_encode(["success" => false]);
//     return;
// }
