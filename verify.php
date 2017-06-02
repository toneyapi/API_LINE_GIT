<?php
$access_token = 'KPj95sDsm94QvmQ3tPHmJnVXtEGMGk63gSwioT2+sFJvnOeSTI1USoc2ipqmvFhW2UBtX05BGS40FqAm3BRn9P1eMqe1CIkRJYCsBgxE8Zb+c6odEnb7bU3YvPu2WiFS022qrAF+jKVSn9/2QH3ltQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
