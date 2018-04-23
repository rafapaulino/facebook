<?php
require_once 'bootstrap.php';

/*

https://github.com/
rafaclasses@gmail.com
id 173237170048136

secret cc488c9000fd4e47c60ec9d83c9a238f

https://scotch.io/@phalconVee/deploying-a-php-and-mysql-web-app-with-heroku
http://www.phprs.com.br/2016/06/hospedando-aplicacao-php-no-heroku/
https://devcenter.heroku.com/articles/heroku-cli#download-and-install
https://themes.tielabs.com/demo.php?theme=arqam

*/
/*
 var_dump($fb);
$fql = "SELECT fan_count FROM page WHERE username = 'fiesp'"; // XXXXX is your username.
$response = $fb->api(array(
'method' => 'fql.query',
'query' =>$fql,
));
 
$response_count = $response['0']['fan_count']; // that's it! use $response_count to show the total likes.
 
echo "Total Fans: " . $response_count;
*/



function fbLikeCount($id,$appid,$appsecret){
  echo $json_url ='https://graph.facebook.com/'.$id.'?access_token='.$appid.'|'.$appsecret.'&fields=fan_count';
  $json = file_get_contents($json_url);
  $json_output = json_decode($json);
  //Extract the likes count from the JSON object
  if($json_output->fan_count){
    return $fan_count = $json_output->fan_count;
  }else{
    return 0;
  }
}
echo fbLikeCount('coregenie','173237170048136','cc488c9000fd4e47c60ec9d83c9a238f');