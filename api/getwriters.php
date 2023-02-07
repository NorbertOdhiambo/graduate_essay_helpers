<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));
// if (
//     isset($data->userids)
//     && !empty(trim($data->userids))
// ) {
// $adduserid = mysqli_real_escape_string($db_conn, trim($data->userids));
$allWriters = mysqli_query($db_conn, "SELECT * FROM writers");
if (mysqli_num_rows($allWriters) > 0) {
    while ($row = mysqli_fetch_array($allWriters)) {
        $viewjson["id"] = $row['id'];
        $viewjson["name"] = $row['name'];
        $viewjson["email"] = $row['email'];
        $viewjson["status"] = $row['status'];
        $viewjson["qualification"] = $row['qualification'];
        $viewjson["imgUrl"] = "https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60";
        $viewjson["created_at"] = $row['created_at'];
        $json_array["writerdata"][] = $viewjson;
    }
    echo json_encode(["success" => true, "writerslist" => $json_array]);
    return;
} else {
    echo json_encode(["success" => false]);
    return;
}
// }
