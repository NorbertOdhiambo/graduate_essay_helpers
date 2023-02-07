<?php
include "./admin/conn.php";

$cpn_name = $_POST['cpn_name'];
$query = mysqli_query($con, "select * from coupon where coupon_code='$cpn_name' and status='valid'");
$row = mysqli_fetch_array($query);
if (mysqli_num_rows($query) > 0) {
    echo json_encode(array(
        "statusCode" => 200,
        "value" => $row['discount'],
        "success" => "successfull"
    ));
} else {
    echo json_encode(array("statusCode" => 201));
}
