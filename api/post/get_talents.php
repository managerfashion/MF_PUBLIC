<?php

$post = [
		'token' => 'TOKEN',
		'page'   => 0,
		'per_page' => 10,
	];
	
$ch = curl_init('https://managerfashion.com/api/rest/api.php/talents');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$responseExec = curl_exec($ch);
$response = json_decode($responseExec);

var_dump($response);

curl_close($ch);
