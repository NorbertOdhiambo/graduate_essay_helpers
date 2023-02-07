<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));
// if (
//     isset($data->userids)
//     && !empty(trim($data->userids))
// ) {
// $adduserid = mysqli_real_escape_string($db_conn, trim($data->userids));
$allsettings = mysqli_query($db_conn, "SELECT * FROM settings where id = 4");
if (mysqli_num_rows($allsettings) > 0) {
    while ($row = mysqli_fetch_array($allsettings)) {
        $viewjson["id"] = $row['id'];
        $viewjson["email"] = $row['email'];
        $viewjson["phone"] = $row['phone'];
        $viewjson["map"] = $row['map'];
        $viewjson["site_name"] = $row['site_name'];
        $viewjson["address"] = $row['address'];
        $json_array["settingdata"][] = $viewjson;
    }
    echo json_encode(["success" => true, "settinglist" => $json_array]);
    return;
} else {
    echo json_encode(["success" => false]);
    return;
}
// }
