<?php


$access_token = 'swv/ypvpeNZrmpYXbIO183BNoPHv4NovCYshcQ9cvFrbUfocZFjDxMahi4MLX1n9zz22wATbUGV6w5FRbsQyK/krnzjfgVTnKVisAQ25D9iOCLwEX1TM0RzaR+6wUKIednBFQPOtVC2Cq+kH7ubq1gdB04t89/1O/w1cDnyilFU=
';

$userId = 'U7576c28b0302ed7798794f0737787656
';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

