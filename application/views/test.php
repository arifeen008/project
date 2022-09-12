<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://oil-thai-price.p.rapidapi.com/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: oil-thai-price.p.rapidapi.com",
		"X-RapidAPI-Key: 903db35c9dmshfe0b664b1d074aap1d4935jsnee2cce051a4b"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}