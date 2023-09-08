<?php
include('./dbConnection.php');
session_start();
require("./instamojo-php-0.4/src/Instamojo.php");
$api = new Instamojo\Instamojo("test_47ecd1e572bed054c25d2e509b2", "test_512849ec5cb76ed220e03f93c4c", 'https://test.instamojo.com/api/1.1/');


try {
    $payment_id = $_GET["payment_id"];
    $payment_re_id = $_GET["payment_request_id"];
    $response = $api->paymentRequestStatus($payment_re_id,$payment_id);
   
    // fetching data from response
    $status= $response['status'];
    if(strcmp($status,'Failed')==0){
        echo('Failed');
    }else{
        // Sending Data to databases
        $order_id= $_SESSION["orderid"];
        $stu_email= $_SESSION["custid"];
        $course_id= $_SESSION["course_id"];
        $amount= $_SESSION["amount"];

        $sql = "INSERT INTO courseorder(order_id, stu_email,course_id, status, amount) VALUES ('$order_id','$stu_email','$course_id','$status','$amount')";
        if($conn->query($sql)==TRUE){
            echo "Redirecting to My Profile...";
            echo "<script> setTimeout(()=>{
                window.location.href='./Student/myCourse.php';
            },1500);</script>";
        };
    }

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>