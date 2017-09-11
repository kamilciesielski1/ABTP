<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri'=> 'http://localhost:8000',
    'defaults' => [
        'exceptions' => false
    ]
]);

$data = array(
    'nickname' => 'dupa',
    'avatarNumber' => 5,
    'tagLine' => 'a test dev!'
);

$response = $client->request('POST','/api/contacts', ['body' => json_encode($data)]);


echo $response->getBody();
echo "\n\n";
