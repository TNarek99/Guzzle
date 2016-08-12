<?php

define("ROOT_PATH", '/var/www/html/DAY38/guzzle/');

chdir(dirname(__DIR__));

require_once ROOT_PATH . 'vendor/autoload.php';

use GuzzleHttp\Client;

/** @var $client Client */
$client = new Client(["base_uri" => "https://api.github.com"]);

/** @var $response \GuzzleHttp\Psr7\Response */
$response = $client->get('/users/TNarek99/gists');

$body = $response->getBody();

$content = json_decode($body->getContents(), true);

/*$object = $content[0]->files;
$name = 'third.php';*/

reset($content[0]['files']);
$first_key = key($content[0]['files']);

echo "<pre>";
print_r($content[0]['files'][$first_key]);
echo "</pre>";

echo "<pre>";
print_r($content[0]);
echo "</pre>";