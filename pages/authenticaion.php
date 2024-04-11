<?php

use Google\Service\NetworkManagement\GoogleServiceInfo;

include_once "../config.php";
include_once "../includes/function.php";
include_once "../includes/route.inc.php";

require_once home_path() . '/vendor/autoload.php';


$client = new Google\Client();

$client->setApplicationName('Mentor Connect');
$client->setAuthConfig(home_path() . 'client_secret_401334880504-ccblqkv0bjb41r1tubg3fv1un6bjspmo.apps.googleusercontent.com.json');
// After authentication user will be redirected to this page
$client->setRedirectUri(home_path() .  'pages/index.php');
// Scope to minimize the file load and include only youtube api
$client->addScope(Google_Service_YouTube::YOUTUBE_READONLY);
