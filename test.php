<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/089843d6303b465b94669ec61119b60f/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:95f8aaec011f218da370a3cc478b1954",
                  "X-Auth-Token:a6dc9e938dbd556dfd35cee2cfd7c9d5"));
$response = curl_exec($ch);

$phpvar = json_decode($response);
//$ch_id = $response['payment_request']['purpose'];
	echo $response;
?>