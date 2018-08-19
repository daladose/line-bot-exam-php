<?php



require "vendor/autoload.php";

$access_token = 'swv/ypvpeNZrmpYXbIO183BNoPHv4NovCYshcQ9cvFrbUfocZFjDxMahi4MLX1n9zz22wATbUGV6w5FRbsQyK/krnzjfgVTnKVisAQ25D9iOCLwEX1TM0RzaR+6wUKIednBFQPOtVC2Cq+kH7ubq1gdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '1c3a11fc6f6e5b65f8ddd907861bce44';

$pushID = 'U7576c28b0302ed7798794f0737787656';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีครับ ที่นี่ที่ไหน ใช่ที่รักมั้ยครับ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







