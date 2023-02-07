<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Header: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With ");

include 'DbConn.php';
$objDb = new DbConnect;
$conn = $objDb->Connect();
// var_dump($conn);

// print_r(file_get_contents("php://input"));
// $user = file_get_contents("php://input");
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case "POST":
        $user = json_decode(file_get_contents("php://input"));
        $sql = "INSERT INTO admin(ad_id, first_name, last_name, ad_email, username, ad_password, role,  created_at) VALUES (null, :first_name, :last_name, :ad_email, :username, :ad_password, null, :created_at)";
        $stmt = $conn->prepare($sql);
        $created_at = date('Y-m-d');
        $stmt->bindParam(':first_name', $user->first_name);
        $stmt->bindParam(':last_name', $user->last_name);
        $stmt->bindParam(':ad_email', $user->email);
        $stmt->bindParam(':username', $user->username);
        $stmt->bindParam(':ad_password', $user->pwd);
        // $stmt->bindParam(':phone', $user->phone);
        // $stmt->bindParam(':address', $user->address);
        // $stmt->bindParam(':type', $user->type);
        // $stmt->bindParam(':status', $user->status);
        $stmt->bindParam(':created_at', $user->created_at);
        if ($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record created successfully'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to create record'];
        }
        break;
}

echo "admin page";
