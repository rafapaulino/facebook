<?php 
require_once 'bootstrap.php';

$fb = new Facebook\Facebook([
	  'app_id' => $config['facebook_app_id'], // Replace {app-id} with your app id
	  'app_secret' => $config['facebook_secret'],
	  'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl( $config['base_url'] . 'fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';