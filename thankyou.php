<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>Thank you</title>
</head>
<body>
    <h1 style="text-align:center;color:black;font-family:cursive;margin-top:5px">Thank you for Donating!</h1>
    <?php
    
     include 'instamojo/Instamojo.php';
    $api = new Instamojo\Instamojo('test_c4f08db793c53360f99e5bcec67','test_0a0d4d401b46c18e22b5fb399b7', 'https://test.instamojo.com/api/1.1/');
    
     $payid=$_GET['payment_request_id'];
    try {
    $response = $api->paymentRequestStatus($payid);
    echo "<h4>Payment ID:".$response['payments'][0]['payment_id']."</h4>" ;
}
catch (Exception $e) {
    print(" Error: " .$e->getMessage());
}
?>
</body>
</html>