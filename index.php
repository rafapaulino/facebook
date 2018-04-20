<?php

require_once 'vendor/autoload.php';




/*
	Display the Number of Facebook Page Likes in Plain Text with WordPress Shortcode (and PHP)
	Shortcode: [fbpagelikes id="" appid="" appsecret="" cache="" n="1"]
	https://github.com/facebook/php-graph-sdk/issues/688
*/

/*
function internoetics_fb_pagelikes($atts) {
  $id = 'fiesp';
  $appid = '1422766307990531';
  $appsecret = 'a961654de34e12259c413a611133bf50';


  echo $json_url ='https://graph.facebook.com/' . $id . '?fields=fan_count&access_token=' . $appid . '|' . $appsecret;
  $json = file_get_contents($json_url);
  $json_output = json_decode($json);
 
  if($json_output->fan_count) {
   $fan_count = $json_output->fan_count;
   if ($n) $fan_count = number_format($fan_count);
   set_transient($fbcountrecord, $fan_count, $cache);
   return $fan_count;
    } else {
   return 'Unavailable';
  }
}

$result = internoetics_fb_pagelikes(array());
var_dump($result);


function dez_get_the_fb_like( $fb_pagename = '' ) {
$fburl = 'https://www.facebook.com/'. $fb_pagename;
$params = 'select like_count from link_stat where url = "'.$fburl.'"';
$component = urlencode( $params );
echo $urls = 'http://graph.facebook.com/fql?q='.$component;
$string = file_get_contents( $urls );
if( $string ) {
 $fbLIkeAndSahre = json_decode( $string );
 $getFbStatus = $fbLIkeAndSahre->data['0'];
 $likecount = $getFbStatus->like_count;
 return $likecount;
} else {
 return 'Data did not exist';
}
}

//https://developers.facebook.com/apps/1422766307990531/settings/advanced/


echo dez_get_the_fb_like( 'fiesp' );
*/

/*

https://gist.github.com/andrewspear/6348709
https://99webtools.com/blog/php-script-to-get-social-share-count/

https://github.com/claudiosanches/social-count-plus/blob/master/includes/counters/class-social-count-plus-linkedin-counter.php
https://api.linkedin.com/v1/companies/fiesp/num-followers?format=json

https://gist.github.com/cosenary/7267139

https://stackoverflow.com/questions/14414606/getting-basic-information-from-instagram-using-php


https://devcenter.heroku.com/articles/getting-started-with-php#introduction




*/




//https://developers.facebook.com/docs/facebook-login/access-tokens/refreshing/#generate-long-lived-token
//https://sujipthapa.co/blog/generating-never-expiring-facebook-page-access-token
//https://developers.facebook.com/docs/reference/php#sdk-de-php-no-github
//https://github.com/facebook/php-graph-sdk
//composer require facebook/graph-sdk
//https://developers.facebook.com/docs/graph-api/reference/v2.12/object/likes
/* PHP SDK v5.0.0 */
/* make the API call */
/*try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get(
    '/{object-id}/likes',
    '{access-token}'
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

/*

pega o total de seguidores no twitter
https://itsolutionstuff.com/post/how-to-retrieve-number-of-twitter-followers-count-without-authentication-or-api-example.html
https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=twitterusername



*/