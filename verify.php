<?php
$access_token = '13HdqTxe+9PMZQ8Fb/Y0vYpNLU/nYR3di3EceteTPJko6CKSSMQWmt2miwi73T3CUcCaY8ayj6rZ43IfsW9+XRxy4OVdYT1JA53RmC8CdKaQYPAYNvKa0oGBLdTHjCu26VSBUH2dUnWnfwtwJ/pzSgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
