<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));

$ordid = $data->ord_id;



$allEdits = mysqli_query($db_conn, "SELECT * FROM editor WHERE id = '$ordid'");
if (mysqli_num_rows($allEdits) > 0) {
    while ($row = mysqli_fetch_array($allEdits)) {
        $viewjson["id"] = $row['id'];
        // $viewjson["user_id"] = $row['user_id'];
        // $viewjson["academic_level"] = $row['academic_level'];
        // $viewjson["type_of_paper"] = $row['type_of_paper'];
        // $viewjson["subject_area"] = $row['subject_area'];
        // $viewjson["title"] = $row['title'];
        // $viewjson["no_of_pages"] = $row['pages'];
        // $viewjson["instructions"] = $row['instructions'];
        // $viewjson["ppt_slides"] = $row['ppt_slides'];
        // $viewjson["deadline"] = $row['deadline'];
        // $viewjson["coupon_code"] = $row['coupon_code'];
        // $viewjson["total"] = $row['total'];
        $viewjson["writer_id"] = $row['writer_id'];
        $viewjson["order_id"] = $row['order_id'];
        // $viewjson["writer_name"] = $row['writer_name'];
        // $viewjson["order_status"] = $row['order_status'];
        // $viewjson["assigned_to"] = $row['assigned_to'];
        // $viewjson["priority"] = $row['order_priority'];
        // $viewjson["date_assigned"] = $row['date_assigned'];
        $viewjson["text"] = $row['text'];
        // $viewjson["payment_status"] = $row['payment_status'];
        $viewjson["created_at"] = $row['created_at'];
        $json_array["editeddata"][] = $viewjson;
    }
    echo json_encode(["success" => true, "editedlist" => $json_array]);
    return;
} else {
    echo json_encode(["success" => false]);
    return;
}
