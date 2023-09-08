<?php
include('./dbConnection.php');
session_start();
require("./instamojo-php-0.4/src/Instamojo.php");
$api = new Instamojo\Instamojo("test_47ecd1e572bed054c25d2e509b2", "test_512849ec5cb76ed220e03f93c4c", 'https://test.instamojo.com/api/1.1/');

// Fetching data from the form
$orderid=$_POST["ORDER_ID"];
$amount=$_POST["TXN_AMOUNT"];
$email=$_POST["CUST_ID"];
$custid =$_POST["CUST_ID"];

// storing details in session
$_SESSION["orderid"] = $orderid;
$_SESSION["amount"] = $amount;
$_SESSION["email"] = $email;
$_SESSION["custid"] = $custid;

// Payment Request Creation
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Testing",
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
        "redirect_url" => "http://localhost/Elearning/success.php"
        ));
        $url=$response["longurl"];
        header("location:$url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>