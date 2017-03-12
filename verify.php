<?php
$access_token = 'W4IZhlwDNV6KCIzLagcbvzGbVwSmNagp5YF3E1Jsd5WB9+8GkXIGqIS8xR8GaIcLvfF/bGvJMmXex+b3U2RaTFsKYQFVCzQoYJYACEdf/LiSnrbA94W6HcucZsVnISd5Rq3NArlaBRPPmGr/1BPWRQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';
$url2 = 'https://api.line.me/v2/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);

$ch2 = curl_init($url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
$result2 = curl_exec($ch2);

curl_close($ch);
curl_close($ch2);

echo $result;
echo $result2;
