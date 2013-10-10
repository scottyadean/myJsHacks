<?php

header('Content-type: application/json');

$params = array('units' => 'imperial',
                'sensor'=>'false',
                'mode'=>'driving',
                'origins'=> $_POST['start'],
                'destinations'=>$_POST['end']);

$url = 'http://maps.googleapis.com/maps/api/distancematrix/json' . '?' . http_build_query($params);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

$response = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

print $response;