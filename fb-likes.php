<?php
require_once 'bootstrap.php';

/* PHP SDK v5.0.0 */
/* make the API call */
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get(
    '/196613427043958',
    'EAACdjuv7jIgBABZBGj4YH5son6CP6dgnvxmGipx89UlnMJ7l6OLJDfEMglAgAZCX6du8Ic0oF5qXq6dZBRG67rly6bUuwE3mAguCZBtTSoIIqyeHSZCUZA9Sj6tf371LYcXRgHUs1m8s3iKrNe20BozwzcNF27rzVgixmL35a9SAZDZD'
  );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
/* handle the result */

var_dump($graphNode);