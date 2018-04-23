<?php

require_once 'vendor/autoload.php';
$config = include 'src/config.php';

$fb = new Facebook\Facebook([
	  'app_id' => $config['facebook_app_id'], // Replace {app-id} with your app id
	  'app_secret' => $config['facebook_secret'],
	  'default_graph_version' => 'v2.2',
]);