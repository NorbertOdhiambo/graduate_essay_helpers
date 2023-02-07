<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));

$userid = $data->user_id;

$user = mysqli_query($db_conn, "SELECT * FROM tbl_users WHERE id = '" . $userid . "'");
if (mysqli_num_rows($user) > 0) {
    while ($row = mysqli_fetch_array($user)) {
        $viewjson["id"] = $row['id'];
        $viewjson["first_name"] = $row['first_name'];
        $viewjson["last_name"] = $row['last_name'];
        $viewjson["name"] = $row['first_name'] . " " . $row['last_name'];
        $viewjson["email"] = $row['email'];
        $viewjson["username"] = $row['username'];
        $viewjson["created_at"] = $row['created_at'];
        $json_array["userdata"][] = $viewjson;
    }
    echo json_encode(["success" => true, "userlist" => $json_array]);
    return;
} else {
    echo json_encode(["success" => false]);
    return;
}
// }
