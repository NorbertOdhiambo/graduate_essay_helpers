<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));
// if (
//     isset($data->userids)
//     && !empty(trim($data->userids))
// ) {
// $adduserid = mysqli_real_escape_string($db_conn, trim($data->userids));
$allUsers = mysqli_query($db_conn, "SELECT count(*) FROM tbl_users");
$rslts = mysqli_fetch_array($allUsers);

$viewjson["ttl"] = $rslts[0];
$json_array["userdata"][] = $viewjson;

echo json_encode(["success" => true, "userlist" => $json_array]);

// if (mysqli_num_rows($allUsers) > 0) {
//     // while ($row = mysqli_fetch_array($allUsers)) {
//     //     $viewjson["id"] = $row['id'];
//     //     $viewjson["first_name"] = $row['first_name'];
//     //     $viewjson["email"] = $row['email'];
//     //     $viewjson["created_at"] = $row['created_at'];
//     //     $json_array["userdata"][] = $viewjson;
//     // }
//     echo json_encode(["success" => true, "userlist" => $json_array]);
//     return;
// } else {
//     echo json_encode(["success" => false]);
//     return;
// }
// }
