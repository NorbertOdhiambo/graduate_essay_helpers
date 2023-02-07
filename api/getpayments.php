<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));
// if (
//     isset($data->userids)
//     && !empty(trim($data->userids))
// ) {
// $adduserid = mysqli_real_escape_string($db_conn, trim($data->userids));
$allPayments = mysqli_query($db_conn, "SELECT * FROM payments");
if (mysqli_num_rows($allPayments) > 0) {
    while ($row = mysqli_fetch_array($allPayments)) {
        $viewjson["id"] = $row['id'];
        $viewjson["ord_id"] = $row['ord_id'];
        $viewjson["user_id"] = $row['user_id'];
        $viewjson["name"] = $row['name'];
        $viewjson["email"] = $row['email'];
        $viewjson["payer_id"] = $row['payer_id'];
        $viewjson["order_id"] = $row['order_id'];
        $viewjson["transaction_id"] = $row['transaction_id'];
        $viewjson["amount"] = $row['amount'];
        $viewjson["currency"] = $row['currency'];
        $viewjson["status"] = $row['status'];
        $json_array["paymentdata"][] = $viewjson;
    }
    echo json_encode(["success" => true, "paymentlist" => $json_array]);
    return;
} else {
    echo json_encode(["success" => false]);
    return;
}
// }
