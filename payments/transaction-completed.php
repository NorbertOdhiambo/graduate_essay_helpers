<?php
//1. Import the PayPal SDK client
namespace Sample;

require __DIR__ . '/vendor/autoload.php';

use Sample\PayPalClient;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;

require 'paypal-client.php';

$orderID = $_GET['orderID'];

// require "../admin/conn.php";
// require "../admin/auth.php";

$itm_id = $_GET['prdId'];

// $user_id = $_SESSION['id'];

class GetOrder
{

    // 2. Set up your server to receive a call from the client
    public static function getOrder($orderId)
    {

        // 3. Call PayPal to get the transaction details
        $client = PayPalClient::client();
        $response = $client->execute(new OrdersGetRequest($orderId));

        // transaction details
        $orderID = $response->result->id;
        $email = $response->result->payer->email_address;
        $name = $response->result->purchase_units[0]->shipping->name->full_name;
        $payer_id = $response->result->payer->payer_id;
        $amount = $response->result->purchase_units[0]->amount->value;
        $currency = $response->result->purchase_units[0]->amount->currency_code;
        $transaction_id = $response->result->purchase_units[0]->payments->captures[0]->id;
        $status = $response->result->purchase_units[0]->payments->captures[0]->status;
        // $address1 = $response->result->purchase_units[0]->address->address_line_1;
        // $address2 = $response->result->purchase_units[0]->address->admin_area_2;
        // $address3 = $response->result->purchase_units[0]->address->admin_area_1;
        // $address4 = $response->result->purchase_units[0]->address->postal_code;
        // $address5 = $response->result->purchase_units[0]->address->country_code;
        // $FullAddress = $address1 . ", " . $address2 . ", " . $address3 . ", " . $address4 . ", " . $address5;
        // $address = $response->result->purchase_units[0]->shipping->address;

        // insert data to a database
        include("../admin/conn.php");
        include "../admin/auth.php";

        $user_id = $_SESSION['id'];
        $itm_id = $_GET['prdId'];

        $stmt = $con->prepare('INSERT INTO `payments` (ord_id, user_id, name, email, payer_id, order_id, transaction_id, amount, currency, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param(
            'ssssssssss',
            $itm_id,
            $user_id,
            $name,
            $email,
            $payer_id,
            $orderID,
            $transaction_id,
            $amount,
            $currency,
            $status
            // $FullAddress
        );
        $stmt->execute();

        if (!$stmt) {
            echo "An error occurred" . mysqli_error($con);
            print_r("An error occurred" . mysqli_error($con));
        } else {

            $itm_id = $_GET['prdId'];
            
            $update = mysqli_query($con, "UPDATE orders SET payment_status = 'PAID' WHERE id = $itm_id");

            $nxt = mysqli_query($con, "SELECT * FROM orders WHERE id = $itm_id");

            while ($pg = mysqli_fetch_assoc($nxt)) {
                header("location: https://graduate-essay-helpers.com/order/choose-payment.php?id=" . $pg['id']);
                exit;
            }
        }
        $stmt->close();
        $con->close();


        header("Location:../success");
    }
}

if (!count(debug_backtrace())) {
    GetOrder::getOrder($orderID, true);
}
