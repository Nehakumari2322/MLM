<?php

    $amount ='1';


    // session_start();

    // $_SESSION['name']  = $name;
    // $_SESSION['email']  = $email;
    // $_SESSION['mobile']  = $mobile;



    $merchantid  = MERCHANTIDUAT;
    $saltkey = SALTKEYUAT;
    $saltindex = SALTINDEX;
    echo "iusdgb".$data['id'] ;

    $payLoad = array(
        'merchantId' => $merchantid,
        'merchantTransactionId' => "MT-" . $data['id'] , // test transactionID
        "merchantUserId" => "M-" . uniqid(),
        'amount' => $amount * 100, 
        'redirectUrl' => URLROOT . REDIRECTURL,
        'redirectMode' => "POST",
        'callbackUrl' => URLROOT . REDIRECTURL,
        "mobileNumber" => $mobile,
        // "email" => $email,
        // "param1"=>$email,
        "paymentInstrument" => array(
            "type" => "PAY_PAGE",
        )
    );

    $jsonencode = json_encode($payLoad);

    $payloadbase64 = base64_encode($jsonencode);

    $payloaddata = $payloadbase64 . "/pg/v1/pay" . $saltkey;


    $sha256 = hash("sha256", $payloaddata);

    $checksum = $sha256 . '###' . $saltindex;

    echo $checksum;


    $request = json_encode(array('request' => $payloadbase64));

    $url = '';
    if (API_STATUS == "LIVE") {
        $url = LIVEURLPAY;
    } else {
        $url = UATURLPAY;
    }

    echo "<br/>" . $url;




    $curl = curl_init(); // This extention should be installed

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $request,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "X-VERIFY: " . $checksum,
            "accept: application/json"
        ],
    ]);

    $response = curl_exec($curl);

    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $res = json_decode($response);

      echo "<br/>response===";
      print_r($res);

      if (isset($res->success) && $res->success == '1') {
        $paymentCode=$res->code;
        $paymentMsg=$res->message;
        echo $paymentCode;
        $payUrl = $res->data->instrumentResponse->redirectInfo->url;
        header('Location:' . $payUrl);
      }

    }

