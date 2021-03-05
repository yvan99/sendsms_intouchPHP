<?php
## SEND SMS VIA AN OPEN API OF INTOUCH.RW
$data = array(
    "sender" => 'Intouch',
    "recipients" => "0722404528", ## YOUR RECIPIENT NUMBER , YOU CAN SEND TO MANY USER BY JUST ADDING A COMMA
    "message" => "helloworld",
);

$url = "https://www.intouchsms.co.rw/api/sendsms/.json";
$data = http_build_query($data);
$username = "username"; ## ENTER YOUR INTOUCH ACCOUNT USERNAME
$password = "password"; ## ENTER YOUR INTOUCH ACCOUNT PASSWORD

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo $result;

echo $httpcode;
?>
