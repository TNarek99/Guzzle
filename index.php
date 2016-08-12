<?php
chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

/** @var $client Client */
$client = new Client(["base_uri" => "https://api.github.com"]);

/** @var $response \GuzzleHttp\Psr7\Response */
$response = $client->get('/users/TNarek99/gists');

$body = $response->getBody();

$content = json_decode($body->getContents());

echo "<pre>";
print_r($content[0]->files);
echo "</pre>";