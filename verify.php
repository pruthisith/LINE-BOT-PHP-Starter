<?php
$access_token = 'W4IZhlwDNV6KCIzLagcbvzGbVwSmNagp5YF3E1Jsd5WB9+8GkXIGqIS8xR8GaIcLvfF/bGvJMmXex+b3U2RaTFsKYQFVCzQoYJYACEdf/LiSnrbA94W6HcucZsVnISd5Rq3NArlaBRPPmGr/1BPWRQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);


curl_close($ch);


echo $result;

