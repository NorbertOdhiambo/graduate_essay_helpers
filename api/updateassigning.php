<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));


if (isset($data->assigned_to)) {

    $ordid = $data->ord_id;

    $ordertitle = mysqli_real_escape_string($db_conn, trim($data->ordertitle));
    $assigned_to = mysqli_real_escape_string($db_conn, trim($data->assigned_to));
    $priority = mysqli_real_escape_string($db_conn, trim($data->priority));
    // $assign_date = mysqli_real_escape_string($db_conn, trim($data->assign_date));
    $assign_date = date('Y-m-d H:i:s');
    $notes = mysqli_real_escape_string($db_conn, trim($data->notes));
    $wrt_id = mysqli_real_escape_string($db_conn, trim($data->wrt_id));

    // $add = mysqli_query($db_conn, "insert into orders (writer_id,writer_name,order_priority,date_assigned,notes) values('$wrt_id','$assigned_to','$priority','$assign_date','$notes') where id='$ordid'");
    // $update = mysqli_query($db_conn, "UPDATE orders SET order_status = 'ASSIGNED' where id='$ordid'");
    $add = mysqli_query($db_conn, "UPDATE orders SET writer_id ='$wrt_id', writer_name ='$assigned_to', order_priority ='$priority', date_assigned ='$assign_date', notes ='$notes', order_status = 'ASSIGNED' where id='$ordid'");
    if ($add) {
        $last_id = mysqli_insert_id($db_conn);
        echo json_encode(["success" => true, "insertid" => $last_id, "text" => "$notes"]);
        return;
    } else {
        echo json_encode(["success" => false, "msg" => "Server Problem. Please Try Again"]);
        return;
    }
} else {
    echo json_encode(["success" => false, "msg" => "Please fill all the required fields!"]);
    return;
}
