<?php

$curl = curl_init();

curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://sakshamuat.axisbank.co.in/gateway/api/v2/CRMNext/login',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => array('userName' => 'alwebuser','password' => 'acid_qa'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
