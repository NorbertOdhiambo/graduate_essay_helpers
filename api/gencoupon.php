<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));

function coupon($l)
{
    $coupon = "GEH-" . substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ/', $l - 2)), 0, $l - 2);

    return $coupon;
}

// echo coupon(20);

$viewjson["coupon_code"] = coupon(25);
// $json_array["coupondata"][] = $viewjson;

echo json_encode(["success" => true, "coupondata" => $viewjson]);
return;
