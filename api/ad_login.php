<?php
require "db_conn.php";
session_start();

$data = json_decode(file_get_contents("php://input"));

$_SESSION['id'] = "";

$email = $data->email;
$password = $data->password;

$result = mysqli_query($db_conn, "SELECT * FROM admin WHERE email = '$email'");

// $nums = mysqli_num_rows($result);
$fetch = mysqli_fetch_array($result);

// $viewjson["wrts_id"] = $id;
// echo json_encode(["success" => true, "writerid" => $viewjson]);
// return;

if (mysqli_num_rows($result) >= 1 && $email != '' && password_verify($password, $fetch['password'])) {
    http_response_code(200);
    $outp = "";

    // if (password_verify($password, $fetch['password'])) {


    $outp .= '{"email":"' . $fetch["email"] . '", ';
    $outp .= '{"name":"' . $fetch["name"] . '", ';
    $outp .= '{"id":"' . $fetch["id"] . '", ';
    $outp .= '{"Status":"200"}';

    // echo $outp;

    $_SESSION['id'] = $fetch["id"];
    $_SESSION['email'] = $email;

    $id = $_SESSION['id'];

    // while ($row = mysqli_fetch_array($result)) {
    $viewjson["id"] = $fetch["id"];
    $viewjson["wrt_id"] = $id;
    $viewjson["name"] = $fetch["name"];
    $viewjson["email"] = $fetch["email"];
    $viewjson["status"] = $fetch["status"];
    $viewjson["created_at"] = $fetch["created_at"];
    $viewjson["Status"] = "200";
    $json_array["writerdata"][] = $viewjson;

    // }
    echo json_encode(["success" => true, "writerlist" => $json_array]);
    header("location: ./getID.php?id=" . $id);
    return;
    // }


} else {
    http_response_code(202);
    echo json_encode(["success" => false]);
}
