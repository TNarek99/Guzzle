<?php

chdir(dirname(__DIR__));

require_once ROOT_PATH . 'vendor/autoload.php';
require_once ROOT_PATH . 'classes/Profile.php';
require_once ROOT_PATH . 'classes/Gist.php';
require_once ROOT_PATH . 'classes/File.php';

use GuzzleHttp\Client;


class GistController
{
    public function listAction()
    {
        $username = $_GET['username'];

        /** @var $client Client */
        $client = new Client(["base_uri" => "https://api.github.com"]);

        /** @var $response \GuzzleHttp\Psr7\Response */
        $response = $client->get('/users/' . $username . '/gists');

        $body = $response->getBody();

        $content = json_decode($body->getContents(), true);

        foreach ($content as $item) {
            //the gist object
            $gist = new Gist();

            //url and creation date for the gist object
            $url = $item['url'];
            $dateCreated = $item['created_at'];

            //detailed profile object for the gist object
            $owner = new Profile();
            $owner->setLogin($item['owner']['login']);
            $owner->setUrl($item['owner']['html_url']);
            $owner->setAvatarUrl($item['owner']['avatar_url']);
            
            //get the gist file information
            reset($item['files']);
            $first_key = key($item['files']);
            $fileName = $item['files'][$first_key]['filename'];
            
            //detailed file object for the gist object
            $file = new File();
            $file->setName($fileName);

            //set gist object properties
            $gist->setOwner($owner);
            $gist->setFile($file);
            $gist->setUrl($url);
            $gist->setCreatedAt($dateCreated);

            require ROOT_PATH . 'View/Gist/list.php';
        }
    }
}