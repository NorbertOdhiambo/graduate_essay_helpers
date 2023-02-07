<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));

if (isset($data->ord_id)) {

    $ordid = mysqli_real_escape_string($db_conn, trim($data->ord_id));

    $sql = mysqli_query($db_conn, "SELECT * FROM orders WHERE id ='567'");


    if (mysqli_num_rows($sql) > 0) {

        print_r("the statement is true");

        $row = mysqli_fetch_array($sql);

        $viewjson["id"] = $row['id'];
        $viewjson["user_id"] = $row['user_id'];
        $viewjson["academic_level"] = $row['academic_level'];
        $viewjson["deadline"] = $row['deadline'];
        $viewjson["coupon_code"] = $row['coupon_code'];
        $viewjson["total"] = $row['total'];
        $viewjson["order_status"] = $row['order_status'];
        $viewjson["payment_status"] = $row['payment_status'];
        $viewjson["created_at"] = $row['created_at'];
        $json_array['orderdata'][] = $viewjson;
        echo json_encode(["success" => true, "orderlist" => $json_array]);
        return;
    } else {
        echo json_encode(["success" => false]);
        return;
    }

    echo "id given is $ordid";
}



// $thisOrder = mysqli_query($db_conn, "SELECT * FROM orders WHERE id=275");
// if (mysqli_num_rows($thisOrder) > 0) {
//     $row = mysqli_fetch_array($thisOrder);
//     $viewjson["id"] = $row['id'];
//     $viewjson["user_id"] = $row['user_id'];
//     $viewjson["academic_level"] = $row['academic_level'];
//     $viewjson["deadline"] = $row['deadline'];
//     $viewjson["coupon_code"] = $row['coupon_code'];
//     $viewjson["total"] = $row['total'];
//     $viewjson["order_status"] = $row['order_status'];
//     $viewjson["payment_status"] = $row['payment_status'];
//     $viewjson["created_at"] = $row['created_at'];
//     $json_array["orderdata"][] = $viewjson;

//     echo json_encode(["success" => true, "orderlist" => $json_array]);
//     return;
// } else {
//     echo json_encode(["success" => false]);
//     return;
// }
// }
