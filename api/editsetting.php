<?php
require 'db_conn.php';

$data = json_decode(file_get_contents("php://input"));

if (
    isset($data->facebook)
    && isset($data->facebook)
    // && isset($data->settingsid)
    && !empty(trim($data->facebook))
    // && !empty(trim($data->twitter))
    // && !empty(trim($data->settingsid))
) {

    $facebook = mysqli_real_escape_string($db_conn, trim($data->facebook));
    $twitter = mysqli_real_escape_string($db_conn, trim($data->twitter));
    $linkedin = mysqli_real_escape_string($db_conn, trim($data->linkedin));
    $instagram = mysqli_real_escape_string($db_conn, trim($data->instagram));
    $youtube = mysqli_real_escape_string($db_conn, trim($data->youtube));

    $add = mysqli_query($db_conn, "update settings set facebook ='$facebook', twitter ='$twitter', linkedin ='$linkedin', instagram ='$instagram', youtube ='$youtube' where id=1");

    if ($add) {
        echo json_encode(["success" => true]);
        return;
    } else {
        echo json_encode(["success" => false, "msg" => "Server Problem. Please Try Again"]);
        return;
    }
} else {
    echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
    return;
}
