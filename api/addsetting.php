<?php
require 'db_conn.php';

$data = json_decode(file_get_contents("php://input"));

$result = mysqli_query($db_conn, "SELECT * FROM settings where id='1'");
$row = mysqli_fetch_array($result);
$edit = $row['id'];

if (
    isset($data->site_name)
    // && isset($data->site_name)
    || !empty(trim($data->site_name))
    // && !empty(trim($data->site_name))
) {

    $site_name = mysqli_real_escape_string($db_conn, trim($data->site_name));
    $phone = mysqli_real_escape_string($db_conn, trim($data->phone));
    $comp_email = mysqli_real_escape_string($db_conn, trim($data->comp_email));
    $map = mysqli_real_escape_string($db_conn, trim($data->map));
    $address = mysqli_real_escape_string($db_conn, trim($data->address));
    $sett_id = mysqli_real_escape_string($db_conn, trim($data->setting_id));
    // $date = date('Y-m-d');

    if ($edit == "") {
        $add = mysqli_query($db_conn, "insert into settings (email,phone,map, address, site_name) values('$comp_email','$phone','$map','$address','$site_name')");
        if ($add) {
            $last_id = mysqli_insert_id($db_conn);
            echo json_encode(["success" => true, "insertid" => $last_id]);
            return;
        } else {
            echo json_encode(["success" => false, "msg" => "Server Problem. Please Try Again"]);
            return;
        }
    } else {
        $update = mysqli_query($db_conn, "update settings set site_name ='$site_name', email ='$comp_email', phone ='$phone', address ='$address', map ='$map' where id='1'");
        if ($update) {
            echo json_encode(["success" => true]);
            return;
        } else {
            echo json_encode(["success" => false, "msg" => "Server Problem. Please Try Again"]);
            return;
        }
    }
} else {
    echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
    return;
}

echo "add setting test file...";
