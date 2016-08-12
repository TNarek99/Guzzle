<?php
chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

/** @var $client Client */
$client = new Client(["base_uri" => "https://qrng.anu.edu.au"]);

/** @var $response \GuzzleHttp\Psr7\Response */
$response = $client->get('/API/jsonI.php?length=7&type=uint8');

$body = $response->getBody();

$content = json_decode($body->getContents());

echo "<pre>";
print_r($content);
echo "</pre>";

