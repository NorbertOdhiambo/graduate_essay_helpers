<?php
require 'db_conn.php';
$data = json_decode(file_get_contents("php://input"));

$allCoupons = mysqli_query($db_conn, "SELECT * FROM coupon");
if (mysqli_num_rows($allCoupons) > 0) {
    while ($row = mysqli_fetch_array($allCoupons)) {
        $viewjson["id"] = $row['id'];
        $viewjson["coupon_code"] = $row['coupon_code'];
        $viewjson["discount"] = $row['discount'];
        $viewjson["status"] = $row['status'];
        $viewjson["expiry_date"] = $row['expiry_date'];
        $viewjson["user_email"] = $row['user_email'];
        $viewjson["user_id"] = $row['user_id'];

        $sql = mysqli_query($db_conn, "SELECT * FROM tbl_users WHERE id = '" . $row['user_id'] . "'");
        $fetch = mysqli_fetch_array($sql);

        $viewjson['first_name'] = $fetch['first_name'];
        $viewjson['last_name'] = $fetch['last_name'];
        $viewjson['name'] = $fetch['first_name'] . $fetch['last_name'];
        $viewjson['email'] = $fetch['email'];
        $viewjson['imgUrl'] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzI84NUyJtcLGgChkAbc4slz0Qz4cPTIW9CSe-Qox4qm0GxPNwbjE-QfjH5ElkZcp-jbU&usqp=CAU";
        $viewjson["created_at"] = $row['created_at'];
        $json_array["coupondata"][] = $viewjson;
    }
    echo json_encode(["success" => true, "couponlist" => $json_array]);
    return;
} else {
    echo json_encode(["success" => false]);
    return;
}
// }
