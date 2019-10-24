<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://jsonplaceholder.typicode.com/todos/1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
i	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: dark-sky.p.rapidapi.com",
		"x-rapidapi-key: 15477decbcmshde5ccbb1ed1563bp170bd6jsne233cfb99687"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
