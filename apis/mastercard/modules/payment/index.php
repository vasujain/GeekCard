<?php
/**
 * Created by PhpStorm.
 * User: vasjain
 * Date: 6/7/14
 * Time: 3:05 AM
 */


require_once '../../lib/Simplify.php';

$getObject = new stdClass(); //$_GET;

try{
    if(isset($_GET['amount'])) {
        $getObject->amount = $_GET['amount'];
    } else {
        throw new Exception("Amount not set");
    }
    if(isset($_GET['currency'])) {
        $getObject->currency = $_GET['currency'];
    } else {
        $getObject->currency = "USD"; //Default currency
    }
    if(isset($_GET['desc'])) {
        $getObject->desc = $_GET['desc'];
    }
    createPaymentSimplify($getObject);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    print_r("\nException error: Invalid Input data.");
    exit;
}



function createPaymentSimplify($getObject) {
    Simplify::$publicKey = 'sbpb_NDk2ZjA2OGUtMjU4Ni00ODZmLThlN2ItOTNjOTcwMmY5M2Rh';
    Simplify::$privateKey = 'YCy3SkRI2awMqDufUinIKxN6EIotsidfBlQh7gPLZ9d5YFFQL0ODSXAOkNtXTToq';
    $token = $_POST['simplifyToken'];

    $payment = Simplify_Payment::createPayment(array(
        'amount' => ($getObject->amount) * 100,
        'token' => $token,
        'description' => $getObject->desc,
        'currency' => $getObject->currency,
        'card' => array(
            'expMonth' => '8',
            'expYear' => '16',
            'cvc' => '123',
            'number' => '5555555555554444'
        )

    ));

    $response = new stdClass();
    $response->id = $payment->id;
    $response->amount = $payment->amount;
    $response->currency = $payment->currency;
    if ($payment->paymentStatus == 'APPROVED') {
        $response->paymentStatus = $payment->paymentStatus;
    } else {
        $response->paymentStatus = 'ERROR';
    }
    $response->dateCreated = $payment->dateCreated;
    $response->paymentDate = $payment->paymentDate;
    $response->fee = $payment->fee;
    $response->refundedFees = $payment->refundedFees;
    $response->desc = $getObject->desc;
    $response->notes = "Payment approved for " . $payment->amount . " " . $payment->currency;
    $responseJson = json_encode($response);
    print_r($responseJson);

}
